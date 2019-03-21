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
            dataType: "json",
            success: function(datos) {
                console.log(datos)
                if(datos.success == "true"){
                    $('#saveCorrect').show();
                    $("#asesor")[0].reset();
                } 
            }
        });

        


    });


});