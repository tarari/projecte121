<?php
    require APP.'/lib/render.php';
    // renders home template
    require_once APP.'/lib/nav.php';


    $current='error';
    current_nav($current);
    
    echo render($current,['error'=>$_SESSION['error']]);