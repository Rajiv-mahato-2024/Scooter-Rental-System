<?php
session_start();
if(isset($_SESSION['user_id'])==null)
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="nav">
            <div class="logo">
            <a href="index.php"><img  src="banner_logo.jpeg" alt="nav_logo"></a>
            </div>

        <div class="item">
            <a class="home-btn" href="#">Home</a>
            <a href="login.html">Rent</a>
            <a href="login.html">Contact Us</a>
            <a href="login.html">About Us</a>
            <a href="login.html">Blog</a>
        </div>

        <div class="btn">
            <input class="login" type="button" value="Log in">
            <input type="button" value="Sign Up">
        </div>
    </nav>
<?php
}
else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="nav">
            <div class="logo">
            <a href="#home"><img  src="banner_logo.jpeg" alt="nav_logo"></a>
            </div>

        <div class="item">
            <a class="home-btn" href="index.php">Home</a>
            <a href="generalbooking.php">Rent</a>
            <a href="contact.php">Contact Us</a>
            <a href="aboutUs.php">About Us</a>
            <a href="blogpost.php">Blog</a>
            <a href="my_bookings.php">My Bookings</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="btn">
<?php
echo($_SESSION['username']);
?>
        </div>
    </nav>
<?php
}
?>
    <div class="home">
        <div class="main-sec">
            <div class="left">
                <p class="txt1">Easy And Fast Way To <span style="color: #0043ff8c;">Get</span> Scooter for Rent</p>
                <p><font size="5">There's an Easy Ride for everyone.</font></p>
                <div class="btn">
                    <input class="car" type="button" value="Rent Scooter">
                </div>
            </div>

            <div class="right">
                <img src="pedro-pereira-pplGVkdKQbY-unsplash.jpg" alt="">
            </div>
        </div>
    </div>

    <section class="loc-sec">
    <div class="main-sec">
        <div class="pick">
            <label for="location">Pick Up Location</label>
            <p><i class="fa-solid fa-location-dot"></i> Mumbai,India</p>
        </div>

        <div class="pick">
            <label for="location">Return Location</label>
            <p><i class="fa-solid fa-location-dot"></i> Surat,India</p>
        </div>

        <div class="pick">
            <label for="location">Pick Up Date</label>
            <p><i class="fa-solid fa-calendar-days"></i> 14-02-2024</p>
        </div>

        <div class="pick">
            <label for="location">Return Date</label>
            <p><i class="fa-solid fa-calendar-days"></i> 16-02-2024</p>
        </div>

        <div class="pick">
            <input type="button" value="Search Scooter" id="searchScooterBtn">
        </div>
    </div>
</section>



    <section class="car-sec">
        <div class="txt">
            <p class="txt1">Latest <span>Inventory</span></p>
            <p><font size="5">Precision Stock, Perfect Ride - Inventory Made Smarter!</font></p>
            <p class="txt2"></p>
        </div>

        <div class="main-sec">
            <div class="box">
                <img style="width: 365px;"
                    src="17317440721291w6f07mr.png"
                    alt="">
                <div class="details">

                    <p class="car-name">Honda Activa 6G</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 17.3k Reviews )</p>
                    </div>

                    <div class="feature">
                    <p><i class="fas fa-gas-pump"></i> Diesel </p>
                    <p><i class="fa fa-road"></i> 55kmpl</p>
                    <p><i class="fa fa-cog fa-spin"></i> 125cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 200/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

            <div class="box">
                <img style="width: 365px;"
                    src="1731744736666yve6yfwi.png"
                    alt="">
                <div class="details">

                    <p class="car-name">TVS Jupiter 125</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 10k Reviews )</p>
                    </div>

                    <div class="feature">
                    <p><i class="fas fa-gas-pump"></i> Diesel </p>
                    <p><i class="fa fa-road"></i> 60kmpl</p>
                    <p><i class="fa fa-cog fa-spin"></i> 120cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 190/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

            <div class="box">
                <img style="width: 365px;"
                    src="1731744733794jxibcsb6.png"
                    alt="">
                <div class="details">

                    <p class="car-name">TVS Ntorq 125</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 8.1kk Reviews )</p>
                    </div>

                    <div class="feature">
                    <p><i class="fas fa-gas-pump"></i> Diesel </p>
                    <p><i class="fa fa-road"></i> 50kmpl</p>
                    <p><i class="fa fa-cog fa-spin"></i> 110cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 190/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

            <div class="box">
                <img style="width: 365px;"
                    src="1731744736666yve6yfwi.png"
                    alt="">
                <div class="details">

                    <p class="car-name">Hero Destini 125</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 11.4k Reviews )</p>
                    </div>

                    <div class="feature">
                    <p><i class="fas fa-gas-pump"></i> Diesel </p>
                    <p><i class="fa fa-road"></i> 55kmpl</p>
                    <p><i class="fa fa-cog fa-spin"></i> 120cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 190/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

            <div class="box">
                <img style="width: 365px;"
                    src="1731744974497d4xs7dto.png"
                    alt="">
                <div class="details">

                    <p class="car-name">Suzuki Access 125</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 12.6k Reviews )</p>
                    </div>

                    <div class="feature">
                    <p><i class="fas fa-gas-pump"></i> Diesel </p>
                    <p><i class="fa fa-road"></i> 58kmpl</p>
                    <p><i class="fa fa-cog fa-spin"></i> 125cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 195/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

            <div class="box">
                <img style="width: 365px;"
                    src="1731744976642mte0x6lw.png"
                    alt="">
                <div class="details">

                    <p class="car-name">Suzuki Burgman Street 125</p>

                    <div class="review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>( 10k Reviews )</p>
                    </div>

                    <div class="feature">
                    <p><i class="fas fa-gas-pump"></i> Diesel </p>
                    <p><i class="fa fa-road"></i> 50kmpl</p>
                    <p><i class="fa fa-cog fa-spin"></i> 100cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 190/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>
        <div class="btn">
            <input type="button" value="View All">
        </div>
    </div>
