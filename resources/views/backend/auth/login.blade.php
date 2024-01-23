<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin: 10px 0 5px;
        color: #555;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: #ff0000;
        margin-top: 5px;
    }
    </style>
</head>

<body>

    <form id="registrationForm">
        <h2>Registration Form</h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <input type="submit" value="Register">
        <div class="error-message" id="errorMessage"></div>
    </form>

    <script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        var errorMessage = document.getElementById('errorMessage');
        errorMessage.innerHTML = '';

        if (password !== confirmPassword) {
            errorMessage.innerHTML = 'Passwords do not match.';
            return;
        }

        // Perform registration logic here (send data to server, etc.)
        // For demonstration purposes, just alert the registration details
        alert('Registration Successful!\n\nUsername: ' + username + '\nEmail: ' + email);
    });
    </script>

</body>

</html>