<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Actividad 1</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center mt-5 w-100">
    <h1>Formulario de inscripción Encuentro</h1>
    <p>Fill out the form carefully for registration</p>

    <form method="post" action="pag2.php" class="d-flex flex-column justify-content-between align-items-center mt-5 w-100">
        <div class="d-flex flex-wrap justify-content-between w-75">
            <h4 class="w-100 mb-3">Nombres y apellidos</h4>
            <div>
                <input type="text" name="name1" class="form-control">
                <label for="name1" class="mb-3 mt-2">1er Nombre</label>
            </div>
            <div>
                <input type="text" name="name2" class="form-control">
                <label for="name2" class="mb-3 mt-2">2do Nombre</label>
            </div>
            <div>
                <input type="text" name="surname" class="form-control">
                <label for="surname" class="mb-3 mt-2">Apellidos</label>
            </div>
        </div>    
        <div class="d-flex flex-wrap w-75">
            <h4 class="w-100 mb-3">Fecha de nacimiento</h4>
            <div class="date">
                <input type="number" name="year" class="form-control">
                <label for="year" class="mb-3 mt-2">Año</label>
            </div>
            <div class="date">
                <input type="number" name="month" class="form-control">
                <label for="month" class="mb-3 mt-2">Mes</label>
            </div>
            <div class="date">
                <input type="number" name="day" class="form-control">
                <label for="day" class="mb-3 mt-2">Día</label>
            </div>
        </div>  
        <div class="d-flex flex-wrap justify-content-between w-75 mb-3">
            <h4 class="w-100 mb-3">Dirección <span>*</span></h4>
            <div class="w-100">
                <input type="text" name="direction" class="form-control" required>
            </div>
        </div>  
        <div class="d-flex flex-wrap justify-content-between w-75">
            <div style="witdh: 45%">
                <input type="text" name="dni" class="form-control">
                <label for="dni" class="mb-3 mt-2">Documento de identidad</label>
            </div>
            <div style="witdh: 45%">
                <input type="text" name="city" class="form-control">
                <label for="city" class="mb-3 mt-2">Ciudad</label>
            </div>
        </div>  
        <div class="d-flex flex-wrap justify-content-between w-75">
            <div class="w-100">
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Por favor seleccione</option>
                    <option value="1">España</option>
                    <option value="2">Alemania</option>
                    <option value="3">Italia</option>
                </select>
            </div>
        </div> 
        <div class="d-flex flex-wrap justify-content-between w-75">
            <div class="final">
                <label for="email" class="mb-3 mt-2 h4">Correo eletrónico <span>*</span></label>
                <input type="email" name="email" class="form-control" required>
                <p class="mt-2">example@example.com</p>
            </div>
            <div class="final">
                <label for="phone" class="mb-3 mt-2 h4">Número de teléfono <span>*</span></label>
                <input type="tel" name="phone" class="form-control" required>
            </div>
        </div>  
        <div class="d-flex flex-column justify-content-center w-75 mb-3">
            <h4 class="w-100 mb-3">Género <span>*</span></h4>
            <div class="final">
                <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre">
                <label class="form-check-label" for="hombre">
                    Hombre
                </label>
            </div>
            <div class="final">
                <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer">
                <label class="form-check-label" for="mujer">
                    Mujer
                </label>
            </div>
        </div> 
        <div class="d-flex flex-column justify-content-center w-75 mt-3">
            <div class="form-check">
                <input name="info" type="checkbox" id="checkInfo" value="info">
                <label for="checkInfo">
                    Deseo recibir información
                </label>
            </div>
        </div> 
        <input type="submit" value="Guardar"  class="btn btn-outline-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>