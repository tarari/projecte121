<?php
    include 'header.tpl.php';
    ?>

    <main class="p-4 mx-auto bg-yellow-200 grid grid-cols-3 gap-4">
    <div class="bg-gray-200 h-48 rounded-md">
        <h2 class=" p-4 text-gray-700 underlined text-base text-2xl">Profile</h2>        
        <p class=" p-4 text-gray-700 text-base"><?= $email; ?></p>
        <p class=" p-4 text-gray-700 text-base"><?= $username; ?></p>
    
    </div>
       


    </main>