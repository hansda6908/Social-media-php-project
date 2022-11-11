
<?php include('header.php'); ?>

    <section class="main">
        <div class="wrapper">
            <div class="left-col">

               <center> <h3>Update Profile</h3> </center>

               <?php if(isset($_GET['error_message'])){ ?>
                 <p class="text-center alert-danger"><?php echo $_GET['error_message']; ?></p>

                <?php } ?>

                <form action="update_profile.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <img src="<?php echo "Assets/imgs/".$_SESSION['image']; ?>" class="edit-profile-image" alt="">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <p class="form-control">Email</p>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="username" required value="<?php echo $_SESSION['username']; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea name="bio" id="bio" class="form-control" cols="30" rows="3" ><?php echo $_SESSION['bio']; ?>
                        </textarea>
                    </div>

                    <div class="mb-3">

                        <input type="submit" name="update_profile_btn" id="update_profile_btn" class="update-profile-btn"
                            value="Update">
                    </div>
                </form>

            </div>
            <div class="right-col">
                <!--profile card-->
              <?php include("profile_card.php")  ?>

                

                <!--profile Suggestion-->
              
                <?php include("suggestion_side_area.php"); ?>
               

              



            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>