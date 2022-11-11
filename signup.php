<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="Assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/13cbf55bee.js" crossorigin="anonymous"></script>

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
                        <form class="login-form" id="signup-form" action="process_signup.php" method="POST">

                        <?php 
                        if(isset($_GET['error_message'])){ ?>
                             <p id="error_message" class="text-center alert-danger"> <?php echo $_GET['error_message']; ?> </p>
                             <?php } ?>                          

                            <div class="form-group">
                                <div class="login-input">
                                    <input type="text" name="email" placeholder="Type your email Id ..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="login-input">
                                    <input type="text" name="username" placeholder="Type your username ..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="login-input">
                                    <input type="password" name="password" id="password"
                                        placeholder="Type your password ..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="login-input">
                                    <input type="password" name="password_confirm" id="confirm_password"
                                        placeholder="Type your password again ..." required>
                                </div>
                            </div>

                            <div class="btn-group">
                                <button class="login-btn" id="signup_btn" name="signup_btn" type="submit">Sign Up</button>
                            </div>
                        </form>

                        <div class="or">
                            <hr />
                            <span>OR</span>
                            <hr />
                        </div>

                        <div class="goto">
                            <p>Already have an account?<a href="login.php"> Login</a></p>

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







    <script>

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



        function verifyForm() {
            var password = document.getElementById('password').value;
            var confirm_password = document.getElementById('confirm_password').value;
            var error_message = document.getElementById('error_message');

            if (password.length < 6) {
                error_message.innerHTML = "Password is too short";
                return false;
            }

            if (password != confirm_password) {
                error_message.innerHTML = "passwords doesn't match";
                return false;
            }
            else {
                return true;
            }
        }



        document.getElementById('dark-btn').addEventListener('click', (e) => {
            e.preventDefault();


            changeMode();
        })

    



    </script>
</body>

</html>