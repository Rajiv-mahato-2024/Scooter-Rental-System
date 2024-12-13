<?php
// Start the session
session_start();

// Example: Check if a user is logged in (modify as per your authentication logic)
$isLoggedIn = isset($_SESSION['user_id']);
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
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <nav class="nav">
            <div class="logo">
            <a href="#home"><img  src="banner_logo.jpeg" alt="nav_logo"></a>
            </div>

        <div class="item">
            <a class="home-btn" href="index.php">Home</a>
            <a href="viewall.html">Rent</a>
            <a href="contact.php">Contact Us</a>
            <a href="aboutUs.php">About Us</a>
            <a href="blogpost.php">Blog</a>
        </div>

        <div class="btn">
            <?php if ($isLoggedIn): ?>
                <a href="logout.php" class="logout">Logout</a>
            <?php else: ?>
                <a href="login.php" class="login">Log In</a>
                <a href="signup.php" class="signup">Sign Up</a>
            <?php endif; ?>
        </div> 
    </nav>
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
                    <i class="fa-solid fa-star"></i>
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
                src="TVS Jupiter.png"
                alt="">
            <div class="details">

                <p class="car-name">TVS Jupiter 125</p>

                <div class="review">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                    <p>( 13.7k Reviews )</p>
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
                    <i class="fa-regular fa-star"></i>
                    <p>( 8.1k Reviews )</p>
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
                    <i class="fa-regular fa-star"></i>
                    <p>( 10.8k Reviews )</p>
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

        <div class="box">
            <img style="width: 365px;"
                src="ather450.png"
                alt="">
            <div class="details">

                <p class="car-name">Ather 450X</p>

                <div class="review">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                    <p>( 11.4k Reviews )</p>
                </div>

                <div class="feature">
                    <p><i class="fas fa-charging-station"></i>Electric</p>
                    <p><i class="fa fa-road"></i> 125km</p>
                    <p><i class="fa fa-cog fa-spin"></i> 125cc</p>
                    
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 190/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

        <div class="box">
            <img style="width: 365px;"
                src="Honda Dio.png"
                alt="">
            <div class="details">

                <p class="car-name">Honda Dio</p>

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
                    <p><i class="fa fa-road"></i> 60kmpl</p>
                    <p><i class="fa fa-cog fa-spin"></i> 100cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 190/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

        <div class="box">
            <img style="width: 365px;"
                src="Hero vida V1.png"
                alt="">
            <div class="details">

                <p class="car-name">Hero Vida V1</p>

                <div class="review">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <p>( 14.4k Reviews )</p>
                </div>

                <div class="feature">
                    <p><i class="fas fa-charging-station"></i>Electric</p>

                    <p><i class="fa fa-road"></i> 118km</p>
                    <p><i class="fa fa-cog fa-spin"></i> 110cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 180/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

        <div class="box">
            <img style="width: 365px;"
                src="s1-air.webp"
                alt="">
            <div class="details">

                <p class="car-name">Ola S1 Air</p>

                <div class="review">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                    <p>( 11.4k Reviews )</p>
                </div>

                <div class="feature">
                    <p><i class="fas fa-charging-station"></i>Electric</p>
                    <p><i class="fa fa-road"></i> 110km</p>
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
                src="tvsiqube.webp"
                alt="">
            <div class="details">

                <p class="car-name">TVS iQube</p>

                <div class="review">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <p>( 15.4k Reviews )</p>
                </div>

                <div class="feature">
                    <p><i class="fas fa-charging-station"></i>Electric</p>
                    <p><i class="fa fa-road"></i> 115km</p>
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
                src="s1proimage.png"
                alt="">
            <div class="details">

                <p class="car-name">Ola S1 Pro</p>

                <div class="review">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                    <p>( 11.7k Reviews )</p>
                </div>

                <div class="feature">
                    <p><i class="fas fa-charging-station"></i>Electric</p>
                    <p><i class="fa fa-road"></i>125km</p>
                    <p><i class="fa fa-cog fa-spin"></i> 110cc</p>
                </div>

                <div class="price">
                    <p> <i class="fa fa-inr"></i> 180/day</p>
                    <button>Book Now</button>
                </div>
            </div>
        </div>
     </div>
    <div class="txt">
        <p><font size="5">.....................</font></p>
        <p class="txt1">Thank <span> You</span></p>
        <p><font size="5"></font></p>
        
    </div>
</section>