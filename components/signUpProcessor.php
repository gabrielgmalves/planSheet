<?php
    require('dbConnector.php');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(isset($name) && isset($email) && isset($password)){
        
        $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES (:name, :email, :password)";
        $statement = $conn->prepare($sql);
        $statement->bindparam(':name', $name);
        $statement->bindparam(':email', $email);
        $statement->bindparam(':password', $password);

        $result = $statement->execute();

        if($result){
            $_SESSION['email'] = $email;
            header('Location: ../main/internalPage.php');
        }else{
            header('Location: ../main/index.php');
        }

    }else{
        echo "Erro ao cadastrar, dados nao encontrados";
    }

?>