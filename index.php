<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dstyle.css">
    
    <script>
        function admin(){
            window.location.href="http://localhost/gym/login.php"
        }
    </script>
    <script>
        function register(){
            window.location.href="http://localhost/gym/register.php"
        }
    </script>
</head>
<body>

    <!-- navigation bar -->
    <nav>
        <h2>The<br><span>Iron Paradise</span></h2>
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#self">SELF-TRAIN</a></li>
            <li><a href="#gallery">GALLERY</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#contact">CONTACT US</a></li>
            <li><a href="report.php">Reports</a></li>

            <button onclick="admin()">Admin</button>
        </ul>
        
    </nav>

    <!-- first page / HOME -->


    <section id="packages" class="container">
    <h1 class="package-heading">Our Packages</h1>
    
    <div class="package-card" id="package1">
        <h2>Starter Pack</h2>
        <p>Perfect for beginners</p>
        <span class="price">Rs.1000/month</span>
        <a class="join" href="1register.php">JOIN </a>
    </div>

    <div class="package-card" id="package2">
        <h2>Pro Fitness</h2>
        <p>Intermediate level training</p>
        <span class="price">Rs.2000/month</span>
        <a class="join" href="2register.php">JOIN </a>
    </div>

    <div class="package-card" id="package3">
        <h2>Elite Athlete</h2>
        <p>Advanced training for athletes</p>
        <span class="price">Rs.5000/month</span>
        <a class="join" href="register.php">JOIN </a>
    </div>
</section>



    
    <!--about -->

    <section id="about" class="container">
        <div class="mid">
        <h1 class="middle-about">THE IRON PARADISE</h1>
        <p class="about-section">We believe that the key to making life changing transformations is to ease out the journey by showing you the path and being the cheerleaders of your body transformation journey.</br>
            Here at The Iron Paradise, we provide you the exact tools you'll require to change your life around.</br>We have trainers who will not only help you through scientific methods, but also motivate, push you and be your friend when needed. </br>
            We are a complete gym, with highly customized guidance by our expert trainers providing you customized workout and diet systems.</p></div>
    </section>

<!-- third page / gallery -->


    
    <section id = "gallery">
        <h1 class="gallery-heading">GALLERY</h1>
        <div class ="gallery-flex">
            <img src="images/img-one.jpg" alt="image1" class="image 1">
            <img src="images/img-two.jpg" alt="image2" class="image 2">
            <img src="images/img-three.jpg" alt="image3" class="image 3">
            <img src="images/img-four.jpg" alt="image4" class="image 4">
            <img src="images/img-five.jpg" alt="image5" class="image 5">
            <img src="images/img-six.jpg" alt="image6" class="image 6">
        </div>
        
    </section>

    <!-- self-train -->
    <section id="self">
    <h1 class="self-heading">Basic Home Workout</h1>
    <div class="container-self">
        <img src="images/Train.png" alt="train" class="self-train">
    </div>
    </section>


<!-- fouth page/ contact -->

    <section id="contact">
        <h1 class="contact">CONTACT US</h1>
        <img src="icons/phone-solid.svg" alt="SVG icon" class="icons" > <span>9866113300, 01430992</span><br>
        <img src="icons/envelope-solid.svg" alt="envelope" class="icons"> <span>theironparadise@gmail.com</span><br>
        <img src="icons/location-dot-solid.svg" alt="location" class="icons"><span>Kathmandu</span>

        
    </section>
</html>