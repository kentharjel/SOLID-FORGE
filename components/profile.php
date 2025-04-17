<?php
    include '../Main/header.php';
    include 'post.php';
?>

<div class="profile">
    <li class="add" onclick=showpost()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#000000"><path d="M450-450H200v-60h250v-250h60v250h250v60H510v250h-60v-250Z"/></svg></a></li>
    <li class="exit"><a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
    <div class="profile-container">
        <div class="profile-info">
            <svg xmlns="http://www.w3.org/2000/svg" height="250px" viewBox="0 -960 960 960" width="250px" fill="#000000"><path d="M222-255q63-44 125-67.5T480-346q71 0 133.5 23.5T739-255q44-54 62.5-109T820-480q0-145-97.5-242.5T480-820q-145 0-242.5 97.5T140-480q0 61 19 116t63 109Zm257.81-195q-57.81 0-97.31-39.69-39.5-39.68-39.5-97.5 0-57.81 39.69-97.31 39.68-39.5 97.5-39.5 57.81 0 97.31 39.69 39.5 39.68 39.5 97.5 0 57.81-39.69 97.31-39.68 39.5-97.5 39.5Zm.66 370Q398-80 325-111.5t-127.5-86q-54.5-54.5-86-127.27Q80-397.53 80-480.27 80-563 111.5-635.5q31.5-72.5 86-127t127.27-86q72.76-31.5 155.5-31.5 82.73 0 155.23 31.5 72.5 31.5 127 86t86 127.03q31.5 72.53 31.5 155T848.5-325q-31.5 73-86 127.5t-127.03 86Q562.94-80 480.47-80Zm-.47-60q55 0 107.5-16T691-212q-51-36-104-55t-107-19q-54 0-107 19t-104 55q51 40 103.5 56T480-140Zm0-370q34 0 55.5-21.5T557-587q0-34-21.5-55.5T480-664q-34 0-55.5 21.5T403-587q0 34 21.5 55.5T480-510Zm0-77Zm0 374Z"/></svg>
            
            <div class="text-info">
                <h2><?php echo($_SESSION['username']); ?></h2>
                <p><?php echo($_SESSION['email']); ?></p>
            </div>
        </div>
        <div class="count">
            <p>Posts 0</p>
            <p>Votes 0</p>
        </div>
        
        <div class="exit-signout">
            <a href="../logics/signout-config.php">Sign Out</a>
        </div>
    </div>
</div>