<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website Design</title>

    <link rel="icon" type="text/x-icon" href="images/logo.png">

    <!-- Style Css Link -->
    <link rel="stylesheet" href="travelweb.css">
    <!-- Style Css Link -->

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Font Awesome Cdn -->

    <!-- Google Font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- Google Font links -->

</head>
<body>

    <!-- Header Start -->

    <div class="header">
        <nav>

            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>

            <div class="content">

                <div class="logo">
                    <div class="logo"><a href="travelweb.php"><img src="./images/logo.png" alt=""></a></div>
                </div>
                <ul class="links">
                    <li><a href="travelweb.php">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#packages">Packages</a></li>
                    <li><a href="#book">Book</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Search" required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>


        </nav>
    </div>
    
    <!-- Header End -->

    <!-- Home Section Start -->
    <section class="home" id="home">
        <div class="main-text">
            <h3>Travel The World
                <br> & Explore The New Destination
            </h3>
        
        <p>Travelism agency</p>
        <a href="#packages"><button id="home-btn">PACKAGES <i class="fa-solid fa-arrow-down"></i><button id="home-btn2"><i class="fa-sharp fa-solid fa-circle-play"></i></button></button></a>
    </div>
    </section>
    <!-- Home Section End -->


    <!-- Services Section Start -->
    <section class="services" id="services">
        <div class="heading">
            <h3>Services</h3>
        </div>
            <div class="card-content">

                <div class="row">
                    <i class="fas fa-globe-asia"></i>
                    <div class="card-body">
                        <h3>Around The World</h3>
                        <p>Our Travelism company connect you with many countries arond the world!</p>
                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-plane"></i>
                    <div class="card-body">
                        <h3>Fastet Travel</h3>
                        <p>we will provide a fastest and safest journey!</p>

                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-hotel"></i>
                    <div class="card-body">
                        <h3>Affordable Hotels</h3>
                        <p>We also offer hotel facilities on your trip in affordable cost to make it best! </p>

                    </div>
                </div>
                <div class="row">
                    <i class="fas fa-bullhorn"></i>
                    <div class="card-body">
                        <h3>Safty Guide</h3>
                        <p>Our Travelism agency will make your trip best and we ensure your safety!</p>

                    </div>
                </div>

            </div>

       
    </section>
    <!-- Services Section End -->



    <!-- About Section Start -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="./images/about-img.png" alt="">
        </div>
        <div class="about-info">
            <h6>About us</h6>
            <h3>Travelism agency</h3>
            <p>“Travel is the only thing you buy that makes you richer”. We completely swear by this and believe in fulfilling travel dreams that make you invariably rich by the day. We have been selling beautiful experiences for years through our state-of-the-art designed holiday packages and other essential travel services. We inspire our customers to live a rich life, full of unforgettable travel experiences.

