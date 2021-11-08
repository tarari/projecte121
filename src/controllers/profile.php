<?php

    require APP.'/lib/render.php';
    //renders profile template
   
    require_once APP.'/lib/nav.php';


    $current='profile';
    current_nav($current);
    
    echo render($current,
    ['email'=>$_SESSION['email'],
    'username'=>$_SESSION['username']]);
    
