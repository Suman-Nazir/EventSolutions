<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="assests/css/fontawesome.css" rel="stylesheet">
    <script src="assests/js/bootstrap.min.js"></script>
    <link href="assests/css/style.css" rel="stylesheet">

    
</head>
<style>
    /* Set the entire page background */
    body {
        background-image: url(assests/images/sumi.webp);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        color: #fff; /* Make text white by default for readability */
    }
    
    /* Make the cards stand out with a semi-transparent background */
    .card {
        background-color: rgba(255, 255, 255, 0.9); /* White with slight transparency */
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add depth with a shadow */
    }
    
    .card-title {
        color: #000; /* Make card titles dark for contrast */
    }
    
    .card-text {
        color: #555; /* Muted text for readability */
    }

    /* Header section styling */
    header {
        background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black header */
        color: #fff;
    }
    </style>
<body>

    <!-- Header Section -->
    <header class="bg-black py-3 text-warning text-center">
        <div class="container">
            <h1 class="display-5 pt-3 text-warning mb-3">Our Services</h1>
            <p class="lead mb-0 text-light">
                <strong>We offer a range of professional event management services to make your special occasions unforgettable.</strong>
            </p>
        </div>
    </header>
    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Event Planning Service -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center pt-5">
                            <h3 class="card-title">Event Planning</h3>
                            <p class="card-text">We offer comprehensive event planning services, ensuring your event runs smoothly from start to finish, with personalized attention to every detail.</p>
                            <a href="event_planning.html" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Read More</b></a>
                        </div>
                    </div>
                </div>
                <!-- On-Site Management Service -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center pt-5">
                            <h3 class="card-title">On-Site Management</h3>
                            <p class="card-text">Our experienced team provides seamless on-site management, ensuring everything is executed according to plan, with no stress for you.</p>
                            <a href="on-site-management.html" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Read More</b></a>
                        </div>
                    </div>
                </div>
                <!-- Design & Décor Service -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center pt-5">
                            <h3 class="card-title">Design & Décor</h3>
                            <p class="card-text">Transform your venue with our creative design & décor services, providing customized themes that reflect style and make event unforgettable.</p>
                            <a href="design-decor.html" class="btn btn-mute btn-outline-warning text-dark mt-3"><b>Read More</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
