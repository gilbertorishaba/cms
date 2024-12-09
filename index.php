<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Google Fonts for modern typography -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <!-- Bootstrap and FontAwesome -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


   <title>MUBS Nakawa CMS</title>
   <style>
      body {
         background-color: #fff;
         font-family: 'Poppins', sans-serif;
         margin: 0;
         padding: 0;
      }




      .menu-btn {
         position: fixed;
         top: 20px;
         right: 20px;
         background-color: #28a745;
         color: white;
         border: none;
         padding: 10px 20px;
         font-size: 16px;
         cursor: pointer;
      }

      .menu-btn:hover {
         background-color: #218838;
      }






      /* Primary Navbar Styles */
      .navbar-primary {
         background-color: #003366;
         padding: 15px 0;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         height: 50px;
         margin-bottom: 10px;
         /* This will leave 100px of space below the nav bar */


         /* Adjust to your preferred size */

      }

      /* Primary Navbar Styles */
      .navbar-primary .navbar-nav .nav-link {
         color: white;
         font-weight: 600;
         text-transform: uppercase;
         margin-right: 20px;
         text-decoration: none;
         transition: all 0.3s ease;
      }

      .navbar-primary .navbar-nav .nav-link:hover {
         color: #28a745;
         /* Green color on hover */
         border-bottom: 2px solid #28a745;
         /* Adds a green underline on hover */
         padding-bottom: 4px;
         /* Gives a feel of the underline being clicked */
      }



      .navbar-brand {
         display: flex;
         align-items: center;
         font-size: 1.8rem;
         font-weight: bold;
         color: darkblue;
         text-decoration: none;
         position: relative;
         /* Allows for positioning */
         top: 0;
         /* Adjust this value to move the element upwards */
         padding: 0;
         /* Remove padding to ensure accurate positioning */
      }

      .navbar-brand img {
         width: 50px;
         border-radius: 50%;
         /* Circular logo */
         height: auto;
         margin-right: 15px;
         vertical-align: middle;
         /* Ensures proper vertical alignment */
      }

      .navbar-brand p {
         line-height: 1.5;
         /* Improves text spacing */
      }

      /* Maintain space between brand and the next section */
      .navbar-brand {
         margin-bottom: 20px;
         /* Adjust as needed */
      }





      .navbar-nav .nav-link {
         color: white;
         font-weight: 600;
         text-transform: uppercase;
         margin-right: 20px;
      }

      .navbar-nav .nav-link:hover {
         color: #003366;
      }

      /* Secondary Navbar */
      .navbar-secondary {
         background-color: #003366;
         /* Dark blue background */
         padding: 10px 0;
         /* Padding for vertical spacing */
         height: 60px;
         /* Slightly taller for a modern look */
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         /* Soft shadow for depth */
      }

      /* Flexbox container for alignment */
      .navbar-secondary .container {
         display: flex;
         justify-content: flex-end;
         /* Aligns the items (nav links) to the right */
         align-items: center;
         /* Vertically centers items */
         max-width: 1200px;
         /* Keeps the navbar content within a reasonable width */
         margin: 0 auto;
         /* Centers the navbar */
      }

      /* Flex layout for nav links (change flex-direction to row) */
      .navbar-secondary .navbar-nav {
         display: flex;
         /* Display links in a row */
         list-style: none;
         /* Removes default list styling */
         margin: 0;
         padding: 0;
         flex-direction: row;
         /* Ensure the nav links are horizontally arranged */
      }

      /* Individual nav link styles */
      .navbar-secondary .nav-item {
         margin: 0 15px;
         /* Space between links */
      }

      .navbar-secondary .nav-link {
         color: #f0f0f0;
         /* Light text color */
         font-size: 16px;
         /* Font size for the links */
         font-weight: 500;
         /* Slightly lighter weight for a modern look */
         text-decoration: none;
         /* Removes underline */
         transition: all 0.3s ease;
         /* Smooth transition for hover effect */
         padding: 5px 0;
         /* Vertical padding */
         text-align: justify;
         /* Vertical alignment */
      }

      .navbar-secondary .nav-link:hover {
         color: #28a745;
         /* Green color on hover */
         border-bottom: 2px solid #28a745;
         /* Adds a green underline on hover */
         padding-bottom: 4px;
         /* Gives a feel of the underline being clicked */
      }

      /* Optional: Responsive adjustments */
      @media (max-width: 768px) {
         .navbar-secondary .container {
            justify-content: center;
            /* Centers the links on smaller screens */
         }

         .navbar-secondary .navbar-nav {
            flex-direction: column;
            /* Stack the links vertically */
            align-items: center;
            /* Centers links in the column */
         }

         .navbar-secondary .nav-item {
            margin: 10px 0;
            /* Adds vertical space between links */
         }
      }



      .carousel-caption {
         position: absolute;
         top: 0;
         bottom: 0;
         left: 0;
         right: 0;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         text-align: center;
         background: rgba(0, 0, 0, 0.5);
         /* Optional: semi-transparent background */
         transition: all 0.8s ease-in-out;
         opacity: 0;
         visibility: hidden;
      }

      /* Make the caption appear when the slide is active */
      .carousel-item.active .carousel-caption {
         opacity: 1;
         visibility: visible;
      }

      /* Caption text styles */
      .carousel-caption h5 {
         font-size: 2rem;
         font-weight: 700;
         animation: slideUp 1s ease-in-out forwards;
         color: #fff;
      }

      .carousel-caption p {
         font-size: 1.25rem;
         animation: fadeInUp 1.2s ease-in-out forwards;
         color: #fff;
      }



      /* Sliding Banner */
      .carousel-item img {
         height: 500px;
         object-fit: cover;
         width: 100%;
      }


      /* General Footer Styles */
      .footer-widget-area {
         background-color: white;
         /* White background */
         color: black;
         padding: 30px 0;
      }

      .footer-columns {
         display: flex;
         justify-content: space-between;
         flex-wrap: wrap;
         border-left: 2px solid red;
         /* Red vertical line */
         border-right: 2px solid red;
         /* Red vertical line */
      }

      .footer-column {
         width: 23%;
         padding: 10px;
         border-right: 2px solid red;
         /* Red vertical line between columns */
      }

      .footer-column:last-child {
         border-right: none;
         /* No right border for the last column */
      }

      .footer-column h4 {
         margin-bottom: 15px;
         font-size: 18px;
      }

      .footer-links {
         list-style: none;
         padding: 0;
      }

      .footer-links li {
         margin-bottom: 10px;
      }

      .footer-links a {
         color: darkblue;
         /* Dark blue color for links */
         text-decoration: none;
         transition: color 0.3s;
      }

      .footer-links a:hover {
         color: #f57d00;
         /* Hover color */
      }

      /* Footer Copyright */
      .footer-copyright {
         background-color: red;
         /* Red background for secondary footer */
         color: white;
         text-align: center;
         padding: 15px 0;
      }

      .social-links {
         margin-top: 10px;
      }

      .social-links a {
         margin: 0 10px;
         color: white;
         text-decoration: none;
         font-size: 16px;
      }

      .social-links a:hover {
         color: #f57d00;
         /* Hover color */
      }

      /* Animation for the carousel caption */
      @keyframes fadeIn {
         0% {
            opacity: 0;
         }

         100% {
            opacity: 1;
         }
      }

      /* Section Styles */
      .section {
         padding: 60px 0;
      }

      .section h2 {
         font-size: 2rem;
         color: #003366;
         margin-bottom: 30px;
         text-align: center;
      }

      .section .section-content {
         margin-bottom: 30px;
      }

      .section .section-content img {
         width: 100%;
         max-height: 300px;
         object-fit: cover;
         border-radius: 8px;
         margin-bottom: 20px;
      }

      .section .section-content p {
         font-size: 16px;
         color: #333;
      }

      /* Two Column Layout for Images and Text */
      .img-text-section {
         background-color: #fff;
         padding: 50px 0;
         border-bottom: 1px solid #ddd;
      }

      .img-text-section .row {
         display: flex;
         justify-content: space-between;
         align-items: center;
      }

      .img-text-section img {
         width: 100%;
         max-height: 350px;
         border-radius: 8px;
         object-fit: cover;
      }

      .img-text-section .text-column {
         padding: 20px;
         flex: 1;
      }

      .img-text-section h3 {
         color: #003366;
         margin-bottom: 15px;
      }

      .img-text-section p {
         font-size: 16px;
         color: #555;
      }

      @media (max-width: 768px) {
         .img-text-section .row {
            flex-direction: column;
         }

         .footer-column {
            width: 48%;
            margin-bottom: 20px;
         }
      }

      /* Container for the testimonials section */
      .user-testimonials {
         background-color: #f9f9f9;
         padding: 50px 0;
         text-align: center;
      }

      .user-testimonials h2 {
         font-size: 2.5rem;
         margin-bottom: 30px;
         color: #333;
      }

      /* Grid for the testimonial cards */
      .testimonial-cards {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
         gap: 20px;
         justify-items: center;
         padding: 0 10px;
      }

      /* Styling each testimonial card */
      .testimonial-card {
         background-color: #fff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         text-align: center;
         transition: transform 0.3s ease, box-shadow 0.3s ease;
         max-width: 300px;
      }

      /* Image in the testimonial card */
      .testimonial-img {
         width: 80px;
         height: 80px;
         border-radius: 50%;
         object-fit: cover;
         margin-bottom: 20px;
         transition: transform 0.3s ease;
      }

      /* Testimonial text */
      .testimonial-text {
         font-size: 1.1rem;
         margin-bottom: 15px;
         color: #555;
         font-style: italic;
      }

      /* User's name */
      .user-name {
         font-size: 1.2rem;
         font-weight: bold;
         margin-bottom: 5px;
         color: #333;
      }

      /* User's role */
      .user-role {
         font-size: 1rem;
         color: #777;
      }

      /* Hover effect for the testimonial card */
      .testimonial-card:hover {
         transform: translateY(-10px);
         box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      }

      /* Hover effect for the image */
      .testimonial-card:hover .testimonial-img {
         transform: scale(1.1);
      }

      /* Hamburger Menu Icon */
      .hamburger {
         display: flex;
         flex-direction: column;
         justify-content: space-between;
         width: 30px;
         height: 25px;
         cursor: pointer;
         position: fixed;
         top: 20px;
         right: 20px;
         z-index: 1001;
      }

      .hamburger div {
         height: 4px;
         background-color: black;
         border-radius: 4px;
      }

      /* The Sliding Menu */
      .sliding-menu {
         height: 0;
         width: 100%;
         position: fixed;
         top: -100%;
         /* Initially hidden above the screen */
         left: 0;
         background-color: #003366;
         /* Blue color for the menu */
         z-index: 1000;
         overflow-x: hidden;
         transition: 0.5s;
         padding-top: 60px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
         /* Adding shadow for depth */
      }

      /* Content inside the sliding menu */
      .menu-content {
         color: white;
         font-family: 'Arial', sans-serif;
         padding: 20px;
      }

      .menu-content h2 {
         font-size: 32px;
         margin-bottom: 20px;
         font-weight: bold;
         letter-spacing: 1px;
      }

      .sliding-menu a {
         display: block;
         color: white;
         padding: 12px 16px;
         text-decoration: none;
         font-size: 18px;
         font-weight: normal;
         transition: 0.3s;
      }

      .sliding-menu a:hover {
         background-color: #002244;
         border-radius: 4px;
         padding-left: 20px;
         /* Slight indentation on hover */
      }

      /* Info section within the menu */
      .info {
         margin-top: 40px;
         padding-left: 15px;
      }

      .info h3 {
         font-size: 24px;
         font-weight: bold;
      }

      .info p {
         font-size: 18px;
         margin-top: 10px;
      }

      /* Responsive design */
      @media screen and (max-width: 768px) {
         .hamburger {
            display: flex;
         }

         .menu-btn {
            display: none;
         }

         .menu-content h2 {
            font-size: 28px;
         }

         .sliding-menu a {
            font-size: 16px;
         }
      }
   </style>
