<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.png">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px;
            margin: auto;
        }

        .login-container {
            background: white;
            padding: 40px; /* Increased padding for a more spacious layout */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
            transition: box-shadow 0.3s;
        }

        .login-container:hover {
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.2);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px; /* Increased padding for input fields */
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px; /* Increased padding for buttons */
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer-message {
            margin-top: 20px;
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            font-size: 16px;
            color: #333;
            width: 100%;
        }

        .footer-message a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .footer-message a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="footer-message">
            You've either stumbled upon this page by accident, discovered it through cleverness, or read my code on
            GitHub😜. Please return to the previous page, as you are not authorized to access this content.
            <a href="/">Go back</a>
        </div>
        <div class="login-container">
            <h2>Login</h2>
            @if (session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif
            <form action="{{ route('login_action') }}" method="POST">
                @csrf
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit">Login</button>
            </form>
        </div>

    
    </div>
</body>

</html>
