<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>iBlog - Heaven for bloggers</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #f8f9fa;
            color: #212529;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
            background-color: white;
            padding: 0 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .nav .item {
            display: flex;
            column-gap: 20px;
        }

        .nav .item a {
            font-size: 15px;
            text-decoration: none;
            color: black;
            font-weight: 700;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .nav .item .home-btn {
            color: #0043ff8c;
            font-weight: 700;
        }

        .nav .item a:hover {
            color: #0043ff;
        }

        .nav .logo img {
            width: 150px;
            height: auto;
        }

        .nav-right {
            display: flex;
            align-items: center;
        }

        .nav-right .form-input {
            padding: 8px 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-right: 10px;
        }

        .nav-right .btn {
            background-color: #0043ff8c;
            padding: 8px 20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-content h2 {
            text-align: center;
            font-size: 2rem;
            color: #0043ff8c;
            margin-bottom: 20px;
        }

        .contact-form .form-box {
            margin-bottom: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .contact-form button {
            width: 100%;
            padding: 12px;
            background-color: #0043ff8c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #003bb3;
        }

        .footer {
            background-color: #0043ff;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        .footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    .thank-you-message {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: lightblue; /* Light blue background */
    color: #333; /* Dark text color for contrast */
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000; /* Ensure it's on top of other elements */
}

    </style>
</head>
<body>
    <nav class="nav">
        <div class="logo">
        <a href="index.php"><img  src="banner_logo.jpeg" alt="nav_logo"></a>
        </div>

    <div class="item">
        <a class="home-btn" href="index.php">Home</a>
        <!-- <a href="/">Rent Car</a>
        <a href="/">Contact Us</a>
        <a href="/">About Us</a> -->
        <a href="blogpost.php">Blog</a>
    </div>

    <!-- <div class="btn">
        <input class="login" type="button" value="Log in">
        <input type="button" value="Sign Up">
    </div> -->
</nav>

    <div class="max-width-1 m-auto">
        <hr>
    </div>

    <div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
            <h2>Feel Free to Contact Us</h2>
            <div class="contact-form">
                <form action="backend.php" method="POST">
                    <div class="form-box">
                        <input type="text" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-box">
                        <input type="text" name="phone" placeholder="Enter Your Phone Number" required>
                    </div>
                    <div class="form-box">
                        <input type="email" name="email" placeholder="Enter Your Email Id" required>
                    </div>
                    <div class="form-box">
                        <textarea name="message" cols="30" rows="10" placeholder="How may we help you?" required></textarea>
                    </div>
                    <div class="form-box">
                        <button class="btn" type="submit" name="contact">Submit</button>
                    </div>
                </form>
                <!-- Placeholder for success/error messages -->
                <div id="form-message" class="message"></div>
            </div>
        </div>
    </div>
    
    

    <div class="footer">
        <p>Copyright &copy; </p>
        
    </div>
</body>
</html>
