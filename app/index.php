<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: #ffffff;
            text-align: center;
        }
        header {
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }
        h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        p {
            margin: 20px 0;
            font-size: 1.2rem;
        }
        footer {
            margin-top: 30px;
            padding: 10px 0;
            background: rgba(0, 0, 0, 0.2);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My PHP Application</h1>
    </header>
    <main>
        <p>This page is served dynamically using PHP within a Docker container.</p>
        <p>Today's date is: <strong><?php echo date("l, F j, Y"); ?></strong></p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Application. All rights reserved.</p>
    </footer>
</body>
</html>
