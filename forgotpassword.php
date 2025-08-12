<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f2ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .forgot-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            width: 400px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #1a73e8;
            outline: none;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #1a73e8;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #1557b0;
        }

        .back-to-login {
            text-align: center;
            margin-top: 20px;
        }

        .back-to-login a {
            color: #1a73e8;
            text-decoration: none;
            font-size: 14px;
        }

        .back-to-login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="forgot-container">
        <div class="header">
            <h2>Forgot Password?</h2>
            <p>Enter your email address and we'll send you instructions to reset your password.</p>
        </div>

        <form action="reset_password.php" method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email address" required>
            </div>
            <button type="submit" class="submit-btn">Send Reset Link</button>
        </form>

        <div class="back-to-login">
            <a href="login.html">&larr; Back to Login</a>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Here you would typically:
            // 1. Check if email exists in database
            // 2. Generate reset token
            // 3. Save token in database with expiration
            // 4. Send email with reset link
            
            echo "<script>alert('If the email exists, password reset instructions will be sent.');</script>";
        } else {
            echo "<script>alert('Please enter a valid email address.');</script>";
        }
    }
    ?>
</body>
</html>