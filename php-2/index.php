<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Index Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #1a237e; /* Navy */
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        text-align: center;
        padding: 30px 50px;
        background-color: #e3f2fd; /* Soft Blue */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    h1 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #1a237e; /* Navy */
    }
    p {
        font-size: 1rem;
        margin-bottom: 30px;
        color: #333;
    }
    .btn {
        display: inline-block;
        text-decoration: none;
        background-color: #1a237e; /* Navy */
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 1rem;
        margin: 10px;
        transition: 0.3s;
    }
    .btn:hover {
        background-color: #3949ab; /* Lighter Navy */
    }
</style>
</head>
<body>
<div class="container">
    <h1>Welcome to PHP Practice</h1>
    <p>Select the section you want to explore:</p>
    <a href="function-conditional.php" class="btn">Function</a>
    <a href="looping.php" class="btn">Looping</a>
</div>
</body>
</html>