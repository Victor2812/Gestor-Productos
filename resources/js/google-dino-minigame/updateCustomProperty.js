// FUNCIONES PARA ACTUALIZAR LOS VALORES DE NUESTRA PROPIEDADES DE CSS (EJ. --> '--left:')

export function getCustomProperty(elem, prop) {
    // Recoger el valor de una propiedad de css que a especificar
    return parseFloat(getComputedStyle(elem).getPropertyValue(prop)) || 0;
}

// Setear un valor a nuestro elemento CSS
export function setCustomProperty(elem, prop, value) {
    elem.style.setProperty(prop, value)
}

// Setear un valor a nuestro elemento CSS en función de un incremento X (ej. --> '--left' && 'delta')
export function incrementCustomProperty(elem, prop, increment) {
    setCustomProperty(elem, prop, getCustomProperty(elem, prop) + increment);
}