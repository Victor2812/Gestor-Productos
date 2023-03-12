import { incrementCustomProperty, setCustomProperty, getCustomProperty } from "./updateCustomProperty";

const SPEED = 0.05;
const CACTUS_INTERVAL_MIN = 500;
const CACTUS_INTERVAL_MAX = 2000;
const worldElem = document.querySelector('[data-world]');

let nexCactusTime;
export function setupCactus() {
    nexCactusTime = CACTUS_INTERVAL_MIN;
    document.querySelectorAll('[data-cactus]').forEach(cactus => {
        cactus.remove();
    });
}

export function updateCactus(delta, speedScale) {
    document.querySelectorAll('[data-cactus]').forEach(cactus => {
        incrementCustomProperty(cactus, "--left", delta * speedScale * SPEED * -1);
        if (getCustomProperty(cactus, "--left") <= -100) {
            cactus.remove();
        }
    });

    if (nexCactusTime <= 0) {
        createCactus();
        // Dividiendo entre speedScale provocamos que el tiempo de generación del siguiente cactus sea cada vez menos según pasa el tiempo
        nexCactusTime = randomNumberBetween(CACTUS_INTERVAL_MIN, CACTUS_INTERVAL_MAX) / speedScale;
    }
    nexCactusTime -= delta;
}

export function getCactusRects() {
    return [...document.querySelectorAll("[data-cactus]")].map(cactus => {
        return cactus.getBoundingClientRect();// Este método nos devuelve el tamaño de un elemento y su posición relativa al viewport
    });
}

function createCactus() {
    const cactus = document.createElement('img');
    cactus.dataset.cactus = true;
    cactus.src = "./imgs/cactus.png";
    cactus.classList.add('cactus');
    setCustomProperty(cactus, '--left', 100);
    worldElem.append(cactus);
}

function randomNumberBetween(min, max) {
    return Math.floor(Math.random() * (max - min + 1));
}