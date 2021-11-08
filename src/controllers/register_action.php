<?php
    //Accion register
    require APP.'/src/db/database.php';
    require APP.'/config.php';
    require APP.'/lib/conn.php';

    if (isset($_POST['email'])&&!empty($_POST['email'])
        &&(isset($_POST['username']))&&!empty($_POST['username'])
        &&(isset($_POST['passwd']))&&!empty($_POST['passwd'])
        &&(isset($_POST['passwd2']))&&!empty($_POST['passwd2']))
    {
        $username=filter_input( INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $email=filter_input( INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $pass1=filter_input( INPUT_POST,'passwd',FILTER_SANITIZE_STRING);
        $pass2=filter_input( INPUT_POST,'passwd2',FILTER_SANITIZE_STRING);
        
        //si són iguals, encriptem amb cost=4
        if($pass1=$pass2){
            $pass=password_hash($pass1,PASSWORD_BCRYPT,['cost'=>4]);
            
            try{
                $db=getConnection($dsn,$dbuser,$dbpasswd);
                $data=[$email,$pass,$username];
                //registrem nou usuari
                register($db,$data);
            }catch(PDOException $e){
                $_SESSION['error']=$e->getMessage();
                header('Location:?url=error');
            }
            header('Location:?url=home');
        }
    }else{
        header('Location:?url=register');
    }
    
