<?php

    // src/db.php

function auth($db,$email,$pass):bool
{
    try{   
        //preparem sentència
        $stmt=$db->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
        $stmt->execute([':email'=>$email]);
        $count=$stmt->rowCount();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);  
       
        // ha trobat incidència
        if($count==1){       
            $user=$row[0];
            $res=password_verify($pass,$user['password']);
            if ($res){
            // establim sessió
              $_SESSION['user']=$user;
              $_SESSION['logged']=true;
              $_SESSION['username']=$user['username'];
              $_SESSION['email']=$user['email'];
              
            // retornem true
                remember($email,$user['password']);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }catch(PDOException $e){
        return false;
    }
}
/**
 * Returns true if user email does not exist
 * @param object $db
 * @param array $data
 * @return bool
 */
function verify_user($db,$data){
    if(is_array($data)){
        
        $sql="SELECT email FROM users WHERE email=:email LIMIT 1";
        $stmt=$db->prepare($sql);
        $stmt->execute([':email'=>$data[0]]);
        $count=$stmt->rowCount();
        if($count==0){
            return true;
        }else{
            return false;
        }

    }
}

    function register($db,$data){
        
        if ($data){
            try{
                if(verify_user($db,$data)){
                    $sql="INSERT INTO users(email,password,username,role) VALUES(?,?,?,1)";
                    $stmt=$db->prepare($sql);
                    $stmt->execute($data);
                    return true;
                }
            
            }catch(PDOException $e){
                return false;
            }
        }
        
    }
    /**
     *  actives cookies in login action
     * 
     */
    function remember($email,$passwd){
        
        if(isset($_POST['remember'])){
           
                if(!isset($_COOKIE['email'])&&!isset($_COOKIE['passwd'])){
                    setcookie('email',$email,time()+365*24*3600,'/');
                    setcookie('passwd',$passwd,time()+365*24*3600,'/');
                }
            }
        
        
    }

    function extract_list_items($gdb,$idlist){
        $sql="SELECT t2.name,t3.item,t3.created_at from users t1 inner join lists t2 on t2.user=t1.id inner join task_items t3 on t3.list=t2.id WHERE t1.id=:user AND t2.id=:list";
        $stmt=$gdb->prepare($sql);
        $res=$stmt->execute([':user'=>$_SESSION['user']['id'],':list'=>$idlist]);
        if($res){
            $rows=$stmt->fetchAll();
            return $rows;

        }
        return null;
    }
    function extract_lists($gdb){
        $sql=" SELECT t2.id,t2.name from users t1 inner join lists t2 on t2.user=t1.id WHERE user=:user";
        $stmt=$gdb->prepare($sql);
        $res=$stmt->execute([':user'=>$_SESSION['user']['id']]);
        if($res){
            $rows=$stmt->fetchAll();
            return $rows;

        }
        return null;
    }