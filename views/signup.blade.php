<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <script src="assests/js/bootstrap.bundle.min.js"></script>
    <script src="assests/js/script.js"></script>
    <style>
        body {
            background: url('assests/images/signup\ image.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="max-width: 400px; width: 100%;">
            <h2 class="text-center mb-4">Signup</h2>
            <form id="signupForm" action="#" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Create a password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password" required>
                </div>
                <button type="submit" class="btn btn-warning w-100">Signup</button>
                <div class="mt-3 text-center">
                    <p>Already have an account? <a href="login.html">Login here</a></p>
                </div>
                <div id="message" class="text-center mt-3"></div>
            </form>
        </div>
    </div>
    <script>
        // Function to display messages dynamically
        function showMessage(message, isSuccess) {
            const messageDiv = document.getElementById('message');
            messageDiv.textContent = message;
            messageDiv.style.color = isSuccess ? 'green' : 'red'; // Green for success, red for errors
            messageDiv.style.fontWeight = 'bold';
        }

        // Signup form validation
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const nameInput = document.getElementById('name').value.trim();
            const emailInput = document.getElementById('email').value.trim();
            const passwordInput = document.getElementById('password').value.trim();
            const confirmPasswordInput = document.getElementById('confirm-password').value.trim();

            // Regular expressions for validation
            const nameRegex = /^[A-Za-z\s]{2,}$/; // Only letters and spaces, at least 2 characters
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Validates a standard email format
            const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z0-9@]{8,}$/; // At least 8 characters, 1 letter, 1 number, and allows '@'

            let isValid = true;

            // Validate full name
            if (!nameRegex.test(nameInput)) {
                showMessage('Full name must contain at least 2 characters with only letters and spaces.', false);
                isValid = false;
            }

            // Validate email
            if (!emailRegex.test(emailInput)) {
                showMessage('Invalid email address.', false);
                isValid = false;
            }

            // Validate password
            if (!passwordRegex.test(passwordInput)) {
                showMessage('Password must be at least 8 characters long with both letters and numbers.', false);
                isValid = false;
            }

            // Validate confirm password
            if (passwordInput !== confirmPasswordInput) {
                showMessage('Passwords do not match.', false);
                isValid = false;
            }

            // If all validations pass
            if (isValid) {
                showMessage('Signup successful!', true);
                // Redirect to login page after 2 seconds (adjust as needed)
                setTimeout(function() {
                    window.location.href = "login.html"; 
                }, 1000); 
            }
        });
    </script>
</body>
</html>