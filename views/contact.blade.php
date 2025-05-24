<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assests/css/contact.css">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/all.css">
</head>
<style>
    #alert-success, #alert-error {
    position: fixed; /* Fix the alert position on the page */
    top: 100px; /* Adjust the space below the navbar */
    left: 50%;
    transform: translateX(-50%); /* Center the alert horizontally */
    z-index: 1050; /* Ensure the alert is on top of other content */
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    display: none; /* Initially hidden */
}

#alert-success {
    background-color: #28a745; /* Green background for success */
    color: white;
}

#alert-error {
    background-color: #dc3545; /* Red background for error */
    color: white;
}

body {
            background-image: url(assests/images/sumi.webp);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Keeps the image fixed while scrolling */
            background-position: center;
            color: white; /* Adjust text color for readability */
        }

</style>
<body>
   <!-- Content Section -->
    <div id="alert-success" class="alert-success" style="display: none;">
        <span>Successfully submitted form!</span>
    </div>
    <div id="alert-error" class="alert-error" style="display: none;">
        <span>Something went wrong! Please try again later.</span>
    </div>
    <!-- Contact Section -->
    <div class="contact-section mt-5">
        <div class="contact-info">
            <div> Address, City, Country</div>
            <div>eventsolution@gmail.com</div>
            <div> +92 0004447891</div>
            <div> Mon - Sat 8:00 AM to 6:00 PM</div>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form id="contactForm" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">
            </form>
        </div>
    </div>
    
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const isSuccess = true;

            if (isSuccess) {
                document.getElementById("alert-success").style.display = "block";
                document.getElementById("alert-error").style.display = "none";
                document.getElementById("contactForm").reset();
            } else {
                document.getElementById("alert-success").style.display = "none";
                document.getElementById("alert-error").style.display = "block";
            }

            setTimeout(() => {
                document.getElementById("alert-success").style.display = "none";
                document.getElementById("alert-error").style.display = "none";
            }, 3000);
        });
    </script>
</body>
</html>
