import {  updateGround, setupGround } from './ground.js';
import {  updateDino, setupDino, getDinoRect, setDinoLose } from './dino.js';
import {  updateCactus, setupCactus, getCactusRects } from './cactus.js';

// Constantes de escalado del juego
const WORLD_WIDTH = 100;
const WORLD_HEIGHT = 30;
const SPEED_SCALE_INCREASE = 0.00001;

const worldElem = document.querySelector('[data-world]');
const scoreElem = document.querySelector('[data-score]');
const startScreenElem = document.querySelector('[data-start-screen]');

setPixelToWorldScale()
window.addEventListener('resize', setPixelToWorldScale);
document.addEventListener("keydown", handleStart, { once: true }); // --> once true hace que el event listener sólo se pueda usar 1 sola vez

setupGround();

/*
Esta función nos sirve para poder 'timear' el movimiento de nuestro avatar con la tasa de resfresco de 
nuestro monitor para evitar fallos de visualization
*/
let lastTime;
let speedScale;
let score;
function update(time) {
    // Evitar errores (primera vez que se ejecuta el código hace que delta se 5 veces más alto de lo que debería)
    if (lastTime == null) {
        lastTime = time;
        window.requestAnimationFrame(update);
        return
    }

    const delta = time - lastTime; // Tiempo de tasa de resfresco
    
    updateGround(delta, speedScale);
    updateDino(delta, speedScale);
    updateCactus(delta, speedScale);
    increaseSpeed(delta);
    updateScore(delta);
    if (checkLoose()) return handleLoose();

    lastTime = time;
    // RequestAnimationFrame se ejecuta en función de la tasa de refresco de nuestro monitor
    window.requestAnimationFrame(update);
}

function increaseSpeed(delta) {
    speedScale += delta * SPEED_SCALE_INCREASE;
}

function checkLoose() {
    const dinoRect = getDinoRect();
    return getCactusRects().some(rect => isCollision(rect, dinoRect));
}

// Comprobar 'colisión'/superposión entre los rect del Avatar y los cactus
function isCollision(rect1, rect2) {
    return (
        rect1.left < rect2.right &&
        rect1.top < rect2.bottom &&
        rect1.right > rect2.left &&
        rect1.bottom > rect2.top
    );
}

function updateScore(delta) {
    score += delta * 0.01;
    scoreElem.textContent = Math.floor(score);// Para evitar formatos extraños
}

// Inicio partida
function handleStart() {
    console.log('piopo')
    lastTime = null;
    speedScale = 1;
    score = 0;
    startScreenElem.classList.add('hide');
    setupGround();
    setupDino();
    setupCactus();
    window.requestAnimationFrame(update);
}

function handleLoose() {
    setDinoLose();
    // setTimeout() evita que recarges el juego de manera accidental por pulsar el espacio de sobremanera
    setTimeout(() => {
        document.addEventListener('keydown', handleStart, { once: true });
        startScreenElem.classList.remove('hide');
    }, 100);
}

// Autoescalado del minijuego dependiendo del tamaño de la pantalla
function setPixelToWorldScale() {
    let worldToPixelScale;
    // Si nuestra ventana es más grnade que el ratio del 'mundo' del juego, escalar el tamaño del 'mundo'
    if (window.innerWidth / window.innerHeight < WORLD_WIDTH / WORLD_HEIGHT) {
        worldToPixelScale = window.innerWidth / WORLD_WIDTH;
    } else {
        worldToPixelScale = window.innerHeight / WORLD_HEIGHT;
    }
    
    worldElem.style.width = `${WORLD_WIDTH * worldToPixelScale}px`;
    worldElem.style.height = `${WORLD_HEIGHT * worldToPixelScale}px`;
} 