</head>

<body>

   <!-- Primary Navigation Bar -->
   <nav class="navbar navbar-primary navbar-expand-lg">
      <div class="container">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNavbar" aria-controls="primaryNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="primaryNavbar">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="admin/index.php">Admin</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="user/index.php">User Login</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="user/registration.php">User Registration</a>
               </li>
               <!-- Hamburger Menu Icon -->
               <div class="hamburger" id="hamburgerMenu">
                  <div></div>
                  <div></div>
                  <div></div>
               </div>

               <!-- The Sliding Menu -->
               <div id="slidingMenu" class="sliding-menu">
                  <div class="menu-content">
                     <h2>Complaint Management System</h2>
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Support</a></li>
                        <!-- Add more menu items here -->
                     </ul>
                     <div class="info">
                        <h3>Information Section</h3>
                        <p>Here you can display relevant information about your complaint management system...</p>
                     </div>
                  </div>
               </div>


            </ul>
         </div>
      </div>
   </nav>


   <!-- <div class="logo-description">
      <img src="images/mubs.jpg" alt="MUBS Complaint Managemement System" class="logo">
      <p class="description">MUBS Complaint Managemement System</p>
   </div> -->
   <div>
      <a class="navbar-brand" href="#">
         <img src="images/mubs.jpg" alt="MUBS CMS">
         MUBS Complaint Management System
      </a>
   </div>

   <!-- Secondary Navigation Bar -->
   <nav class="navbar navbar-secondary">
      <div class="container">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="#">FAQs</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Support</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Login</a>
            </li>
         </ul>
      </div>
   </nav>

   <!-- <nav class="navbar navbar-primary navbar-expand-lg">
      <div class="container">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNavbar" aria-controls="primaryNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="primaryNavbar">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="admin/index.php">Admin</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="user/index.php">User Login</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="user/registration.php">User Registration</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>


   <! Sliding Banner -->
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="4000">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="images/img-12.png" class="d-block w-100" alt="First Slide">
            <div class="carousel-caption">
               <h5>Welcome to MUBS CMS</h5>
               <p>Streamlined Complaint Management System</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/img-12.png" class="d-block w-100" alt="Second Slide">
            <div class="carousel-caption">
               <h5>Empowering Education</h5>
               <p>Promoting effective communication and resolutions</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/img-12.png" class="d-block w-100" alt="Third Slide">
            <div class="carousel-caption">
               <h5>Your Voice Matters</h5>
               <p>Quick and efficient issue resolution at your fingertips</p>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>

   <!-- Main Content Section -->
   <section class="section img-text-section">
      <div class="container">
         <h2>About MUBS CMS</h2>
         <div class="row">
            <div class="col-md-6 text-column">
               <h3>Effective Communication</h3>
               <p>This platform facilitates easy management of complaints, providing seamless interaction for both users and administrators.</p>
            </div>
            <div class="col-md-6">
               <img src="images/img-12.png" alt="MUBS Image">
            </div>
         </div>
      </div>
   </section>


   <section class="section img-text-section">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <img src="images/img-12.png" alt="MUBS Image">
            </div>

            <div class="col-md-6 text-column">
               <h3>Effective Communication</h3>
               <p>This platform facilitates easy management of complaints, providing seamless interaction for both users and administrators.</p>
            </div>
         </div>
      </div>
   </section>

   <section class="section img-text-section">
      <div class="container">
         <div class="row">
            <div class="col-md-6 text-column">
               <h3>Effective Communication</h3>
               <p>This platform facilitates easy management of complaints, providing seamless interaction for both users and administrators.</p>
            </div>
            <div class="col-md-6">
               <img src="images/img-12.png" alt="MUBS Image">
            </div>
         </div>
      </div>
   </section>

   <!-- what users say -->
   <section class="user-testimonials">
      <h2>What Our Users Say</h2>
      <div class="testimonial-cards">
         <div class="testimonial-card">
            <img src="images/img-12.png" alt="User 1" class="testimonial-img">
            <p class="testimonial-text">"This system has revolutionized how I manage my learning. The interface is intuitive and easy to use. Highly recommend!"</p>
            <h5 class="user-name">John Doe</h5>
            <p class="user-role">Student</p>
         </div>
         <div class="testimonial-card">
            <img src="images/img-12.png" alt="User 2" class="testimonial-img">
            <p class="testimonial-text">"The best learning experience I’ve ever had. The platform is seamless and user-friendly. Great job!"</p>
            <h5 class="user-name">Jane Smith</h5>
            <p class="user-role">Professor</p>
         </div>
         <div class="testimonial-card">
            <img src="images/img-12.png" alt="User 3" class="testimonial-img">
            <p class="testimonial-text">"I love how I can track my progress. This is definitely the future of education!"</p>
            <h5 class="user-name">Michael Brown</h5>
            <p class="user-role">Administrator</p>
         </div>
         <div class="testimonial-card">
            <img src="images/img-12.png" alt="User 3" class="testimonial-img">
            <p class="testimonial-text">"I love how I can track my progress. This is definitely the future of education!"</p>
            <h5 class="user-name">Michael Brown</h5>
            <p class="user-role">Administrator</p>
         </div>
         <div class="testimonial-card">
            <img src="images/img-12.png" alt="User 3" class="testimonial-img">
            <p class="testimonial-text">"I love how I can track my progress. This is definitely the future of education!"</p>
            <h5 class="user-name">Michael Brown</h5>
            <p class="user-role">Administrator</p>
         </div>
         <div class="testimonial-card">
            <img src="images/img-12.png" alt="User 3" class="testimonial-img">
            <p class="testimonial-text">"I love how I can track my progress. This is definitely the future of education!"</p>
            <h5 class="user-name">Michael Brown</h5>
            <p class="user-role">Administrator</p>
         </div>
         <div class="testimonial-card">
            <img src="images/img-12.png" alt="User 3" class="testimonial-img">
            <p class="testimonial-text">"I love how I can track my progress. This is definitely the future of education!"</p>
            <h5 class="user-name">Michael Brown</h5>
            <p class="user-role">Administrator</p>
         </div>
         <div class="testimonial-card">
            <img src="images/img-12.png" alt="User 3" class="testimonial-img">
            <p class="testimonial-text">"I love how I can track my progress. This is definitely the future of education!"</p>
            <h5 class="user-name">Michael Brown</h5>
            <p class="user-role">Administrator</p>
         </div>
      </div>
   </section>





   <!-- Footer -->
   <footer class="footer-widget-area">
      <div class="container">
         <div class="footer-columns">

            <!-- Information About -->
            <div class="footer-column">
               <h4>Information About</h4>
               <ul class="footer-links">
                  <li><a href="https://mubs.ac.ug/about/">Makerere University Business School</a></li>
                  <li><a href="https://mubs.ac.ug/strategic-plan/">Strategic Plan</a></li>
                  <li><a href="https://mubs.ac.ug/research/">MUBS Research</a></li>
                  <li><a href="https://mubs.ac.ug/wp-content/uploads/2023/10/FEES-CHART-2023-24.xls">Tuition & Fees</a></li>
                  <li><a href="https://mubs.ac.ug/sports-at-mubs/">Sport at MUBS</a></li>
                  <li><a href="https://mubs.ac.ug/quality-assurance/">Quality Assurance</a></li>
                  <li><a href="https://mubs.ac.ug/governance-and-management/">Governance</a></li>
                  <li><a href="https://mubs.ac.ug/mubs-libraries/">Libraries</a></li>
                  <li><a href="https://mubs.ac.ug/conferences-and-events-at-mubs/">Conferences at MUBS</a></li>
               </ul>
            </div>

            <!-- Information For -->
            <div class="footer-column">
               <h4>Information For</h4>
               <ul class="footer-links">
                  <li><a href="https://mubs.ac.ug/admissions/undergraduate/">Prospective undergraduates</a></li>
                  <li><a href="https://mubs.ac.ug/admissions/graduate/">Prospective graduate students</a></li>
                  <li><a href="https://mubs.ac.ug/current-mubs-students/">Current MUBS students</a></li>
                  <li><a href="https://mubs.ac.ug/visitors-information/">Visitors & Tourists</a></li>
                  <li><a href="https://alumni.mubs.ac.ug">Alumni</a></li>
                  <li><a href="https://mubs.ac.ug/resource-mobilisation-section/">Resource Mobilisation</a></li>
               </ul>
            </div>

            <!-- Quick Links -->
            <div class="footer-column">
               <h4>Quick Links</h4>
               <ul class="footer-links">
                  <li><a href="https://forms.gle/zoqq8Wo46P2gE6on7">PGD Student Evaluation Form</a></li>
                  <li><a href="http://mubs.ac.ug/contact-us/">Contact Information</a></li>
                  <li><a href="https://mubs.ac.ug/events/">School Calendar</a></li>
                  <li><a href="https://mubs.ac.ug/docs/newsletters/May_2023.pdf">Newsletter</a></li>
                  <li><a href="https://mubs.ac.ug/the-anthem/">MUBS Anthem</a></li>
               </ul>
            </div>

            <!-- Regional Campuses -->
            <div class="footer-column">
               <h4>Regional Campuses</h4>
               <ul class="footer-links">
                  <li><a href="https://mbarara.mubs.ac.ug/">MBARARA CAMPUS</a></li>
                  <li><a href="https://mbale.mubs.ac.ug/">MBALE CAMPUS</a></li>
                  <li><a href="https://jinja.mubs.ac.ug/">JINJA CAMPUS</a></li>
                  <li><a href="https://arua.mubs.ac.ug/">ARUA CAMPUS</a></li>
               </ul>
            </div>

         </div> <!-- footer-columns -->
      </div> <!-- container -->
   </footer>

   <!-- Footer Copyright -->
   <footer class="footer-copyright">
      <div class="container">
         <div class="copyright-content">
            <div class="copyright-notice">
               <div>© <span id="currentYear"></span> Makerere University Business School</div>
            </div>
            <div class="social-links">
               <a href="https://www.facebook.com/mubsofficial" target="_blank">Facebook</a>
               <a href="https://twitter.com/officialmubs" target="_blank">Twitter</a>
               <a href="https://www.youtube.com/channel/UCa7nj2ovNq_EHLyNlwlG99g" target="_blank">YouTube</a>
               <a href="https://www.instagram.com/officialmubs" target="_blank">Instagram</a>
               <a href="https://blog.mubs.ac.ug" target="_blank">Blogger</a>
            </div>
         </div>
      </div>
   </footer>

   <!-- Bootstrap & JQuery -->
   <!-- Link to jQuery -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <!-- Link to your custom JavaScript -->
   <script src="script.js"></script>

   <!-- Your JavaScript -->
   <script>
      $(document).ready(function() {
         // When the carousel slides, remove the animation class and add it back
         $('#carouselExampleCaptions').on('slide.bs.carousel', function(e) {
            // Remove the animation class from all captions
            $('.carousel-caption').removeClass('animate-caption');

            // Add the animation class to the caption of the active item
            $(e.relatedTarget).find('.carousel-caption').addClass('animate-caption');
         });

         // Trigger the animation when the page loads
         $('.carousel-item.active .carousel-caption').addClass('animate-caption');

         // Function to toggle the visibility of more information
         window.showMoreInfo = function(userId) {
            const infoElement = document.getElementById(userId);
            infoElement.classList.toggle('hidden'); // Toggles visibility
         };

         // Initialize AOS for animations
         AOS.init({
            duration: 1000, // animation duration
         });

         // JavaScript to open and close the sliding menu
         const hamburgerMenu = document.getElementById("hamburgerMenu");
         const slidingMenu = document.getElementById("slidingMenu");

         // Function to toggle the sliding menu
         hamburgerMenu.addEventListener("click", function() {
            if (slidingMenu.style.height === "100%") {
               slidingMenu.style.top = "-100%"; // Slide back up
               slidingMenu.style.height = "0"; // Hide it
            } else {
               slidingMenu.style.top = "0"; // Slide down to the top
               slidingMenu.style.height = "100%"; // Full height
            }
         });
      });
   </script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</body>

</html>