Our mission is not just to be a travel agency which helps you book a holiday; we want to be youo would go an extra mile to help you choose an ideal destination and learn more about the place you have been dreaming to visit. Since holidays are more about personal choices and interests, we bring to you customizable tour packages as well. We give you the prerogative to pick and choose anything that matches your interest. No matter how many travel experiences we sell every day, we ensure that you are the protagonist of your own travel story.</p>

            <button class="about-btn"><a href="about.php">Read More...</a></button>
        </div>
    </section>
    <!-- About Section End -->




    <!-- Gallary Section Start -->
    <section class="gallary" id="gallary">
        <div class="heading">
            <h3>OUR GALLERY <i class="fa-solid fa-arrow-down"></i></h3>
        </div>

        <div class="gallary-card">
            <div class="row">
                <img src="./images/p1.jpg" alt="">
            </div>
            <div class="row">
                <img src="./images/p2.png" alt="">
            </div>
            <div class="row">
                <img src="./images/p3.png" alt="">
            </div>
            <div class="row">
                <img src="./images/p4.png" alt="">
            </div>
            <div class="row">
                <img src="./images/p5.png" alt="">
            </div>
           

        </div>
    </section>
    <!-- Gallary Section End -->





    <!-- Packages Section Start -->
    <section class="packages" id="packages">
        <div class="main-txt">
            <h3>Packages</h3>
        </div>

        <div class="card-content">
            <div class="row">
                <img src="./images/united state.png" alt="">
                <div class="card-body">
                    <h3>United States</h3>
                    <p>Travelism agency</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price Rs.50,000</h5>
                    <button><a href="us.php">Book Now</a></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/jordan.png" alt="">
                <div class="card-body">
                    <h3>Jordan</h3>
                    <p>Travelism agency</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price Rs.40,000</h5>
                    <button><a href="jorden.php">Book Now<a></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/china.png" alt="">
                <div class="card-body">
                    <h3>China</h3>
                    <p>Travelism agency</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price Rs.30,000</h5>
                    <button><a href="china.php">Book Now</a></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/Mexico.png" alt="">
                <div class="card-body">
                    <h3>Mexico</h3>
                    <p>Travelism agency</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price Rs.45,000</h5>
                    <button><a href="mexico.php">Book Now</a></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/france.png" alt="">
                <div class="card-body">
                    <h3>France</h3>
                    <p>Travelism agency</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price Rs.35,000</h5>
                    <button><a href="france.php">Book Now</a></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/Greece.png" alt="">
                <div class="card-body">
                    <h3>Greece</h3>
                    <p>Travelism agency</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price Rs.28,000</h5>
                    <button><a href="greece.php">Book Now</a></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/Spain.png" alt="">
                <div class="card-body">
                    <h3>Spain</h3>
                    <p>Travelism agency</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price Rs.37,000</h5>
                    <button><a href="spain.php">Book Now</a></button>
                </div>
            </div>
            <div class="row">
                <img src="./images/Turkey.png" alt="">
                <div class="card-body">
                    <h3>Turkey</h3>
                    <p>Travelism agency</p>
                    <div class="rating">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                    </div>
                    <h5>Price Rs.35,000</h5>
                    <button><a href="turkey.php">Book Now</a></button>
                </div>
            </div>
        </div>

    </section>
    <!-- Packages Section End -->





    <!-- Book Section Start -->
    <section class="book" id="book">
        <div class="book-img">
            <img src="./images/book-img.png" alt="">
        </div>
        <div class="book-form">
            <h5>BOOK YOUR DESTINATION</h5>
            <form method="post" action="php.php" id="form">
                <p>NAME:</p><br>
                <input type="text" placeholder="name" name="name" id="name" required>
                <p>EMAIL:</p><br>
                <input type="email" placeholder="email" name="email" id="email" required>
                <p>PLACE:</p><br>
                <input type="text" placeholder="Where To" name="place" id="place" required>
                <p>TOTAL STAY DAYS:</p><br>
                <input type="text" placeholder="How Many" name="days" id="days" required>
                <p>ARRIVAL DATE:</p><br>
                <input type="date" placeholder="Arrivals" name="arrivaldate" id="arrivaldate" required>
                <p>LEAVING DATE:</p><br>
                <input type="date" placeholder="Leaving" name="leavingdate" id="leavingdate required>
                <textarea name="" id="" cols="5" rows="5" placeholder="Enter Your Details"></textarea>
                <p style="display:inline-block">PAYMENT METHOD:</p>
                <select  required>
                    <option>ONLINE</option>
                    <option>OFFLINE</option>
                </select><br><br>
                <input type="submit" value="Book Now" class="submit" >
            </form>
            <!-- <script src="book.js"></script> -->
        </div>
    </section>
    <!-- Book Section End -->




    <!-- Section Reviews Start -->
    <section class="reviews" id="reviews">
        <div class="main-txt">
            <h3>What Custommers Say</h3>
        </div>
        <div class="card-content">
            <div class="row">
                <h5><img src="./images/pic-1.png" alt="">Yash</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>I was extremely satisfied with Travelism agency. I highly recommend it, Mr Rahul will turn your trip into an unforgettable experience!</p>

            </div>
            <div class="row">
                <h5><img src="./images/pic-2.png" alt="">Mahima</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>We spent 8 days touring Paris and Switzerland, covering major highlights and soaking in the European vibe.  All in all, it was a thoroughly pleasurable experience.</p>

            </div>
            <div class="row">
                <h5><img src="./images/pic-3.png" alt="">Aarav</h5>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Such a nice journey with travelism agent .Unforgettable memory! Their service was wonderful! Highly recommend this agent!</p>

            </div>
        </div>
    </section>
    <!-- Section Reviews End -->




    <!-- Contact Section Start -->
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Get In <span>Touch</span></h2>
            <p>Do you want to get all updates about our packages?</p>
            <p>Out travelism agency is dekidhted to get in touch with you?</p>
            <div class="list">
                <li><a href="#">9876543210</a></li>
                <li><a href="#">travelism@gmail.com</a></li>
                <li><a href="#">Chennai,Tamil nadu,India</a></li>
            </div>
        </div>

        <div class="contact-form">
            <form method="post" action="contact.php">
                <input type="text" placeholder="Name" name="name" required>
                <input type="number" placeholder="Phone" name="phone" required>
                <input type="email" placeholder="Email" name="email"  required>
                <textarea name="" id="" cols="35" rows="10" placeholder="Message" ></textarea>
                <input type="submit" value="Send" class="submit" required>
            </form>
        </div>

    </section>
    <!-- Contact Section End -->





    <footer id="footer">
        <div class="footer-content">
            <div class="row" id="row1">
                <a href="#" id="footer-logo">Travel Agency</a>
                <p>Eager To get update about us ? We are also available in social media</p>
                <div class="socail-links">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                </div>
            </div>
            <div class="row" id="row2">
                <h3>UseFull Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Book</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="row" id="row4">
                <h3>Download App</h3>
                <img src="./images/app.png" alt="">
            </div>
        </div>
    </footer>








</body>
</html>