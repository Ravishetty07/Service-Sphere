<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ServiceSphere | Home</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylef.css">
  <link rel="icon" type="text/css" href="images/icon_image.jpg">
  <link rel="stylesheet" type="text/css" href="css/styleabout.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#icon').click(function(){
    $('ul').toggleClass('show');
  });
});
</script>
</head>
<body>
 <?php 
  include 'header.php';

  ?>
  <section class="head" style="background-image: url(images/govt2.jpg);">
    <h2 style="color: white; margin-top: 280px;">Connecting citizens with essential information effortlessly.</h2>
  </section>
  <br><br>

  <section class="facilities">
    <h1>Why Choose Us</h1>
    </section>
    <div class="row">
      <div class="facilities-col">
        <img src="images/information.jpg">
        <h3>Information</h3>
        <p>We are dedicated to providing comprehensive and accurate information. Our website is meticulously curated to offer a wealth of resources, guides, and updates on various community service opportunities.we strive to be your trusted source for all things related to community service. Consider us for your community service endeavors because we prioritize providing valuable and up-to-date information.  </p>
      </div>
      <div class="facilities-col">
        <img src="images/donation.jpg">
        <h3>Donation</h3>
        <p>Consider us for your community service needs because we are committed to facilitating impactful donations. Our platform serves as a bridge between generous individuals and organizations . Whether you're looking to donate funds, goods, or your time, our platform offers comprehensive information on various opportunities to give back. </p>
      </div>
      <div class="facilities-col">
        <img src="images/feedback.jpg">
        <h3>Feedback Mechanism</h3>
        <p>The feedback mechanism in the ServiceSphere project is designed to collect and analyze user feedback from hospitals, schools, medical facilities, and other service providers through forms. This feedback is stored in a central database and analyzed to identify trends, areas for improvement, and recognize outstanding service providers, enhancing the quality and efficiency of the services offered. </p>
      </div>
    </div>
    <br><br>

    <center>
    <section class="about" >
         <h4 style="font-size: 40px; font-family: Sans-serif;">About Us</h4>
     <div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container">
    <img class="mainImg" src="images/ab1.jpg">
    <div class="allText aboveText">
      <p class="text-blk headingText">
        
      </p>
      <p class="text-blk subHeadingText">
        Providing comprehensive, reliable service information for schools, hospitals, banks, and more in your community.
        
      </p>
      <p class="text-blk description">
         At ServiceSphere, we are dedicated to providing comprehensive and reliable information about essential services such as schools, hospitals, banks, and more.Our mission is to make it easier for you to find and access the services you need, all in one convenient location. We are improving access to vital services in our community.
      </p>
     
    </div>
  </div>
  
</div>

  </div>
  
</section>
    </center><br><br>
    <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="donation.php">Donation</a></li>
            
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            
            <li><a href="#">Location</a></li>
            <li><a href="#">Navigation</a></li>
            
          </ul>
        </div>
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="#">Information</a></li>
            <li><a href="#">Easy Access</a></li>
            <li><a href="donation.php">Donation</a></li>
            <li><a href="#">Connectivity</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
          </div>
        </div>
      </div>
     </div>
  </footer>
</body>
</html>