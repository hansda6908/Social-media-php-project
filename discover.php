<?php  include('header.php');  ?>


<?php  

 include('connection.php');

 if(isset($_GET['page_no']) && $_GET['page_no'] != ""){

    $page_no = $_GET['page_no'];
 }

    else{
        $page_no = 1;
    }

    $stmt = $conn->prepare("SELECT COUNT(*) as total_posts FROM posts");
    $stmt->execute();
    $stmt->bind_result($total_posts);
    $stmt->store_result();
    $stmt->fetch();

    $total_posts_per_page = 10;

    $offset = ($page_no-1) * $total_posts_per_page;

    $total_no_of_pages = ceil($total_posts/$total_posts_per_page); //ceil will round off as 1.56 = 2
    
     $stmt = $conn->prepare("SELECT * FROM posts LIMIT $offset,$total_posts_per_page"); 

     $stmt->execute();
     $posts = $stmt->get_result();
 ?>




    <main>
        <div class="discover-container">
            <div class="gallery">

            <?php foreach($posts as $post){ ?>


                <div class="gallery-item">
                    <img src="<?php echo "Assets/imgs/".$post['image']; ?>" class="gallery-image" alt="">
                    <div class="gallery-item-info">
                        <ul>
                            <li class="gallery-item-likes"><span class="hide-gallery-element"><?php echo $post['likes']; ?></span>
                                <i class="fas fa-heart"></i>
                            </li>
                            <li class="gallery-item-comments"><span class="hide-gallery-element"><a href="single_post.php?post_id=<?php echo $post['id']; ?>" style="color:#fff;"> <i class="fas fa-comment"></i></a></span>
                               
                            </li>
                        </ul>

                    </div>
                </div>

                <?php } ?>

                





            </div>






                             <!-- pagination bar -->
            <nav aria-label="Page navigation example"   style="display:flex; justify-content:center; ">
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


    </main>





</body>

</html>