<?php
    //Accion login
    require APP.'/src/db/database.php';
    require APP.'/config.php';
    require APP.'/lib/conn.php';

    //extract REQUEST data
    if(isset($_POST['email'])&&!empty($_POST['email'])
        &&(isset($_POST['passwd'])&&!empty($_POST['passwd'])
    )){
        $email=filter_input( INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $passwd=filter_input( INPUT_POST,'passwd',FILTER_SANITIZE_STRING);
        
        try{
            
            $db=getConnection($dsn,$dbuser,$dbpasswd);
            
            if(auth($db,$email,$passwd)){
                
                header('Location:?url=dashboard');
            }
            else{
                $_SESSION['error']="Error en autenticación";
                header('Location:?url=error');
            }
        }catch(PDOException $e){
            $_SESSION['error']="Error en autenticación";
            header('Location:?url=error');
        }
    }
    else{
        
        header('Location:?url=login');
    }
    
    
