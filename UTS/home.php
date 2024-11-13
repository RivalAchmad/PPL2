<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage</title>
    <style>
        body {
            padding: 0;
            font-family: Arial, sans-serif;
            margin: 0;
            background-size: cover;
            background: #7FFFD4;
        }

        .login-container {
            display: flex;
            height: 100vh;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        input {
            width: 170px;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 170px;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .sections {
            display: flex;
            flex-direction: column;
            margin: 20px;
            color: #333;
        }

        .section1, .section3 {
            padding: 10px;
            background: #f0f0f0;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .section2 {
            font-weight: bold;
            color: #333;
        }

        nav a {
            color: red;
            text-decoration: none;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            font-size: 15px;
            font-weight: bold;
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <?php
            session_start();
        ?>
        <form action="login.php" method="post">
            <h2 style="color: #333; text-align: center;">Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <div class="sections">
            <h1 style="color: #333; text-align: center;">Selamat Datang</h1>

            <div class="section1">
                The <span class="section2">margin-left</span> style for <span class="section2">sections</span> makes sure there is room for the <span class="section2">nav</span>. Otherwise, the absolute and static elements would overlap.
            </div>

            <div class="section3">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi
                    lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget,
                    auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante in ligula, facilisis sed ornare eu,
                    lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi,
                    sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae
                    dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh
                    tempor porta. Eras ac leo purus. Mauris quis diam velit.
                </p>
            </div>

            <div class="section1">
                Notice what happens when you resize your browser. It works nicely!
            </div>
        </div>
    </div>
    <footer>
        If you use a fixed header or footer, make sure there is room for it! I put a margin-bottom on the body.
    </footer>
</body>
</html>
