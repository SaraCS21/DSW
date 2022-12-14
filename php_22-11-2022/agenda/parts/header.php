<?php
    function createHeader($title, $url){
        print <<<END
            <head>
                <title>$title</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
                <link href="css/style.css" rel="stylesheet">
            </head>

            <body>

            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 p-3">
                <form method="post" action=$url> 
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <input type="submit" name="insert" value="Insertar un contacto" class="btn btn-outline-primary me-3">                        
                                </li>
                                <li class="nav-item">
                                    <input type="submit" name="show" value="Mostrar todos los contactos" class="btn btn-outline-primary me-3">                        
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </nav>
        END;
    }
?>