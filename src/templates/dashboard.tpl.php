<?php
    include 'header.tpl.php';
    ?>
    <main class="p-4 mx-auto bg-teal-100 grid grid-cols-1 sm:grid-cols-2 gap-4 justify-space-between">
        <section>
            <div class="bg-gray-200 h-48 rounded-md"><strong><h4>Profile</h4></strong>
                <p class=" p-4 text-gray-700 text-base"><a href="?url=profile"><?= $_SESSION['email']??'User'; ?></a></p>
            </div>
        </section>
        <section>
            <div class="bg-blue-200 grid grid-cols-4 grid-rows-4 h-48 rounded-md shadow-2xl">
                <h4 class="col-span-4 text-center">Tasks</h4>
                <?php
                    foreach($rows as $row): ?>
                            <p><?= $row['name']; ?></p>
                        
                     
                <?php endforeach; ?>
            
                <div class="col-span-4"></div>
                <div class="col-span-4"></div>
                
                <div class="col-span-4 flex justify-end">
                    <div class="flex-2 pr-4"><a href="?url=tasks">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
</svg></a>
                    </div>
                    
                   
                
                </div>
            </div>
        </section>

        
    </main>
    
</body>
</html>