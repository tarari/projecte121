<?php
    /**
     *  Returns url route
     * 
     */
    function getRoute():string 
    {
        if(isset($_REQUEST['url'])){
            $url=$_REQUEST['url'];
        }else{
            $url='home';
        }
        switch($url){
            //acceso a vista tpl
            case 'login':
                return 'login';
            case 'register':
                return 'register';
            //acceso a proceso login
            case 'login_action':
                return 'login_action';
            case 'register_action':
                return 'register_action';
            case 'dashboard':
                return 'dashboard';   
            case 'profile':
                    return 'profile';
            case 'error':
                return 'error';
            case 'logout':
                return 'logout';        
            default:
                return 'home';
        }

    }