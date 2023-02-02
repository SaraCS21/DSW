<?php
    require "./main.php";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Municipios de islas</title>
    </head>
    <body>

        <select name="isla" id="isla">
            <?php foreach (getIslas() as $isla) { ?>
                <option value="<?= $isla[0] ?>"><?= $isla[1] ?></option>
            <?php } ?>            
        </select>
    
        <select name="municipio" id="municipio" disabled></select>

        <input type="hidden" name="idIsla" id="idIsla" value="">

    <script>

        $('select#isla').on('change',function(){
            var valor = $(this).val();
            $('#idIsla').val(valor);

            $("#municipio").prop('disabled', false);

            $.ajax({
                url: `page2.php?idIsla=${valor}`,
                type: "POST",
                beforesend: function(){
                    console.log("a");
                },
                success: function(message_to_show){
                    $("#municipio").html(message_to_show);
                }
            });
        });

    </script>
    </body>
</html>