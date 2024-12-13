<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        .post-img img {
            width: 100%;
            height: auto;
            display: block;
            margin: 20px 0;
        }

        .blog-post-content {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .blog-post-content h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #0043ff8c;
        }

        .blogpost-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            color: #555;
            font-size: 0.9rem;
        }

        .social svg {
            margin-right: 10px;
            cursor: pointer;
            fill: #0043ff8c;
            transition: transform 0.3s ease;
        }

        .social svg:hover {
            transform: scale(1.2);
        }

        .font1 {
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        .home-articles h2 {
            text-align: center;
            margin: 20px 0;
            font-size: 1.5rem;
            color: #0043ff8c;
        }

        .row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .home-article {
            max-width: 300px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .home-article:hover {
            transform: scale(1.05);
        }

        .home-article-img img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .home-article-content {
            padding: 15px;
        }

        .home-article-content h3 {
            font-size: 1rem;
            color: #0043ff8c;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #0043ff;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        .footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
    <title>iBlog - Heaven for bloggers</title>
</head>

<body>
    <nav class="nav">
        <div class="logo">
            <a href="index.php"><img src="banner_logo.jpeg" alt="nav_logo"></a>
        </div>

        <div class="item">
            <a class="home-btn" href="index.php">Home</a>
            <a href="index.php">Rent Car</a>
            <a href="contact.php">Contact Us</a>
            <a href="/">About Us</a>
            <!-- <a href="/car-rental-website-main/blogpost.html">Blog</a> -->
        </div>

        <div class="nav-right">
            <form action="search.html" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
            </form>
        </div>
    </nav>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="post-img">
        <img src="img/11.svg" alt="">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">The heaven for bloggers</h1>
        <div class="blogpost-meta">
            <div class="author-info">
                <div>
                    <b>
                        Author - Bill Gates (CEO Microtek)
                    </b>
                </div>
                <div>04 January. 6 min read</div>
            </div>
            <div class="social">
                <svg width="29" height="29" class="hk">
                    <path d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z"></path>
                </svg>
                <svg width="25" height="25" class="lk">
                    <path d="M24.77 0h-24.5C.28 0 0 .28 0 .62v23.55c0 .34.28.62.62.62h24.5c.34 0 .62-.28.62-.62V.62c0-.34-.28-.62-.62-.62zM9.34 6.57h2.7v9.34H9.34zm1.35-4.5c-.85 0-1.35.56-1.35 1.12.03.6.5 1.11 1.34 1.11 1.06 0 1.35-.72 1.35-1.1-.03-.61-.52-1.13-1.35-1.13zm15.51 13.5v4.61c0 .35-.28.62-.62.62h-4.29v-7.64c0-2.16-.81-3.63-2.86-3.63-1.57 0-2.49.99-2.9 1.94-.15.37-.19.88-.19 1.38v7.67h-2.7v-15h2.7v2.04h.04c.37-.56.99-1.35 2.04-1.35 1.48 0 2.62 1.03 2.62 3.24z"></path>
                </svg>
            </div>
        </div>

        <p class="font1">
            Coding is a beautiful thing... <br>
            Communication... <br>
            <br>
            We can make communication easy and simple with technology...
        </p>
    </div>

    <div class="home-articles">
        <h2>Related Articles</h2>
        <div class="row">
            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/12.svg" alt="">
                </div>
                <div class="home-article-content">
                    <h3>Communication Skills for Developers</h3>
                    <p>By <span>Steve Jobs</span></p>
                </div>
            </div>

            <div class="home-article">
                <div class="home-article-img">
                    <img src="img/13.svg" alt="">
                </div>
                <div class="home-article-content">
                    <h3>Becoming a Full Stack Developer</h3>
                    <p>By <span>Elon Musk</span></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 iBlog. All rights reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>
</body>

</html>
