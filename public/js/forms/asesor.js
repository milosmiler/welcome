$(document).ready(function() {

    $("#asesor").submit(function(e){
        e.preventDefault();
        
        var $inputs = $('#asesor :input');
        
        var values = {};
        $inputs.each(function() {
            values[this.name] = $(this).val();
        });

        $.ajax({
            type: 'POST',
            data:values,
            url: '../public/php/asesor.php',
            success: function(datos) {
                if(datos == "registrados"){
                    $('#saveCorrect').show();
                    $("#asesor")[0].reset();
                } 
            }
        });

        


    });


});