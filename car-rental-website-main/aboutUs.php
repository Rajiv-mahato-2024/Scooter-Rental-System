<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

* {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    html {
        scroll-behavior: smooth;
    }
    
    .nav {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70px;
        background-color: white;
        column-gap: 220px;
        border-bottom: 2px solid black;
    }
    
    .nav .item {
        display: flex;
        column-gap: 20px;
    }
    
    .nav .btn {
        display: flex;
        column-gap: 20px;
    }
    
    .nav .btn input {
        padding: 10px 30px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        background-color: #0043ff8c;
    }
    
    .nav .btn .login {
        padding: 10px 30px;
        border-radius: 10px;
        cursor: pointer;
        border: 2px solid #0043ff8c;
        background-color: white;
        color: #0043ff8c;
    }
    
    .logo {
        /*border: 2px solid red;
        */
        width: 400px;
        height: auto;
        display: flex;
        position: relative;
        align-items: center;
        justify-content: flex-start;
        gap: 1rem;
    
    }
    
    .nav>.logo img {
        width: 200px;
        height: auto;
        justify-content: flex-start;
        align-items: center;
        padding-top: 2px;
        padding-left: 10px;
        mix-blend-mode: multiply;
        filter: brightness(1.9);
        color: #381f02;
        -webkit-filter: brightness(1);
    }
    
    .nav .item a {
        font-size: 15px;
        text-decoration: none;
        color: black;
        font-weight: 700;
        cursor: pointer;
    }
    
    .nav .item .home-btn {
        color: #0043ff8c;
        font-weight: 700;
    }


        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: hsl(0, 20%, 93%);
            color: #333;
            box-sizing: border-box;
        }
        header{
            background-color: rgb(73, 147, 243);
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            color: #444;
            font-size: 36px;
        }

        section p {
            line-height: 1.5;
            margin: 10px 0;
        }

        h2 {
            margin-top: 20px;
            color: #444;
        }

        ul {
            list-style-type: square;
            margin-left: 20px;
            color: #555;
        }

        .image {
            width: 30%;
            float: right;
        }
        footer{
            text-align: center;
            margin-top:30px;
            color:#777;
        }
        a{
            color: #28a745;
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <nav class="nav">
        <div class="logo">
        <a href="#home"><img  src="banner_logo.jpeg" alt="nav_logo"></a>
        </div>

    <div class="item">
        <a class="home-btn" href="index.php">Home</a>
        <a href="/">Rent</a>
        <a href="contact.php">Contact Us</a>
        <a href="aboutUs.php">About Us</a>
        <a href="blogpost.php">Blog</a>
    </div>

    <div class="btn">
        <input class="login" type="button" value="Log in">
        <input type="button" value="Sign Up">
    </div>
</nav>


    <div class="container">
        <header>
            <h1>About Us</h1>
        </header>

        <section>
            <div>
                <div class="image">
                    <img src="data:image/jpeg;base64,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">
                </div>
                <div>
                    <p>Welcome to <strong>Easy Ride</strong>,your reliable partner in eco-friendly and convenient
                        transportation.
                        We aim to revolutionize urban commuting by offering affordable,efficient, and sustainable
                        scooter rentals.
                    </p>
                    <p>
                        Established with the goal of reducing traffic congestion and carbon emissions, we are passionate
                        about providing a seamless experience to our customers.
                    </p>
                </div>
            </div>




            <h2>Our Mission</h2>
            <p>
                Our mission is to provide a user-friendly platform that promotes sustainability.
            </p>
            <h2>Why Choose Us?</h2>
            <ul>
                <li>Affordable and Transparent Pricing</li>
                <li>Well-maintained Scooters</li>
                <li>Easy booking Process</li>
                <li>24/7 Customer Support</li>
            </ul>
            <h2>Contact Us</h2>
            <p>Got questions or need assistance? Feel free to reach out to us at:

            </p>
            <p>
                Email: <a href="mailto:contact@scooterrentalsystem">contact@scooterrentalsystem</a><br />
                Phone:+91 90054834854
            </p>
        </section>

        <footer>
            <p>
                &copy; 2024 Scooter Rental System. All rights reserved.
            </p>
        </footer>
    </div>
</body>

</html>