<?php
    require('dbConnector.php');
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(isset($email) && isset($password)){
        
        $sql = "SELECT user_name, user_email, user_password FROM users WHERE user_email =:email AND user_password =:password";
        $statement = $conn->prepare($sql);
        $statement->execute(
            array(
                'email' => $_POST["email"],
                'password' => $_POST["password"]
            )
        );

        $count = $statement->rowCount();

        if($count > 0){
            echo "Achou dados!";
            $_SESSION['email'] = $email;
        }else{
            echo "Erro ao buscar dados!";
        }

    }else{
        echo "Erro ao logar, dados nao encontrados";
    }

?>