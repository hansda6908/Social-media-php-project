<div class="profile-card">
                    <div class="profile-pic">
                        <img src="<?php echo "Assets/imgs/".$_SESSION['image']; ?>" />
                    </div>
                    <div>
                        <p class="username"><strong><?php echo $_SESSION['username'];?></strong></p>
                        <p class="sub-text"><?php echo substr($_SESSION['bio'],0,15); ?></p>
                    </div>

                    <form method="GET" action="logout.php">
                    <button class="logout-btn">
                        <strong>Logout</strong>
                    </button>

                    </form>
                   
                </div>