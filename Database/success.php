<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
</head>
<body>
    <h1>Registration Successful!</h1>
    <p>Your information has been added to our database.</p>
    <a href="Register_Form.html">Back to Home</a>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            text-align: center;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            opacity: 0;
            animation: fadeIn 1s forwards, bounce 1s 1s infinite;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        h1 {
            color: #3498db;
            margin-bottom: 20px;
            font-size: 36px;
        }

        p {
            font-size: 24px;
            color: #555;
            margin-top: 20px;
        }

        a {
            display: inline-block;
            margin-top: 30px;
            padding: 20px 40px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</body>
</html>
