<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/13cbf55bee.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="Assets/css/style.css" />

</head>

<body>


    <nav class="navbar">
        <div class="nav-wrapper">
            <img src="Assets/imgs/logo.png" class="brand-img" />
            <form class="search-form">
                <input type="text" class="search-box" placeholder="Search" />

            </form>
            <div class="nav-items">
                <i class="icon fa-solid fa-house-chimney"></i>
                <i class="icon fas fa-plus"></i>
                <i class="icon fas fa-heart"></i>
                <div class="icon user-profile">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
    </nav>

    <header class="profile-header">
        <div class="profile-container">
            <div class="profile">

                <div class="profile-image">
                    <img src="Assets/imgs/ash.jpeg" alt="profile picture">
                </div>

                <div class="profile-user-settings">
                    <h1 class="profile-user-name">Ashish</h1>
                    <button class="profile-btn profile-edit-btn">Edit Profile</button>
                    <button class="profile-btn profile-settings-btn" aria-label="profile settings">
                        <i class="fa-solid fa-gear"></i>
                    </button>


                    <div class="popup" id="popup">
                        <div class="popup-window">
                            <span class="close-popup">&times;</span>
                            <a href="">Edit profile</a>
                            <a href="">Create post</a>
                            <a href="">Logout</a>
                        </div>
                    </div>

                </div>

                <div class="profile-stats">

                    <ul>
                        <li><span class="profile-stat-count">345</span> posts</li>
                        <li><span class="profile-stat-count">345</span> followers</li>
                        <li><span class="profile-stat-count">345</span> following</li>
                    </ul>

                </div>

                <div class="profile-bio">
                    <p><span class="profile-real-name">Name </span>This is the bio area that I designed and I used HTML
                        &
                        CSS</p>

                </div>

            </div>
        </div>

    </header>

    <main>
        <div class="profile-container">
            <div class="gallery">
                <div class="gallery-item">
                    <img src="Assets/imgs/flower.jpg" class="gallery-image" alt="">
                    <div class="gallery-item-info">
                        <ul>
                            <li class="gallery-item-likes"><span class="hide-gallery-element">Likes:</span>
                                <i class="fas fa-heart"></i>
                            </li>
                            <li class="gallery-item-comments"><span class="hide-gallery-element">Comments:</span>
                                <i class="fas fa-comment"></i>
                            </li>
                        </ul>

                    </div>
                </div>


                <div class="gallery-item">
                    <img src="Assets/imgs/flower.jpg" class="gallery-image" alt="">
                    <div class="gallery-item-info">
                        <ul>
                            <li class="gallery-item-likes"><span class="hide-gallery-element">Likes:</span>
                                <i class="fas fa-heart"></i>
                            </li>
                            <li class="gallery-item-comments"><span class="hide-gallery-element">Comments:</span>
                                <i class="fas fa-comment"></i>
                            </li>
                        </ul>

                    </div>
                </div>


                <div class="gallery-item">
                    <img src="Assets/imgs/flower.jpg" class="gallery-image" alt="">
                    <div class="gallery-item-info">
                        <ul>
                            <li class="gallery-item-likes"><span class="hide-gallery-element">756</span>
                                <i class="fas fa-heart"></i>
                            </li>
                            <li class="gallery-item-comments"><span class="hide-gallery-element">45</span>
                                <i class="fas fa-comment"></i>
                            </li>
                        </ul>

                    </div>
                </div>





            </div>
        </div>


    </main>
    <div class="profile-container"></div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>