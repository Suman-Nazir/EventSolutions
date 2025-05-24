<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <script src="assests/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: url(assests/images/sumi.webp) no-repeat center center fixed;
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
            <h2 class="text-center mb-4">Login</h2>
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-warning w-100">Login</button>
                <div class="mt-3 text-center">
                    <p>Don't have an account? <a href="signup.html">Signup here</a></p>
                </div>
                <div id="message" class="text-center mt-3"></div>
            </form>
        </div>
    </div>

    <script>
        // Validation function for the login form
        function validateLogin() {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const messageDiv = document.getElementById('message');

            // Clear previous messages
            messageDiv.innerHTML = "";
            messageDiv.style.color = "red"; // Default color for error messages

            // Check if the Email field is empty or invalid
            if (email === "") {
                messageDiv.innerHTML = "Email Address is required.";
                return false;
            } else {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    messageDiv.innerHTML = "Please enter a valid Email Address.";
                    return false;
                }
            }

            // Check if the Password field is empty
            if (password === "") {
                messageDiv.innerHTML = "Password is required.";
                return false;
            }

            // Display success message
            messageDiv.style.color = "green"; // Change color for success message
            messageDiv.innerHTML = "Login successful!";
            return true;
        }

        // Attach the validation function to the form's submit event
        const loginForm = document.querySelector('form');
        loginForm.addEventListener('submit', function (event) {
            // Prevent form submission if validation fails
            if (!validateLogin()) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
