import { incrementCustomProperty, getCustomProperty, setCustomProperty } from "./updateCustomProperty";

const dinoElem = document.querySelector('[data-dino]');
const JUMP_SPEED = 0.45;
const GRAVITY = 0.0015;
const DINO_FRAME_COUNT = 2; // Cantidad de frames que tiene nuestro avatar
const FRAME_TIME = 100; // Cada frame de nuestras animación durará x, donde x es 100 milisegundos

let isJumping;
let isRunning;
let currentFrameTime;
let dinoFrame;
let yVelocity;
export function setupDino() {
    isJumping = false;
    isRunning = false;
    dinoFrame = 0;
    currentFrameTime = 0;
    yVelocity = 0;
    setCustomProperty(dinoElem, "--bottom", 0);
    document.removeEventListener('keydown', onJump);
    document.addEventListener('keydown', onJump);
}

export function updateDino(delta, speedScale) {
    handleRun(delta, speedScale);
    handleJump(delta);
}

export function getDinoRect() {
    return dinoElem.getBoundingClientRect(); // Este método nos devuelve el tamaño de un elemento y su posición relativa al viewport
}

export function setDinoLose() {
    dinoElem.src = "./imgs/dino-lose.png";
}

function handleRun(delta, speedScale) {
    if (isJumping) {
        dinoElem.src = `./imgs/dino-stationary.png`;
        return
    }

    if (currentFrameTime > FRAME_TIME) {
        dinoFrame = (dinoFrame + 1) % DINO_FRAME_COUNT;
        
        dinoElem.src = `./imgs/dino-run-${dinoFrame}.png`; // Teniendo en cuenta el nombre de las fotos cambiará de imagen entre los 'frames' que tengamos
        currentFrameTime -= FRAME_TIME;
    }
    currentFrameTime += delta * speedScale;
}

function handleJump(delta) {
    if (!isJumping) return;

    incrementCustomProperty(dinoElem, "--bottom", yVelocity * delta);
    
    // Evitar que el dinosario caiga por debajo del mapa despues de saltar
    if (getCustomProperty(dinoElem, "--bottom") <= 0) {
        setCustomProperty(dinoElem, "--bottom", 0);
        isJumping = false;
    }

    yVelocity -= GRAVITY * delta; 
}

function onJump(e) {
    if (e.code !== "Space") return;

    yVelocity = JUMP_SPEED;
    isJumping = true;
}