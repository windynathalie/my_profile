<?php
date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Windy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="navigation-bar">
            <div class="container1">
                <div class="left-side">
                    <img class="picture" src="image/Profile-Picture.png" alt="logo">
                    <img class="name" src="image/header name.png" alt="name">
                </div>

                <div class="right-side" id="links">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#interest">Interest</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>
    </header>

    <section class="cta" id="home">
        <div class="container call-to-action">
            <div class="description">
                <p>Hello, I'm Windy Nathalie Ong</p>
                <h1>Illustration and <br> Web Design Enthusiast</h1>
                <button>
                    <a href="#">Hire me!</a>
                </button>
            </div>

            <div class="image-description" id="about">
                <img src="image/Group 1.png" alt="vector-play-laptop">
            </div>
        </div>
    </section>

    <section class="about-section" id="interest">
        <div class="card">
            <div class="about">
                <h2>About Me!</h2>
                <hr>
                <p>Hello, I'm Windy Nathalie Ong! I'm Fresh Graduate! I have an enthusiasm in Illustration
                    and web design. Currently, I'm available to work in commission.
                    Need creative design? I can help you!</p>
            </div>
        </div>
    </section>

    <section class="interest-section">
        <div class="container-interest">
            <div class="title">
                <h2>Interest</h2>
                <hr>
            </div>
            <div class="interest-list">
                <div class="left">
                    <img src="image/illust.png" alt="Illustration">
                    <p>Illustration</p>
                </div>
                <div class="middle">
                    <img src="image/code.png" alt="coding">
                    <p>Coding</p>
                </div>
                <div class="right">
                    <img src="image/write.png" alt="write">
                    <p>Writing</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="container-contact">
            <div class="top-side">
                <div class="get-in-touch">
                    <h2>Get in touch!</h2>
                    <div class="information">
                        <div class="name">
                            <img src="image/name.png" alt="name">
                            <p>Windy Nathalie Ong</p>
                        </div>
                        <div class="email">
                            <img src="image/email.png" alt="email">
                            <a href="mailto: windy.nathalie@gmail.com">windy.nathalie@gmail.com</a>
                        </div>
                        <div class="location">
                            <img src="image/location.png" alt="location">
                            <p>Makassar, Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="feedback">
                    <h3>Send me a feedback!</h3>
                    <form action="proses.php" method="post">
                        <textarea rows="5" cols="50" name="feedback" minlength="10" placeholder="Write here . . ."></textarea>
                        <button type="submit" name="submit" value="Kirim">Send!</button>
                    </form>
                </div>
            </div>
            <div class="bottom-side">
                <h3>Connect with me!</h3>
                <div class="social-media">
                    <a href="https://www.facebook.com/windy.nathalie/"><img src="image/facebook.png" alt="facebook-logo"></a>
                    <a href="https://www.instagram.com/windynathalie__/"><img src="image/instagram.png" alt="instagram-logo"></a>
                    <a href="https://twitter.com/WindyNathalie_"><img src="image/twitter.png" alt="twitter-logo"></a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container2">
            <p>Created by: Windy Nathalie Ong | © 2022 All Right Reserved.</p>
        </div>
    </footer>


    <script>
        function myFunction() {
            var x = document.getElementById("links");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</body>

</html>