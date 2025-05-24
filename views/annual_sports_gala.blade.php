<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Annual Gala Event</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
<!-- Add Bootstrap CSS and JavaScript -->
    <script src="assests/js/bootstrap.bundle.min.js"></script>
     

</head>
<style> 
       
    body {
        background-image: url('assests/images/sumi.webp');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        font-family:   'Montserrat', cursive;
        font-family: 'Patua One';
    }
    .btn-buy {
background-color: #ffffff;
color: #0a0707;
border: 1px solid #ffc107;
border-radius: 20px;
padding: 0.5rem 2rem;
transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-buy:hover {
background-color: #ffc107;
color: rgb(18, 18, 18);
}

header {
background-color: black; /* Ensures the header background is black */
color: #ffc107; /* Text color */
height: 40vh; /* Header height */
display: flex;
align-items: center;
justify-content: center;
text-align: center;
}


    header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    header p {
        color: #fff;
        font-size: 1.25rem;
    }

    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .review-card {
background-color: rgb(255, 255, 255); /* Semi-transparent background for each card */
border-radius: 10px;
padding: 20px;
color: white;
text-align: center;
border: none;
}

.review-card .card-body {
padding: 20px;
border-radius: 10px;
}

.review-card p {
margin-bottom: 10px;
font-size: 1rem;
color: rgba(0, 0, 0, 0.7)
}
</style>
<body>
    <header class="row-lg-6 align-items-center text-center">
        <div>
            <h1 class="text-warning"><br>Your Corporate Gala, Celebrating Success</h1>
            <p class="lead text-white">Join us for an unforgettable evening of celebration, networking, and elegance at our Annual Gala.</p>
        </p>
        </div>
    </header>
 <!-- About Section -->
 <section >
    <div class="container py-5 mt-3">
        <div class="row align-items-center">
            <div class="col-lg-6">
                 <img src="assests/images/gala 1.jpeg" class="img-fluid rounded" alt="Product Launch"  style="max-height: 400px; object-fit: cover; width: 100%;">
            </div>
            <div class="col-lg-6 bg-black lead text-white p-4">
                <h2 class="text-warning ">About the GalaEvent</h2><br>
                <p >Our Corporate Annual Gala brings together professionals from various industries to celebrate accomplishments, network, and foster new opportunities. The event features luxurious decor, fine dining, and entertainment tailored to create lasting memories. </p>
           <br> </div>
        </div>
    </div>
    <!-- Services Section -->
    <section class="py-5 bg-black">
        <div class="container">
            <h2 class="text-center text-warning mb-4">Our Event Management Services</h2>
            <div class="row g-4">
                <div class="col-md-4 ">
                    <div class="card">
                        <img src="assests/images/gala 2.jpg" class="card-img-top" alt="Video & Camera Service">
                        <div class="card-body text-center">
                            <h5 class="text-warning">Full Video & Camera Service</h5>
                            <p class="text-muted">Capture every magical moment with our professional video and photo services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests/images/gala 3.jpeg" class="card-img-top" alt="Event Decoration">
                        <div class="card-body text-center">
                            <h5 class="text-warning">Event Decorations</h5>
                            <p class="text-muted">We provide complete venue decor to match your theme and elevate the event.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assests/images/gala 4.jpeg" class="card-img-top" alt="Venue Selection">
                        <div class="card-body text-center">
                            <h5 class="text-warning">Venue Selection/h5>
                            <p class="text-muted">Let us help you select the perfect venue for an unforgettable event.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="text-center py-5 bg-black mt-5">
        <h2 class="mb-4 text-warning">Event Highlights</h2> <!-- Added bottom margin -->
        <p class="mb-5 lead text-white"> <!-- Added bottom margin -->
            Explore a curated collection of unforgettable moments.
            Each <br>image captures the magic and beauty of our meticulously planned events.
        </p>
        <div class="container">
            <div class="row justify-content-center g-4"> <!-- g-4 adds space between cards -->
                <!-- Gallery Cards - Add as many as you want -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="assests/images/gala 5.jpeg" class="card-img-top" alt="Gallery Image 1">
                        <div class="card-body">
                            <p>Stunning gala setup</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="assests/images/gala 8.jpeg" class="card-img-top" alt="Gallery Image 2">
                        <div class="card-body">
                            <p >Elegantly decorated tables</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="assests/images/gala 7.jpeg" class="card-img-top" alt="Gallery Image 3">
                        <div class="card-body">
                            <p >Exquisite arrangements</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="assests/images/gala 6.jpeg" class="card-img-top" alt="Gallery Image 4">
                        <div class="card-body">
                            <p >Glamorous menu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Membership Plan Section -->
    <div class="container bg-black mt-5 pt-4">
        <h2 class="plan-title text-center text-warning">Event Packages</h2>
        <div class="row justify-content-center g-5">
            <div class="col-md-3 pb-5">
                <div class="card text-center">
                    <div class="card-header bg-warning">Basic</div>
                    <div class="card-body">
                        <p class="price fs-1">$199.99</p>
                        <p>Per Event</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Venue Selection</li>
                            <li>✔️ Event Setup</li>
                            <li>❌ Full Assistance</li>
                            <li>❌ Premium Entertainment</li>
                        </ul>
                        <button class="btn btn-mute btn-buy btn-outline-warning text-dark mt-auto mt-3" data-bs-toggle="modal" data-bs-target="#checkoutModal"><b>Buy now</b></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-warning">Standard</div>
                    <div class="card-body">
                        <p class="price fs-1">$599.99</p>
                        <p>Per Event</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Venue Selection</li>
                            <li>✔️ Event Setup</li>
                            <li>✔️ Full Assistance</li>
                            <li>❌ Premium Entertainment</li>
                        </ul>
                        <button class="btn btn-mute btn-buy btn-outline-warning text-dark mt-auto mt-3" data-bs-toggle="modal" data-bs-target="#checkoutModal"><b>Buy now</b></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-warning">Premium</div>
                    <div class="card-body">
                        <p class="price fs-1">$999.99</p>
                        <p>Per Event</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Venue Selection</li>
                            <li>✔️ Event Setup</li>
                            <li>✔️ Full Assistance</li>
                            <li>✔️ Premium Entertainment</li>
                        </ul>
                        <button class="btn btn-mute btn-buy btn-outline-warning text-dark mt-auto mt-3" data-bs-toggle="modal" data-bs-target="#checkoutModal"><b>Buy now</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Modal -->
 <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModalLabel">Shipping Options</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Shipping Form -->
                <form id="shippingForm">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" id="fullName" class="form-control" placeholder="Ex: John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" id="phone" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" class="form-control" placeholder="Address" required>
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Province</label>
                        <select id="province" class="form-select" required>
                            <option value="">Select Province</option>
                            <option>Balochistan</option>
                            <option>Khyber Pakhtunkhwa</option>
                            <option>Sindh</option>
                            <option>Punjab</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" id="city" class="form-control" placeholder="City" required>
                    </div>
                    <div class="mb-3">
                        <label for="zipCode" class="form-label">ZIP Code</label>
                        <input type="text" id="zipCode" class="form-control" placeholder="Ex: 34566" required>
                    </div>
  
                    <!-- Error message -->
                    <div id="errorMessage" class="alert alert-danger d-none" role="alert">
                        You must be logged in to complete the purchase.
                    </div>
  
                    <!-- Thank you message -->
                    <div id="thankYouMessage" class="alert alert-success d-none" role="alert">
                        Thank you for choosing us! Your shipping details have been submitted successfully.
                    </div>
  
                    <!-- Action Button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger">Complete Your Purchase</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <script>
    // Simulate checking login status using localStorage (replace with your own authentication logic)
    function isUserLoggedIn() {
        return localStorage.getItem('isLoggedIn') === 'true'; // Checking login status
    }
  
    // Save the current page URL before redirecting to the login page
    function saveRedirectPage() {
        localStorage.setItem('redirectPage', window.location.href); // Save the current page URL
    }
  
    // Redirect the user to the saved page after login
    function redirectToSavedPage() {
        const redirectPage = localStorage.getItem('redirectPage');
        if (redirectPage) {
            window.location.href = redirectPage; // Redirect to the saved page
        } else {
            window.location.href = 'home.html'; // Default to homepage if no saved page
        }
    }
  
    document.getElementById('shippingForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        
        // Check if the user is logged in
        if (!isUserLoggedIn()) {
            // If not logged in, show error message and redirect to login
            document.getElementById('errorMessage').classList.remove('d-none');
            document.getElementById('thankYouMessage').classList.add('d-none');
            saveRedirectPage(); // Save the current page URL
            alert('You must log in before completing your purchase.');
            window.location.href = 'login.html'; // Redirect to login page
            return;
        }
  
        // Get form values
        const fullName = document.getElementById('fullName').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;
        const province = document.getElementById('province').value;
        const city = document.getElementById('city').value;
        const zipCode = document.getElementById('zipCode').value;
  
        // Validate that all fields are filled
        if (fullName && phone && address && province && city && zipCode) {
            // Show success message
            document.getElementById('thankYouMessage').classList.remove('d-none');
            document.getElementById('errorMessage').classList.add('d-none');
        } else {
            // Show error message for missing fields
            document.getElementById('errorMessage').classList.remove('d-none');
            document.getElementById('thankYouMessage').classList.add('d-none');
        }
    });
  
    // Check if the user is logged in when the page loads and redirect them if necessary
    if (isUserLoggedIn()) {
        // If the user is logged in, show the thank you message
        document.getElementById('thankYouMessage').classList.remove('d-none');
    }
  </script>
<!-- Reviews Section -->
<section >
    <div class="container bg-black py-5 mt-5">
        <h2 class="text-center mb-4 text-warning">Customer Reviews</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="review-card">
                    <p class="text-warning"><strong>John Doe</strong></p>
                    <p>"The event was beautifully organized and exceeded my expectations!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card">
                    <p class="text-warning"><strong>Jane Smith</strong></p>
                    <p>"Amazing service! My wedding was a dream come true."</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card">
                    <p class="text-warning"><strong>Michael Brown</strong></p>
                    <p>"The team was professional and made everything stress-free."</p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>



