<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">

    <script src="https://kit.fontawesome.com/b46bd9152f.js" crossorigin="anonymous"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>


<body>
    <div id="header">
        <div class="container1">
            <header class="header1">
                <nav class="nav"><img src="image/logo1.jpg" class="logo">
                    <ul id="sidemenu">
                        <li><a href=" index1.php ">Home</a></li>
                        <li><a href="about.php ">About</a></li>
                        <li><a href="gallery.php ">Gallery</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="index.php">Contact</a></li><!---i class="fa-solid fa-circle-xmark" onclick="closemenu()"></!---i>
                    </ul><i class="fa-solid fa-bars" onclick="openmenu()"-->
                    </i></nav>
            </header>
            <div class="header-text" style="text-align: center; align-items: center;padding-top:200px ">
                <h1>Unlocking the Creative Potential<br>of Children </h1>
                <p><span>Children</span> are naturally creative, with vibrant imaginations</p>
            </div>
        </div>
    </div>
    <!---<h1>Unlocking the Creative Potential of Children</h1><p><span>Children</span>are naturally creative,
    with vibrant imaginations.</p></div>-->
    <!---------------about------------->
    <div id="about ">
        <div class="container ">
            <div class="row ">
           
                <div class="about-col-1 "><img src="image/about.jpeg "></div>
                
                <div class="about-col-2 ">
                <h1 class="sub-title ">About</h1>
                  <p>Children have the innate capacity for creativity, and fostering their creativity is essential for their cognitive and emotional development.</p>
                    <div class="tab-titles ">
                        <p class="tab-links active-link " onclick="opentab( 'dance') ">Dance</p>
                        <p class="tab-links " onclick="opentab( 'singing') ">Singing</p>
                        <p class="tab-links " onclick="opentab( 'playing') ">Playing</p>
                    </div>
                    <div class="tab-contents active-tab " id="dance ">
                        <p>Dance is a captivating form of artistic expression that transcends cultural boundaries. Through graceful movements and rhythmic beats, it tells stories, conveys emotions, and celebrates the human spirit. Whether as a passionate
                            pursuit or a joyful pastime, dance allows individuals to express themselves, connect with others, and find beauty in motion</p>
                    </div>
                    <div class="tab-contents " id="singing ">
                        <p>Singing is a universal form of expression that transcends language. It has the power to convey emotions, tell stories, and uplift the human spirit. Whether in the shower, on stage, or around a campfire, singing connects us to our
                            innermost feelings and brings people together through the beauty of melody and harmony</p>
                    </div>
                    <div class="tab-contents " id="playing ">
                        <p>Play is the language of childhood, a window into a child's world of wonder and discovery. It's through play that children explore, learn, and develop essential life skills. From building with blocks to imaginative role-playing,
                            play is the creative canvas upon which their futures are painted, one joyful moment at a time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------Gellary---------->
    <div id="gallery ">
        <div class="container ">
            <h1 class="sub-title ">Gallery</h1>
            <div class="gallery-list ">
                <div class="gallery "><img src="image/about2.jpeg "></div>
                <div class="gallery "><img src="image/sing2.jpg "></div>
                <div class="gallery "><img src="image/football.jpeg "></div>
            </div>
        </div>
        <!-----services----->
        <div class="services ">
            <div class="container ">
                <h1 class="sub-title ">Service</h1>
                <div class="service-list ">
                    <div>
                        <h2>Danceing</h2>
                        <p>you're a novice seeking to learn, a performer preparing for a big stage, or simply looking to enjoy the art of dance, our dance services cater to all. From dance classes and choreography to event performances and workshops, we're
                            here to make your dance journey extraordinary. Discover the rhythm of life through our tailored dance services.</p>
                    </div>
                    <div>
                        <h2>Singing</h2>
                        <p>it's a way to express emotions, tell stories, and connect with others on a profound level. Whether you're an aspiring vocalist or simply love to sing in the shower, the art of singing invites you to unleash the power of your voice.
                            Join us in exploring the beauty of melody and harmony through our singing programs and services. Your voice is your unique instrument.</p>
                    </div>
                    <div>
                        <h2>Playing</h2>
                        <p>Play is the universal language of childhood and a lifelong source of joy and learning. Whether through games, sports, creative activities, or leisurely pursuits, playing fuels our curiosity, hones our skills, and fosters connections.
                            Join us in celebrating the art of play as we explore its transformative potential for individuals of all ages.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact ">
            <div class="container ">
                <div class="row ">
                    <div class="contact-left ">
                        <h1 class="sub-title ">contact us</h1>
                        <p><i class="fa-regular fa-share-from-square " style="color:blueviolet; "></i>madhureeyadav804@gmail.com</p>
                        <p><i class=" fa-solid fa-phone " style="color:blueviolet; "></i>0123466778</p>
                        <div class="social-icons "><a href=" "><i class="fa-brands fa-facebook "></i></a><a href=" "><i class="fa-brands fa-linkedin-in "></i></a><a href=" "><i class="fa-brands fa-square-instagram "></i></a><a href=" "><i class="fa-brands
                fa-twitter "></i></a></div>
                    </div>
                    <div class="contact-right ">
                        <!---- <form method="post " action="send-email.php "><input type=" text " name="Name " placeholder="your name " required><input type="email " name="Email " placeholder="your email " required><input type="number " name="number
                " placeholder="your number " required><textarea name="message " rows="4 " placeholder="your Message "></textarea><button class="btn btn2 ">send</button></form>-->
                       
                <form method="post" action="sendphp">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="subject">Number</label>
        <input type="text" name="subject" id="subject" required>
        
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
        
        <br>
        
        <button type="send">send</button>
    </form>
                    </div>
                </div>
            </div>
            <script src="script1.js "></script>
</body>

</html>