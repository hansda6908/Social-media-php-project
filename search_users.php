

<?php include('header.php'); ?>



<?php


    include('connection.php');


    if(isset($_POST['search_input'])){

            $search_input = $_POST['search_input'];

            $stmt = $conn->prepare("SELECT * FROM users WHERE username like ? LIMIT 20");
            $stmt->bind_param("s",strval("%".$search_input."%"));
            $stmt->execute();
            $users = $stmt->get_result();


    }else{

            //default keyword
            $search_input = "Octavia";

            $stmt = $conn->prepare("SELECT * FROM users WHERE username like ? LIMIT 20");
            $stmt->bind_param("s",strval("%".$search_input."%"));
            $stmt->execute();
            $users = $stmt->get_result();


    }

           


?>


    <div class="mt-5 mx-5">
        <form action="search_users.php" method="POST">
            <div class="form-group search-component">
                <input type="text" class="form-control" placeholder="search..." name="search_input">
                <button type="submit" class="search-btn" name="search_btn">search</button>
            </div>
        </form>
        <ul class="list-group">


        <?php foreach($users as $user){ ?>

            <?php if($user['id'] != $_SESSION['id']){ ?>

            <li class="list-group-item search-result-item">
                <img src="<?php echo "Assets/imgs/".$user['image']; ?>" />
                <div style="width: 100%;">
                    <p><?php echo $user['username'];?></p>
                    <span><?php echo substr($user['bio'],0,20); ?></span>
                </div>
                <div class="search-result-item-btn">
                    <form action="other_user_profile.php" method="POST">
                        <input type="hidden" name="other_user_id" value="<?php echo $user['id']; ?>">
                        <button type="submit">Visit Profile</button>
                    </form>
                </div>
            </li>

            <?php } ?>

         <?php } ?> 


        </ul>
    </div>
     





</body>
</html>