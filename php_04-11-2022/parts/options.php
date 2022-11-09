<?php

    function insert($url, $contacts){
        createTitle("Insertar un contacto");
        $vectorString = json_encode($contacts);

        print <<<END
            <form method="get" action=$url class="w-50">
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
                <input type="hidden" name="insert_date" value="">
                <input type="hidden" name="contacts" value=$vectorString>
            </form>
        END;
    }

    function update($url){

    }

    function block($url){
        
    }

    function show($url, $contacts, $option = ""){
        createTitle("Mostrar todos los contactos");
        $vectorString = json_encode($contacts);

        if ($option === "organize_dni"){
            ksort($contacts);

        } else if ($option === "organize_name"){
            // no se

        } else if ($option === "organize_surname"){
            // no se
        }

        print <<<END
            <form method="get" action=$url class="d-flex mt-3 justify-content-end w-50">
                <select class="form-select me-3 w-25" name="select">
                    <option selected>Selecciona para ordenar</option>
                    <option value="organize_dni">DNI</option>
                    <option value="organize_name">Nombre</option>
                    <option value="organize_surname">Apellido</option>
                </select>
                <input type="submit" name="organize" value="Ordenar" class="btn btn-outline-primary me-3">   
                <input type="hidden" name="contacts" value=$vectorString>
            </form>
        END;

        echo "<table  class='table table-striped w-50 mt-3'>";

        print <<<END
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Fecha de nacimiento</th>
                <th>Correo electrónico</th>
                <th>Fecha de inserción</th>
            </tr>
        END;

        foreach ($contacts as $key => $contact) {
            echo "<tr>";
            
            echo "<td>$key</td>";

            foreach ($contact as $value) {
                echo "<td>$value</td>";

            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function upload($url){
        
    }

?>