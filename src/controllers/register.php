<?php

    require APP.'/lib/render.php';
    //renders register template
    require_once APP.'/lib/nav.php';


    $current='register';
    current_nav($current);
    echo render($current,[]);
    
