<?php
  
  function current_nav($current){
    if(isset($_SESSION['nav'])){
      if($_REQUEST['url']==$current){
        if(!array_search($current,$_SESSION['nav']))
        array_push($_SESSION['nav'],$current);
      }
     
      
       
    }else{
        $_SESSION['nav']=$current;
    }
    
  }
  
  