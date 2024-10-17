<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocietyConnect</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
       

    </style>
</head>
<body>
   <div class="page">
        <div class="navbar">
            <div class="logo-title">
                <img src="Images/logo.PNG" class="logo" alt="SocietyHub Logo">
                <h1>SocietyConnect<span></span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="" class="active">Home</a></li>
                    <li><a href="#rules">Rules & Regulations</a></li>
                </ul>
            </nav>
            <a href="login.html" class="btn">Back to Home</a>
        </div>
    
       
        <div class="row">
            <div class="col-1">
                <img src="Images/building.jpg" alt="Society Building" class="building-image">
            </div>
            <div class="col-2">
            <div class="form-container">
               <div class="adminfbtn" style="display:flex; align-items:center; margin-bottom:20px">
                   <img src="Images/adminlogin.jpg" class="admimg" alt="" style="width:100px">
                   <h1>Admin Login</h1>
               </div>
               <form action="Adminlogin.php" method="POST">
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="text" placeholder="Admin Code" name="admincode" required>
                    <button type="submit" class="btn-primary" name="logina" >Login</button>     
                </form>
            </div>
            </div>
        </div>    
   </div>
   <!-- <hr> -->
   <div id="rules">
       <h1>Rules and Regulations</h1>
       <hr>
       
        <li>Members and residents are required to keep their flats/homes and nearby premises clean and habitable.</li>  
        <li>The residents should also maintain proper cleanliness etiquette while using common areas, parking lot, etc. and not throw litter from their balconies and windows.</li>
        <li>Members must regularly pay the maintenance charges and all other dues necessitated by the society.</li>
        <li>Keeping pets is allowed after submitting the required NOC to the society. But if pets like dogs are creating any kind of disturbance to other society members then the pets won’t be allowed.</li>
        <li>Every member of the society should park their vehicles in their respective allotted parking spaces only.</li> 
        <li> After using the community hall for any event or function it should be cleaned and no damages should be caused.</li> 
        <li>No member can occupy the area near their front doors, corridors, passage for their personal usage.</li> 
        <li>Salesmen, vendors or any other sellers are not allowed to enter the premises.</li>
        <li>Wastage and over usage of water is not allowed.</li>
        <li>Smoking in lobbies, passage is not allowed. If any irresponsible person is found smoking in the no smoking zone, he/she shall be charged with penalty.</li>   
    </div>
    <!-- footer code -->
    <!-- <hr> -->
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>About Us</h2>
                <div class="content">
                    <p>
                        SocietyHUB is a web app where society members can get all the updates related to their society. The members also get notified with notices and events held in society and can see information about members in the society. Members can also post complaints regarding any issue in society.
                    </p>
                </div>
            </div>
            <div class="right box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Thanekar Parkland, Badlapur(E)</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+91 8779635278</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">societyHUB@gmail.com</span>
                    </div>
                </div>
            </div>
            <!-- Embedded Google Maps -->
            <div class="map box">
                <h2>Find Us</h2>
                <div class="content">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609964935!2d72.74109862376212!3d19.054445499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8e9c3962bdb%3A0xb5c03d11f9d194db!2sThanekar%20Parkland%2C%20Badlapur(E)!5e0!3m2!1sen!2sin!4v1604915030738!5m2!1sen!2sin"
                        width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="copyright">
            <h3>Copyright @2023 | Designed with HTML, CSS, PHP.</h3>
        </div>
    </footer>
    
</body>
</html>
<!-- Php code to admin login -->
<?php
if(isset($_POST['logina'])){
    $user = $_POST['username'];
    $adcode = $_POST['admincode'];
    if($user=="Admin" && $adcode=="100"){
        echo "<script>alert('Welcome,You are logged in...!');
        window.location.href ='managemem.php';
        </script>";
    }
    else{
        echo "<script>alert('Sorry,Please enter valid details.!!');
        </script>";
    }
}
?>