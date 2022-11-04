<?php 
    require "./parts/header.php";
    require "./parts/footer.php";
    require "./parts/title.php";
    require "./parts/insert.php";
?>

<?= createHeader("Agenda") ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>"> 
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
                        <input type="submit" name="update" value="Actualizar datos del usuario" class="btn btn-outline-primary me-3">                        
                    </li>
                    <li class="nav-item">
                        <input type="submit" name="block" value="Bloquear un contacto" class="btn btn-outline-primary me-3">                        
                    </li>
                    <li class="nav-item">
                        <input type="submit" name="show" value="Mostrar todos los contactos" class="btn btn-outline-primary me-3">                        
                    </li>
                    <li class="nav-item">
                        <input type="submit" name="upload" value="Subir datos extras" class="btn btn-outline-primary me-3">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</nav>

<?php
    $keys = ["insert", "update", "block", "show", "upload"];
    $url = $_SERVER['PHP_SELF']; 

    for ($k = 0; $k < count($keys); $k++){
        $key = $keys[$k];
        if (isset($_POST["$key"])){
            createTitle($_POST["$key"]);

            switch($key) {
                case "insert": 
                    insert($url);
                    break;
                case "update":
                    echo "hola";
                    break;
                case "update":
                    echo "hola";
                    break;
                case "show":
                    echo "hola";
                    break;
                case "upload":
                    echo "hola";
                    break;
                default:
                    break;
            }
        }
    }
?>

<?= createFooter() ?>