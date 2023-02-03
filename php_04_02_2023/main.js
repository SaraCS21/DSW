function autocompletar(){
    const municipio = $("#text").val();
    alert(municipio);

    $.ajax({
        url: `autocompletaMunicipios.php?municipio=${municipio}`,
        type: "POST",
        beforesend: function(){
            $("#alert").html("No se ha podido eliminar al usuario");
        },
        success: function(message_to_show){
            $("div").html(message_to_show)
        }
    })
};