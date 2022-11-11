
<?php include('header.php'); ?>


    <section class="main">
        <div class="wrapper">
            <div class="left-col">

           <!--  to display the success and error message -->
            <?php if(isset($_GET['success_message'])){ ?>
                 <p class="text-center alert-success"><?php echo $_GET['success_message']; ?></p>

                <?php } ?>

                <?php if(isset($_GET['error_message'])){ ?>
                 <p class="text-center alert-danger"><?php echo $_GET['error_message']; ?></p>

                <?php } ?>



                <!--status wrapper-->
              <?php include('get_status_wrapper.php');  ?>

                <?php include('get_latest_posts.php'); ?>

                <?php foreach($posts as $post) { ?>
                <!--Post-->
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="<?php echo "Assets/imgs/".$post['profile_image']; ?>"> </div>
                            <p class="username"><strong><?php echo $post['username']; ?></strong></p>

                        </div>
                        <a style="color:#000;" href="single_post.php?post_id=<?php echo $post['id'];?>"><i class="fas fa-ellipsis-h options"></i></a>
                    </div>
                    <!--POST-->
                    <img src="<?php echo "Assets/imgs/".$post['image']; ?>" class="post-image">
                    <div class="post-content">
                        <div class="reaction-wrapper">


                        <?php include('check_if_user_liked_this_post.php'); ?>

                            <?php if($user_liked_this_post){ ?>

                                  <form action="unlike_this_post.php" method="POST">
                                     <input type="hidden" name="post_id" value="<?php echo $post['id'];?>">
                                        <button style="color:red" class="heart" type="submit" name="heart_btn">
                                       <i class="icon fas fa-heart"></i>
                                        </button>
                                 </form> 


                           <?php } else { ?>    
                               <form action="like_this_post.php" method="POST">
                                  <input type="hidden" name="post_id" value="<?php echo $post['id'];?>">
                               <button class="heart" type="submit" name="heart_btn">
                               <i class="icon fas fa-heart"></i>
                                   </button>
                                     </form> 
 
                           <?php } ?>     
                           
                            <i class="icon fas fa-comment"></i>

                        </div>
                        <p class="likes"><?php echo $post['likes']; ?> likes</p>
                        <p class="description"><span><?php echo $post['caption']; ?></span> <?php echo $post['hashtags']; ?></p>
                        <p class="post-time"><?php echo date("M,Y", strtotime($post['date']));  ?></p>
                    </div>


                    <div>
                        <a class="comment-btn" href="single_post.php?post_id=<?php echo $post['id'];?>">comments</a>
                    </div>

                    <!-- <div class="comment-wrapper">
                        <img src="Assets/imgs/ash.jpeg" class="icon" />
                        <input type="text" class="comment-box" placeholder="Add a comment" />
                        <button class="comment-btn">Comment</button>
                    </div> -->
                </div>


                <?php } ?>

               
                    <!-- pagination bar -->
            <nav aria-label="Page navigation example" class="mx-auto mt-3">
                          <ul class="pagination">
                                <li class="page-item <?php if($page_no<=1){echo 'disabled';} ?>"><a class="page-link" href="<?php if($page_no <= 1 ){echo "#";}else{echo '?page_no = '.$page_no-1 ; } ?>">Previous</a></li>


                           <li class="page-item"><a class="page-link" href="?page_no=1">1</a></li>
                          <li class="page-item"><a class="page-link" href="?page_no=2">2</a></li>
                         <li class="page-item"><a class="page-link" href="?page_no=3">3</a></li>


                            <?php if($page_no >= 3){ ?>
                                <li class="page-item"><a class="page-link" href="#">..</a></li>
                                <li class="page-link"><a class="page-link" href="<?php echo "?page_no".$page_no; ?>"></a></li>

                                <?php } ?>


                           <li class="page-item <?php if($page_no >=$total_no_of_pages){ echo 'disabled';} ?>
                            "><a class="page-link" href="<?php if($page_no>=$total_no_of_pages){echo "#";} else{ echo "?page_no=".$page_no+1;} ?>">Next</a></li>
                            </ul>
                            </nav>

         

            </div>






            <div class="right-col">

                <!--profile card-->
               <?php include('profile_card.php'); ?>


                                <!-- Suggestions -->
             <?php include('suggestion_side_area.php');  ?>

        </div>

        </div>
    </section>



               
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>