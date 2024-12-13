
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





    .container {
    font-family: Arial, sans-serif;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    
    margin: 0;
}

.form-container {
    background-color: #f4f4f4;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
    
}

h2 {
    margin-top: 50px;
    margin-bottom: 10px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="date"],
input[type="time"],
input[type="file"],
input[type="tel"],
input[type="number"]{
    padding: 8px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px;
    background-color: #0043ff8c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: blueviolet;
}

    
       </style> 
</head>

<body>
  

<nav class="nav">
    <div class="logo">
    <a href="#home"><img  src="banner_logo.jpeg" alt="nav_logo"></a>
    </div>

<div class="item">
    <a class="home-btn" href="index.html">Home</a>
    <a href="/">Rent</a>
    <a href="contact.html">Contact Us</a>
    <a href="aboutUs.html">About Us</a>
    <a href="blogpost.html">Blog</a>
</div>

<div class="btn">
    <input class="login" type="button" value="Log in">
    <input type="button" value="Sign Up">
</div>
</nav>


<div class="container">
    
<div class="form-container">
    <h2><font size="6"><span style="color: #0043ff8c;">Easy Ride</span> Rental Booking</font></h2>
    <form action="booking.php" method="POST" enctype="multipart/form-data">
        
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="contact">Contact No:</label>
        <input type="tel" id="contact" name="contact" required>

        <label for="scooterType">Select Your Scooter:</label>
        <select id="scooterType" name="scooterType" required>
            <option value="" disabled selected> Select scooter</option>
            <option value="Honda Activa 6G">Honda Activa 6G</option>
            <option value="TVS Jupiter">TVS Jupiter</option>
            <option value="TVS Ntorq">TVS Ntorq</option>
            <option value="Hero Destini">Hero Destini</option>
            <option value="Suzuki Access 125">Suzuki Access 125</option>
            <option value="Suzuki Burgman Street">Suzuki Burgman Street</option>
            <option value="Ather 450X">Ather 450X</option>
            <option value="Honda Dio">Honda Dio</option>
            <option value="Hero Vida V1">Hero Vida V1</option>
            <option value="Ola S1 Air">Ola S1 Air</option>
            <option value="TVS iQube">TVS iQube</option>
            <option value="Ola S1 Pro">Ola S1 Pro</option>

        </select>

        <label for="pricing">Pricing (Rent per day):</label>
        <input type="text" id="pricing" name="pricing" readonly placeholder="Price will be displayed here">

        <label for="pickup_location">Pickup Location:</label>
        <input type="text" id="pickup_location" name="pickup_location" required>

        <label for="date">Booking Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="num">No. of days:</label>
        <input type="number" id="num" name="num" min="1" max="1000" required>

        <label for="time">Pickup Time:</label>
        <input type="time" id="time" name="time" required>

        <!--

        <label for="aadhar">Aadhar Photo:</label>
        <input type="file" id="aadhar" name="aadhar" accept="image/*" required>

        <label for="driving_license">Driving License Photo:</label>
        <input type="file" id="driving_license" name="driving_license" accept="image/*" required>

        <label for="selfie"> Photo:</label>
        <input type="file" id="selfie" name="selfie" accept="image/*" required>
-->

        <button type="submit" name="book_scooter">Book Scooter</button>
    </form>
</div>
</div>

<script>
    // Predefined pricing
    const pricingOptions = {
        "Honda Activa 6G": "₹200",
        "TVS Jupiter": "₹195",
        "TVS Ntorq": "₹185",
        "Hero Destini": "₹190",
        "Suzuki Access 125": "₹195",
        "Suzuki Burgman Street": "₹190",
        "Ather 450X": "₹195",
        "Honda Dio": "₹190",
        "Hero Vida V1": "₹180",
        "Ola S1 Air": "₹190",
        "TVS iQube": "₹190",
        "Ola S1 Pro": "₹180"
    };

    // Get form elements
    const scooterType = document.getElementById('scooterType');
    const pricingField = document.getElementById('pricing');

    // Event listener to update pricing based on selection
    scooterType.addEventListener('change', () => {
        const selectedType = scooterType.value;
        pricingField.value = pricingOptions[selectedType] || "Price not available";
    });
</script>

<script src="script.js"></script>
</body>
</html>


<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="book.php" method="POST">
    <label for="scooter_id">Scooter ID:</label>
    <input type="number" name="scooter_id" id="scooter_id" required>

    <label for="booking_date">Booking Date:</label>
    <input type="date" name="booking_date" id="booking_date" required>

    <label for="return_date">Return Date:</label>
    <input type="date" name="return_date" id="return_date" required>

    <label for="total_cost">Total Cost:</label>
    <input type="number" name="total_cost" id="total_cost" step="0.01" required>

    <button type="submit" name="book_scooter">Book Now</button>
</form>
 
</body>
</html>

-->