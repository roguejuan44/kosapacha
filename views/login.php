<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/css/small.css">
    <link rel="stylesheet" href="/css/large.css">
    <link rel="stylesheet" href="/css/login.css">

    <title> <?php echo $_SESSION['title'] ?></title>
</head>
<body>

    <header>
        <span class="material-icons" onclick="showhide()">menu</span>
        <p>KOSA<b>PACHA</b></p>
        <span class="material-icons">shopping_bag</span>
    </header>

    <div class="sidebar hide">
            <?php echo $_SESSION['navbar']; ?>
    </div>

    <main>
        <div class="main-content">
        <hr>

            <h1>KOSAPACHA GROUP LOGIN</h1>
            <?php if (isset($_SESSION['message'])) {echo $_SESSION['message'];} ?> 

            <!--AWS: <form action="/accounts/" method="post"> -->
            <!--Localhost: <form action="/kosapacha/accounts/" method="post"> -->

            <form action="/accounts/" method="post">
                <label>Username</label><br>
                <input required type="text" name="username" <?php if(isset($username)){echo "value='$username'";}  ?> ><br>
                <label>Password</label><br>
                <input required type="password" name="password"><br>
                <button type="submit">Sign In</button>
                <input type="hidden" name="action" value="Login">
            </form>
        </div>


    </main>


    <footer>
        <hr>
        <p>KOSA<b>PACHA</b></p>
        <div class="foot-row-2">
            <a class="foot-item" href="#">Legal</a>
            <a class="foot-item" href="#">About Us</a>

            <span class="foot-item">&copy; 2020</span>
        </div>
    </footer>




<script src="script.js"></script>

</body>
</html>
