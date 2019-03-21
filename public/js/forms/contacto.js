$(document).ready(function() {

    $("#contacto").submit(function(e){
        e.preventDefault();
        
        var $inputs = $('#contacto :input');
        
        var values = {};
        $inputs.each(function() {
            values[this.name] = $(this).val();
        });

        $.ajax({
            type: 'POST',
            data:values,
            url: '../public/php/contacto.php',
            success: function(datos) {
                if(datos == "registrados"){
                    $('#saveCorrect').show();
                    $("#contacto")[0].reset();
                } 
            }
        });

        


    });


});