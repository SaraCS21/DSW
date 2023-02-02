<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Prueba de Ajax</title>
    </head>
    <body>

        <input type="button" value="Saludar" onclick="saludar()">
        <div id="idMessage"></div>
    
    <script>
        function saludar(){
            $.ajax({
                url: "page2.php",
                type: "POST",
                beforesend: function(){
                    $("#idMessage").html("Message before");
                },
                success: function(message_to_show){
                    $("#idMessage").html(message_to_show);
                }
            });
        }

        async function saludarjs(){
            const div = document.querySelector("#idMessage");

            var params = {
                "nombre": "profesor",
                "apellido": "misApellidos",
                "telefono": "123456789"
            };

            const value = await fetch("./page2.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(params)
            });

            if (value.ok){
                console.log("ok");
                div.textContent = value.text();

            } else {
                throw new Error(value.statusText);
            }

            // const response = await value.json();
            // console.log(response)
        }
    </script>
    </body>
</html>