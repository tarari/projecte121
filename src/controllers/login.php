<?php

    require APP.'/lib/render.php';
    //renders login template
  
    
    require_once APP.'/lib/nav.php';


    $current='login';
    current_nav($current);
    echo render($current,[]);
    
