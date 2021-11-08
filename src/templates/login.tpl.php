<?php
    include 'header.tpl.php';
    ?>
    <main>
        <div class="container m-2 p-2 w-1/2 mx-auto bg-blue-100 rounded-md border-2 border-green-400">
            <h2 class="text-xl underline text-blue-600 mb-2">Login please</h2>
            <form  class="grid grid-cols-3 text-blue-600 mx-auto place-self-stretch" action="?url=login_action" method="post">
                <label class="grid-cols-1" for="email">Email:</label><input class=" col-span-2 m-2 p-2" type="email" name="email" placeholder="Email" value="<?= $_COOKIE['email']??''; ?>">
                <label class="grid-cols-1" for="passwd">Password:</label><input class=" col-span-2 m-2 p-2" type="password" name="passwd" placeholder="Password">
                <label  for="remember">Remember me</label><input name="remember" type="checkbox" <?php if(isset($_COOKIE['email'])){ ?>checked<?php }?>/>  

                <button class="bg-blue-200 col-span-3 text-center text-sm m-4 p-4 shadow-md hover:bg-blue-400 hover:text-white" type="submit">Login</button>     
            </form>
        </div>
        
            
    </main>
    
</body>
</html>