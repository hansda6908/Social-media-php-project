<?php

session_start();

//if user id is in session, then user is logged in
if(isset($_SESSION['id'])){
    header("location: index.php");
    exit;
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="Assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/13cbf55bee.js" crossorigin="anonymous"></script>

    <style>
        form i {
    margin-left: -30px;
    cursor: pointer;
}
    </style>

</head>

<body>

    <div class="container">
        <div class="main-container">

            <div class="main-content">
                <div class="slide-container" style="background-image: url('Assets/imgs/frame.png');">
                    <div class="slide-content" id="slide-content">
                        <img src="Assets/imgs/screen1.jpeg" class="active" alt="screen1">
                        <img src="Assets/imgs/screen2.jpeg" class="active" alt="screen2">
                        <img src="Assets/imgs/screen3.jpeg" class="active" alt="screen3">
                        <img src="Assets/imgs/screen4.jpeg" class="active" alt="screen4">
                    </div>
                </div>

                <div class="form-container">

                    <div class="form-content box">
                        <div class="logo">
                            <img src="Assets/imgs/logo.png" class="logo-img" alt="Instagram logo">
                        </div>
                        <form class="login-form" id="login-form" action="process_login.php" method="POST">
                        <?php 
                        if(isset($_GET['error_message'])){ ?>
                             <p id="error_message" class="text-center alert-danger"><?php echo $_GET['error_message']; ?></p>
                             <?php } ?>  

                            <div class="form-group">
                                <div class="login-input">
                                    <input type="text" name="email" placeholder="Type your email Id ..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="login-input">
                                <p>
               
                <input type="password" name="password" id="password" />
                <i class="bi bi-eye-slash" id="togglePassword"></i>
            </p>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="login-btn" name="login_btn" id="login_btn" type="submit">Login</button>
                            </div>
                        </form>

                        <div class="or">
                            <hr />
                            <span>OR</span>
                            <hr />
                        </div>

                        <div class="goto">
                            <p>Don't have an account?<a href="signup.php"> Sign Up</a></p>

                        </div>

                        <div class="app-download">
                            <p>Get the app.</p>
                            <div class="store-link">
                                <a href="#">
                                    <img src="Assets/imgs/play-store-logo.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="Assets/imgs/app-store-logo.png" alt="">
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="footer">
            <div class="links" id="links">
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Jobs</a>
                <a href="#">Help</a>
                <a href="#">Privacy</a>
                <a href="#">API</a>
                <a href="#">Terms</a>
                <a href="#">Top Accounts</a>
                <a href="#">Hastags</a>
                <a href="#" id="dark-btn">Dark</a>

            </div>
            <div class="copyright">

                @ 2022 Instagram from Ashish Meta
            </div>

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>


    <script>


const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });




        setInterval(() => { changeImage(); }, 1000);


        function changeImage() {
            var images = document.getElementById('slide-content').getElementsByTagName('img');

            var i = 0;


            for (i = 0; i < images.length; i++) {
                var image = images[i];

                if (image.classList.contains('active')) {
                    //remove active class from this image
                    image.classList.remove('active');
                    //if we are the last iteration then go back to first images
                    if (i == images.length - 1) {
                        var nextImage = images[0];
                        nextImage.classList.add('active');
                        break;
                    }

                    var nextImage = images[i + 1];
                    nextImage.classList.add('active');
                    break;

                }
            }
        }


        function changeMode() {
            var body = document.getElementsByTagName('body')[0];//[0]
            var footerLinks = document.getElementById('links').getElementsByTagName('a');//[]

            //if we are currently using dark mode
            if (body.classList.contains('dark')) {
                body.classList.remove('dark');

                for (let i = 0; i < footerLinks.length; i++) {
                    footerLinks[i].classList.remove('dark-mode-link');

                }
            }
            else {
                // we are currently using the light
                body.classList.add('dark');

                for (let i = 0; i < footerLinks.length; i++) {
                    footerLinks[i].classList.add('dark-mode-link');
                }

            }

        }






        document.getElementById('dark-btn').addEventListener('click', (e) => {
            e.preventDefault();


            changeMode();
        })


        function verifyForm() {
            var password = document.getElementById('password').value;
            var error_message = document.getElementById('error_message');

            if (password.length < 6) {
                error_message.innerHTML = "Password is too short";
                return false;
            }
            else {
                return true;
            }



        }


       // document.getElementById('login-form').addEventListener('submit', (e) => {
       //     e.preventDefault();

       //     verifyForm();
      //  })

    </script>
</body>

</html>