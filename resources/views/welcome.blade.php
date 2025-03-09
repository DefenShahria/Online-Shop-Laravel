<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Boutique - Pakistani Dresses</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: #f8f8f8;
        }
        .header {
            width: 100%;
            height: 100vh;
            background: url('{{ asset('assets/image1.jpeg') }}') no-repeat center center/cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
            position: relative;
        }
        .header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .content {
            position: relative;
            z-index: 1;
        }
        h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .btn {
            padding: 12px 25px;
            background-color: #ff4081;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 25px;
            transition: 0.3s ease-in-out;
        }
        .btn:hover {
            background-color: #d81b60;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="content">
            <h1>Welcome to Elegance Boutique</h1>
            <p>Discover the latest Pakistani fashion trends. Shop stylish dresses now!</p>
            <a href="/Home" class="btn">Shop Now</a>
        </div>
    </div>

</body>
</html>
