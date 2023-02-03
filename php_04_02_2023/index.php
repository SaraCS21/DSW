<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Autocompletar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="w-100 d-flex flex-wrap justify-content-center align-items-center">
        <h1 class="w-100 text-center mt-5">Busca tu municipio</h1>
        <input type="text" id="text" name="text" onkeyup="autocompletar()" autofocus class="w-50 mt-5 mb-3 form-control">
        <div class="w-50 ms-1"></div>

    </body>
    <!-- <script src="./main.js"></script> -->
    <script>
        function autocompletar(){
            var municipio = $("#text").val();
            const params = {
                "municipio": municipio
            }

            $.ajax({
                data: params,
                url: `autocompletaMunicipios.php?modo=ul`,
                type: "POST",
                beforesend: function(){
                    $("div").html("No se han podido mostrar datos");
                },
                success: function(message_to_show){
                    $("div").html(message_to_show)
                }
            })
        };
    </script>
</html>