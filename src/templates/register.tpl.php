<?php
    include 'header.tpl.php';
    ?>
    <main>
    <div class="container m-2 p-2 w-1/2 mx-auto bg-blue-100 rounded-md border-2 border-green-400">
        <h2 class="text-xl underline  text-blue-600 mb-2">Register please</h2>
        <form class="grid items-baseline grid-cols-3 mx-auto text-blue-600 place-self-stretch" action="?url=register_action" method="post">
            
        <label class="grid-cols-1" for="email">Email:</label><input class=" col-span-2 m-2 p-2 underlined" type="email" name="email" placeholder="Email" required>
            
        <label class="grid-cols-1" for="passwd">Password:</label><input class=" col-span-2 m-2 p-2 underlined" type="password" name="passwd" placeholder="Password" required>
        <label class="grid-cols-1" for="passwd2">Repeat password:</label><input class=" col-span-2 m-2 p-2 underlined" type="password" name="passwd2" placeholder="Password" required>
        <label class="grid-cols-1" for="username">Username:</label><input class=" col-span-2 m-2 p-2 underlined"type="text" name="username" placeholder="Username"></p>
        <button class="bg-red-200 col-span-3 text-center text-sm m-4 p-4 shadow-md hover:bg-red-400" type="submit">Register</button>
        </form>
    </div>  
    </main>
    
</body>
</html>