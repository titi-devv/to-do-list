
<div id="side-bar">
            <div class="toggle-btn" onclick="toggleSidebar()">
                <div id="slide">
                    <div class="circle icon">
                        <span class="line top"></span>
                        <span class="line middle"></span>
                        <span class="line bottom"></span>
                    </div>
                </div>
            </div>
            
                
                <?php
                
                if (isset($_SESSION["useruid"])) {?>
                    <div class="users" onclick="redirect4()">
                        <img src="images/image2.png">
                <?php
                    echo '<p> ' .$_SESSION["useruid"]. '</p>'; //if the user is connected, we print his username
                    ?>
                    </div>
                <?php }
                else { ?>
                    <div class="users" onclick="redirect2()">
                        <img  src="images/image2.png">
                <?php
                    echo '<p>Log in</p>'; //else we print login
                        
                    ?>
                    </div>
                <?php }?>
                <?php
                    if (isset($_SESSION["useruid"])) { ?> <!-- if the user click on the image or "logout" we send him to the logout.php wich is going to destroy the session as we saw just before-->
                        <div class="logout-user" onclick="redirect6()">
                            <img src="images/logout1.png">
                            <?php
                                echo "<p>Logout</p>";
                            ?>
                        </div>
                <?php }?>
                
            
            <div class="social-links">
                <img src="images/fb.png"><p>Facebook</p>
                <img src="images/ig.png"><p>Instagram</p>
                <img src="images/tw.png"><p>Twitter</p>
            </div>
            <div class="useful-links">
                <img src="images/share.png"><p>Share</p>
                <img src="images/info.png"><p>F.A.Q</p>
            </div>
    </div>

