function activarMunicipio(){
    $.ajax({
        url: "page2.php",
        type: "POST",
        beforesend: function(){
            $("#municipio").prop('disabled', true);
        },
        success: function(){
            $(document).on('change', '#servicio', function(event) {
                $('#municipio').val($("#isla option:selected").text());
            });

            $("#municipio").prop('disabled', false);
        }
    });
}