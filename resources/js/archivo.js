$(document).ready(function() {
    $('#seleccionarTodo').click(function() {
        var isChecked = $('input[type="checkbox"]').not(this).prop('checked');
 
        // Si todos los checkboxes están marcados
        if (isChecked) {
          // Desmarcar todos los checkboxes
          $('input[type="checkbox"]').not(this).prop('checked', false);
        } else {
          // Marcar todos los checkboxes
          $('input[type="checkbox"]').not(this).prop('checked', true);
        }
    });
 });
 



