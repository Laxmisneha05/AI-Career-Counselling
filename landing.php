<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Counselling</title>
 
<?php require('inc/links.php'); ?>
</head>

<body>

<!--Header-->
<?php require('inc/header.php'); ?>
    
    
<!--Upper Portion-->
    <div class="section-container">
        <div class="left-section">
            <h2>Discover Yourself and Your Dream Career & College.</h2>
            <p>Get expert career guidance, counselling, and roadmap to find out which future path you will enjoy and
                excel at.</p>
            <button type="button" class="btn text-white btn-info shadow-none me-2" data-bs-toggle="modal">
                Get Started
            </button>
        </div>

        <div class="right-section">
            <div class="image-grid">
                <div class="image-frame">
                    <img id="img1" src="images/doctor.png" alt="Image 1">
                </div>
                <div class="image-frame">
                    <img id="img2" src="images/teacher.png" alt="Image 2">
                </div>
                <div class="image-frame">
                    <img id="img3" src="images/coder.png" alt="Image 1">
                </div>
                <div class="image-frame">
                    <img id="img4" src="images/pilot.png" alt="Image 2">
                </div>
                
            </div>
        </div>
</div>


<!--3 Cards-->
    <div class="cards-container">

        <div class="card" style="background-color: #57E1FF;">
            <img src="images/10th std students.png" alt="Class 8th" class="card-image">
            <div class="card-text">
                <p style="font-weight: 800; font-size:large">For Class 8th,9th,10th students </p>
                <p style="font-size: medium;">Helping you to choose the right career & subjects</p>
            </div>
            <button class="get-in-button" style="color: #57E1FF;">Get In</button>
            <button class="get-in-button" style="color: #57E1FF;">Take Test</button>
        </div>

        <div class="card" style="background-color: #2E6CB4;">
            <img src="images/11th 12th student.png" alt="Class 9th" class="card-image">
            <div class="card-text">
                <p style="font-weight: 800; font-size:large">For Class 11th & 12th students</p>
                <p style="font-size: medium;">Helping you to get into your dream college & course </p>
            </div>
            <button class="get-in-button" style="color: #2E6CB4;">Get In</button>
            <button class="get-in-button" style="color: #57E1FF;">Take Test</button>
        </div>
        <div class="card" style="background-color: #FCC844;">
            <img src="images/man with rocket.png" alt="Class 10th" class="card-image">
            <div class="card-text">
                <p style="font-weight: 800; font-size:large">Talk to AI : a.k.a Career Chatgpt</p>
                <p style="font-size: medium;">Helping you to get into your dream C's a.k.a career,course,college with your AI </p>
            </div>
            <button class="get-in-button" style="color:#FCC844;">Get In</button>
            
        </div>
    </div>
  

<!--Contact Us-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold">CONTACT US</h2>
<div class="px-4 text-align">
<form>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 p-4 mb-lg-0 mb-3 rounded">
                    <div class="mt-3">
                    <input type="text" class="form-control shadow-none" placeholder="Full Name">
                    </div>
                    <br/>
                    <div class="mt-3">
                    <input type="phone" class="form-control shadow-none" placeholder="Mobile Number">
                    </div>
                    <br/>
                    <div class="mt-3">
                    <input type="email" class="form-control shadow-none"placeholder="Email Id">
                    </div>
            </div>
        <div class="col-lg-6 col-md-4">
            <div class="mt-3">
                <br/>
            <textarea class="form-control shadow-none mb-4" rows="8" style="resize: none;" placeholder="Message"></textarea>
            </div>
        </div>
        </div>
    </div>
    <center>
        <button type="button" class="btn btn-colour btn-hover white-text shadow-none me-lg-3 me-2 px-4" data-bs-toggle="modal" data-bs-target="#loginModal">
            Submit
        </button>
    </center>
</form>
</div>


<!--Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold">REACH US</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.03900799053!2d72.88118615!3d19.082250749999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1689604134501!5m2!1sen!2sin" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <br/>
            <h5>Our Office Address</h5>
            <a href="https://goo.gl/maps/zkn147hC6aTHxJdy6" target="blank" class="d-inline block text-decoration-none text-dark">
                <i class="bi bi-geo-alt-fill"></i> &nbsp; Career Expert, Panvel, Navi Mumbai
            </a>
            <br/>
                <h5 class="mt-4">General Enquires</h5>
                <a href="mailto: snehachilukuri28@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> &nbsp; Careersupport@justdial.com
                </a>
                <h5 class="mt-4">Call Us</h5>
                <a href="tel: 9876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> &nbsp; +91 9876543210
                </a>
                <br/>
                <h5 class="mt-4">Our Timing</h5>
                <i class="bi bi-clock-fill"></i> &nbsp; Mon-Sat 10:00AM to 6:00PM
        </div>
</div>
</div>

<!--Footer-->
<?php require('inc/footer.php'); ?>

</body>
</html>