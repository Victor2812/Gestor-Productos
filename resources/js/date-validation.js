const picker = document.getElementById('date1');
console.log(picker);
if (picker != null) {
  // En caso de que el valor escogido en el input date sea un sábado o un domingo, nos saltará una alerta.
  picker.addEventListener('input', function(e){
    var day = new Date(this.value).getUTCDay();
    console.log(day);
    if([6,0].includes(day)){
      e.preventDefault(); // Prevenir que se recoja datos erroneos
      this.value = '';
      alert('Los fines de semanas no están disponibles');
    }
  });
} else {
  console.log('date element not found');
}