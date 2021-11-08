<?php

    require APP.'/lib/render.php';
    require_once APP.'/lib/nav.php';

    $_SESSION['nav']=[];
    current_nav('home');

    echo render('home',[]);
    
