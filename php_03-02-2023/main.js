function deleteUserJs(id){
    $.ajax({
        url: `page2.php?id=${id}`,
        type: "POST",
        beforesend: function(){
            $("#alert").html("No se ha podido eliminar al usuario");
        },
        success: function(message_to_show){
            $("table").remove();
            $("<div class='alert alert-primary w-50 text-center mt-3' id='alert' role='alert'></div>").insertBefore("table")
            $("body").append(message_to_show);
            $("#alert").html("Usuario eliminado con éxito");
        }
    })
};