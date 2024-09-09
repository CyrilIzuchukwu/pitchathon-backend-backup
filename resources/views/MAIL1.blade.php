<!DOCTYPE html>
<html>

<head>
    <title>{{ $data['title'] }}</title>
    <style>
        /* Customize the styles here */
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h4 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        .message {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
            text-align: justify;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif;">

    <div class="container">
        <h4>{{ $data['title'] }}</h4>
        <p class="message">{{ $data['message'] }}</p>
        <hr style="border: 1px solid #ccc;">

        <p class="footer" style="margin-top: 20px;">Kind regards,</p>
        <p class="footer">GIZ/DTC Nigeria</p>
    </div>

</body>

</html>