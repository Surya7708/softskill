<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Century Gothic, sans-serif;
            background-image: url("soft.jpeg"); /* Optional: Replace with your image */
            background-size:100vw 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            color: black;
            text-align: center;
        }
        h1 {
            font-size: 50px;
            margin-bottom: 50px;
        }
        .enter-btn {
            background-color: orange;
            color: white;
            font-size: 20px;
            padding: 15px 30px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .enter-btn:hover {
            background-color: darkorange;
        }
    </style>
</head>
<body>
    <div>
        <h1>Welcome to Soft Skill Development</h1>
        <p style="font-size: 18px;">Please click the button below to continue to the login page</p>
        <a href="index.php"><button class="enter-btn">Enter</button></a>
    </div>
</body>
</html>
