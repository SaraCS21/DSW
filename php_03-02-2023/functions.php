<?php
    function install(){
        try{
            $connection = new PDO("mysql:host=localhost", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

            $sql = file_get_contents("./data/db.sql");
            $connection->exec($sql);

        } catch (PDOException $error){
            echo $error->getMessage();
        }
    }

    function connect(){
        try {
            $dsn = "mysql:host=localhost;dbname=agenda";
            $connection = new PDO($dsn, "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return $connection;
    
        } catch(PDOException $error) {
            $error = $error->getMessage();
        }
    }

    function getUsers(){
        try {
            $connection = connect();
    
            $consultaSQL = "SELECT * FROM users";
            $sentence = $connection->prepare($consultaSQL);
            $sentence->execute();
    
            $users = $sentence->fetchAll(PDO::FETCH_ASSOC);
            return $users;
    
        } catch(PDOException $error) {
            $error = $error->getMessage();
        }
    }

    function deleteUser($id){
        try {
            $connection = connect();
    
            $consultaSQL = "DELETE FROM users WHERE id = $id";
            $sentence = $connection->prepare($consultaSQL);
            $sentence->execute();
    
        } catch(PDOException $error) {
            $error = $error->getMessage();
        }
    }

    function create_table(){
        $result = '
        <table name="users" id="users" class="w-50 mt-2 table table-dark table-striped">
            <thead>
                    <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
        ';

        foreach (getUsers() as $user) {
            $result .= '
                <tr>
                    <td>' . $user["dni"] . '</td>
                    <td>' . $user["name"] . '</td>
                    <td>' . $user["surname"] . '</td>
                    <td>' . $user["email"] . '</td>
                    <td>' . $user["phone"] . '</td>
                    <td>
                        <button type="button" name="delete" class="btn btn-danger" onclick="deleteUserJs(' . $user["id"] . ')">
                            <i class="bx bxs-trash"></i>
                        </button>
                    </td>
                </tr>
            ';
        }  

        $result .= '
            </tbody>
        </table';

        return $result;
    }

    install();

?>