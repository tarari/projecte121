<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="font-sans">
    <header class="mx-auto px-4 bg-white">  
    <h1 class="text-blue-800 h-24 text-6xl align-middle"><a  href="?url=home" >SCHOOL</a></h1>
    </header>
    <nav class="p-2 mx-auto">
    <?php
       $strn="";
       if (isset($_SESSION['nav'])){
        foreach($_SESSION['nav'] as $link){
           
            $strn.='<a class="underlined text-blue-800" href="?url='.$link.'">'.$link.'</a> / ';  
            }
        }
       else{
           $strn='<a class="text-blue-800" href="?url=home">Home</a>';
       }
       
        ?>
        <p><?= $strn;?></p>
        <ul class="nav flex sm:flex-col flex-col lg:flex-row flex-wrap items-center justify-between">
            <?php if (isset($_SESSION['logged'])): ?>
                <li class="m-2 p-4 w-28 sm:flex-wrap flex-1  text-md text-blue-800 text-center bg-white border-b-4 b-blue-800 hover:bg-blue-100 ">
                <a href="?url=logout">Logout</a>
                </li>
                <li class="m-2 p-4 w-28 sm:flex-wrap flex-1  text-md text-blue-800 text-center bg-white border-b-4 b-blue-800 hover:bg-blue-100 ">
                <a href="?url=tasks">Tasks</a>
                </li>

            <?php else: ?>
            <li class="m-2 p-4 w-28 sm:flex-wrap  flex-1 md:text-sm text-blue-800 text-center bg-white  border-b-4 b-blue-800 hover:bg-blue-100">
                <a href="?url=login">Login</a>
            </li>
            <li class="m-2 p-4 w-28 sm:flex-wrap flex-1 md:text-sm text-blue-800  text-center bg-white  border-b-4 b-4-blue-800 hover:bg-blue-100">
                <a href="?url=register">Register</a>
            </li>
            <?php endif;?>
            
        </ul>
    </nav>