<?php

    function insert($url, $json_contacts){

        createTitle("Insertar un contacto");
        print <<<END
            <form method="get" action="$url" class="w-50">
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="dni" name="dni">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="surname" id="surname">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="phone" id="phone">
                </div>
                <div class="mb-3">
                    <label for="birth_date" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="birth_date" id="birth_date">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit_insert" value="Enviar">
                </div>
                <input type="hidden" name="contacts" value="$json_contacts">
            </form>
        END;
        
    }

    function update($url){

    }

    function block($url){
        
    }

    function show($url){
        
    }

    function upload($url){
        
    }

?>