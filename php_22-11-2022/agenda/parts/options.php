<?php
    function insert($url){
        createTitle("Insertar un contacto");

        print <<<END
            <form method="post" action=$url class="w-50">
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
                <input type="hidden" name="block" value="">
            </form>
        END;
    }

    function show($url, $option = ""){
        $contacts = $_SESSION["contacts"];

        if ($contacts === []){
            createTitle("No hay contactos que mostrar");

        } else {
            createTitle("Mostrar contactos");
            $vectorString = $_SESSION["contacts"];

            if ($option === "organize_dni"){
                ksort($contacts);

            } else if ($option === "organize_name"){
                uasort($contacts, function ($a, $b) {
                    return strcmp($a["name"], $b["name"]);
                });

            } else if ($option === "organize_surname"){
                uasort($contacts, function ($a, $b) {
                    return strcmp($a["surname"], $b["surname"]);
                });
            }

            print <<<END
                <form method="post" action=$url class="d-flex mt-4 mb-4 justify-content-end w-75">
                    <select class="form-select me-3 w-25" name="select">
                        <option selected>Selecciona para ordenar</option>
                        <option value="organize_dni">DNI</option>
                        <option value="organize_name">Nombre</option>
                        <option value="organize_surname">Apellido</option>
                    </select>
                    <input type="submit" name="organize" value="Ordenar" class="btn btn-outline-primary">  
                </form>
            END;

            echo "<table class='table table-striped w-75 mt-3'>";

            print <<<END
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Fecha de nacimiento</th>
                    <th>Correo electrónico</th>
                    <th>Fecha de inserción</th>
                    <th></th>
                    <th>Otras acciones</th>
                </tr>
            END;


            foreach ($contacts as $key => $contact) {
                if (!$contact["block"]){

                    echo "<tr>";
                    echo "<td>$key</td>";

                    $contact["insert_date"] = format_date($contact["insert_date"]);
                    // $contact["name"] = str_replace("_", " ", $contact["name"]);
                    // $contact["surname"] = str_replace("_", " ", $contact["surname"]);
        
                    foreach ($contact as $value) {
                        echo "<td>$value</td>";
                    }
                    print <<<END
                        <td>
                            <form method="post" action=$url>    
                                <button type="submit" name="update" value="Actualizar" class="btn btn-primary me-3" alt="actualizar"><i class='bx bxs-edit-alt' style='color:#ffffff' ></i></button>
                                <button type="submit" name="block" value="Bloquear" class="btn btn-primary me-3"><i class='bx bx-block' style='color:#ffffff'></i></button>
                                <button type="submit" name="upload" value="Subir datos extras" class="btn btn-primary me-3"><i class='bx bx-upload' style='color:#ffffff'></i></button>
                                <input type="hidden" name="dni_active" value=$key>                    
                            </form>
                        </td>
                    END;
                    echo "</tr>";
                }
            }
            echo "</table>";
        }
    }

    function upload($url, $dni){
        createTitle("Subir un fichero");
        $contacts = $_SESSION["contacts"];

        print <<<END
            <form method="post" action=$url class="w-50 mt-4" enctype="multipart/form-data">
                <div class="mb-3 w-75 d-flex flex-row">
                    <input type="file" class="form-control w-75 me-3" id="file" name="file">
                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                    <input type="submit" name="upload_file" value="Enviar" class="btn btn-outline-primary me-3">                        
                </div>
                <input type="hidden" name="dni_active" value=$dni>    
            </form>
        END;
    }

    function update($url, $dni){
        createTitle("Actualizar contacto");
        $contacts = $_SESSION["contacts"];

        $update_contact = $contacts[$dni];
        $name = $update_contact["name"];
        $surname = $update_contact["surname"];
        $phone = $update_contact["phone"];
        $birth_date = $update_contact["birth_date"];
        $email = $update_contact["email"];

        print <<<END
            <form method="post" action=$url class="w-50">
                <div class="mb-3">
                    <label for="update_dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="update_dni" name="update_dni" value=$dni>
                </div>
                <div class="mb-3">
                    <label for="update_name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="update_name" id="update_name" value="$name">
                </div>
                <div class="mb-3">
                    <label for="update_surname" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="update_surname" id="update_surname" value="$surname">
                </div>
                <div class="mb-3">
                    <label for="update_phone" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="update_phone" id="update_phone" value=$phone>
                </div>
                <div class="mb-3">
                    <label for="update_birth_date" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="update_birth_date" id="update_birth_date" value=$birth_date>
                </div>
                <div class="mb-3">
                    <label for="update_email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" name="update_email" id="update_email" value=$email>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="update_insert" value="Enviar">
                </div>
            </form>
        END;
    }
?>