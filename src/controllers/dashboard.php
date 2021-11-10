<?php

    require_once APP.'/lib/render.php';
    require_once APP.'/config.php';
    require_once APP.'/lib/conn.php';
    //renders dashboard template
    require_once APP.'/lib/nav.php';
    require_once APP.'/src/db/database.php';


    $current='dashboard';
    //extract list-data
    $gdb=getConnection($dsn,$dbuser,$dbpasswd);
    $lists=extract_lists($gdb);
    foreach($lists as $list){
        $arr_items[]=extract_list_items($gdb,$list['id']);
    }
  
   
    
   
   
    current_nav($current);
    echo render($current,['rows'=>$arr_items]);
   
    
