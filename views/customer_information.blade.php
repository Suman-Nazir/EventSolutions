
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <script src="assests/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <section class="py-5  class="vh-100 d-flex align-items-center justify-content-center
    style="background-image: url('https://images.pexels.com/photos/8245194/pexels-photo-8245194.jpeg?auto=compress&cs=tinysrgb&w=600'); background-size: cover; background-position: center;">
        
        <div class="container">
            <h2 class="text-center text-warning mb-4">Customer Information</h2>
            <form action="submit.php" method="POST"> <!-- Change action to your server-side processing page -->
                <div class="row">
                    <!-- Full Name -->
                    <div class="col-md-6 mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>
                    
                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="row">
                    <!-- Phone Number -->
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    
                    <!-- Address -->
                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                    </div>
                </div>
                
                <div class="row">
                    <!-- City -->
                    <div class="col-md-4 mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                    </div>

                    <!-- State -->
                    <div class="col-md-4 mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                    </div>

                    <!-- Zip Code -->
                    <div class="col-md-4 mb-3">
                        <label for="zip" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code" required>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                        <option value="" disabled selected>Select a payment method</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="PayPal">PayPal</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-warning btn-lg">Submit</button>
                    
                </div>
                
            </form>
        </div>
    </section>
    <footer class="bg-dark text-white py-3 text-center">
        <div class="container">
            <p>&copy; 2024 Event Solutions | All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
