
        <nav>
            <ul class="close">
                <div class="sidebar">
                <li onclick=hideSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></li>
                <li><a class="small" href="#home">HOME</a></li>
                <li><a class="small" href="#rules">RULES</a></li>
                <li><a class="small" href="#prize">PRIZE</a></li>
                <li><a class="small" href="#guest">GUEST</a></li>
                <li><a class="small" href="#started">LET'S GET STARTED</a></li>
                <li><a class="small" href="#faq">FAQ</a></li>
                <li><a class="small" href="../components/job.php">JOB HIRING</a></li>
                    <?php if(isset($_SESSION['id'])){ ?>
                <li><a class="small" href="../components/profile.php">PROFILE</a></li>
                    <?php }else{ ?>
                <li><a class="small" href="../signin-up/signin.php">SIGN IN</a></li>
                    <?php } ?>
                </div>
            </ul>
            <ul class="navbar">
                <li><a href="#"><img src="../Pictures/favicon.jpg" alt=""></a></li>
                <li class="minimize"><a class="small" href="#rules">RULES</a></li>
                <li class="minimize"><a class="small" href="#prize">PRIZE</a></li>
                <li class="minimize"><a class="small" href="#guest">GUEST</a></li>
                <li class="minimize"><a class="start" href="#started">LET'S GET STARTED</a></li>
                <li class="minimize"><a class="small" href="#faq">FAQ</a></li>
                <li class="minimize"><a class="small" href="../components/job.php">JOB HIRING</a></li>
                    <?php if(isset($_SESSION['id'])){ ?>
                <li class="minimize"><a href="../components/profile.php" class="small">PROFILE</a></li>
                    <?php }else{ ?>
                <li class="minimize"><a class="small" href="../signin-up/signin.php">SIGN IN</a></li>
                    <?php } ?>
                <li class="menu" onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></li>
            </ul>
        </nav>

        