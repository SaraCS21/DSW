<?php

    function insert($url){
        print <<<END
            <form method="get" action="$url" class="w-50">
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="dni" aria-describedby="dni">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="surname">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="birth_date" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="birth_date">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        END;
    }

?>