import  { incrementCustomProperty, setCustomProperty, getCustomProperty } from './updateCustomProperty.js';

const SPEED = 0.05;
const groundElems = document.querySelectorAll('[data-ground]');

// Permite que el 'ground' sea infinito
export function setupGround() {
    setCustomProperty(groundElems[0], "--left", 0);
    setCustomProperty(groundElems[1], "--left", 300);// Width que le hemos aplicado al 'ground' en mi caso, 300%
}

// Mover el terreno en función de nuestra variabler delta (tasa refresco)
export function updateGround(delta, speedScale) {
    groundElems.forEach(ground => {
        incrementCustomProperty(ground, "--left", delta * speedScale * SPEED * -1);

        // Si ha terminado de recorrer toda su longitud, empezar de nuevo 
        if (getCustomProperty(ground, "--left") <= -300) { 
            incrementCustomProperty(ground, "--left", 600);
        }
    })
}