</section>

<section class="support-sec">
    <div class="txt">
        <p class="txt1">Why <span>Choose</span> Us</p>
        <p>We strive to provide top-notch service, ensuring a hassle-free and enjoyable scooter rental experience every time.</p>
    </div>

    <div class="main-sec">
        <div class="box">
            <i class="fa-solid fa-phone"></i>
            <div class="txt-sec">
                <p class="txt1">24 Hour Support</p>
                <p>Our dedicated support team is available around the clock to assist you with any questions or concerns, ensuring a seamless rental experience.</p>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-flag-checkered"></i>
            <div class="txt-sec">
                <p class="txt1">Best Price</p>
                <p>We offer competitive rates to provide you with the best value for your money, making transportation affordable and accessible.</p>
            </div>
        </div>

        <div class="box">
            <i class="fa-solid fa-certificate"></i>
            <div class="txt-sec">
                <p class="txt1">Verified License</p>
                <p>Rent with confidence knowing that our scooters meet all licensing and safety requirements for a worry-free ride.</p>
            </div>
        </div>

        <div class="box">
            <i class="fa-regular fa-circle-xmark"></i>
            <div class="txt-sec">
                <p class="txt1">Free Cancellation</p>
                <p>Change of plans? No problem! Enjoy the flexibility of free cancellations without any hassle.</p>
            </div>
        </div>
    </div>
</section>


    <section class="achie-sec">
        <div class="txt">
            <p class="txt1">Our <span>Achievement</span></p>
            
        </div>

        <div class="main-sec">
            <div class="box">
                <p class="txt1">4000+</p>
                <p>Active Member</p>
            </div>

            <div class="box">
                <p class="txt1">3000+</p>
                <p>Scooter Color</p>
            </div>

            <div class="box">
                <p class="txt1">6000+</p>
                <p>Scooter Model</p>
            </div>

            <div class="box">
                <p class="txt1">10k</p>
                <p>Positive Rating</p>
            </div>
        </div>
    </section>

    <section class="start-sec">
    <div class="main-sec">
        <div class="left">
            <p class="txt1">Ready To Get Start?</p>
             <p class="txt2"> Your adventure begins here! Pick a scooter, pay securely, and enjoy the freedom of the ride.</p>
            <div class="btn">
               <a href="contact.php"><button>Contact Us</button></a>
            </div>
        </div>
        <div class="right">
            <img src="1731744066361uvh7l9yf.png" alt="">
        </div>
    </div>
</section>


    <footer class="foot-sec">
        <div class="logo">
            <h1>Easy Ride</h1>
        </div>

        <div class="copy">
            <p>Copyright &copy; 2024 Design By Rajiv Mahato</p>
        </div>

        <div class="item">
            <a href="/">Website Terms</a>
            <a href="contact.php">Contact Us</a>
            <a href="/">Privacy Policy</a>
        </div>
    </footer>
    <script src="script.js">
    const sessionData = <?= json_encode([
        'user_id' => $_SESSION['user_id'] ?? null,
        'username' => $_SESSION['username'] ?? null
    ]); ?>;
</script>


</body>

</html>