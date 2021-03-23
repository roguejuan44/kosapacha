<?php
//redirect if not logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE) {
    header('Location: /kosapacha/employee');
}
?><!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--AWS href="/css/small.css"-->
    <!--Localhost: href="/kosapacha/css/small.css" -->
    <link rel="stylesheet" href="/kosapacha/css/small.css">
    <link rel="stylesheet" href="/kosapacha/css/large.css">
    <link rel="stylesheet" href="/kosapacha/css/login.css">

    <title> <?php echo $_SESSION['title']; ?></title>
</head>
<body>

    <header>
        <?php require '../snippets/header.php'; ?>
    </header>


    <main>
        <div class="main-content">
        <hr>

            <h1>KOSAPACHA GROUP LOGIN</h1>
            <?php if (isset($_SESSION['message'])) {echo '<p>' .$_SESSION['message'] . '</p>';} ?> 

            <!--AWS: <form action="/accounts/" method="post"> -->
            <!--Localhost: <form action="/kosapacha/accounts/" method="post"> -->

            <form action="/kosapacha/accounts/" method="post">
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
    <?php if ($_SESSION['lang'] == 'es') {require '../snippets/es/footer-es.php';}
            else {require '../snippets/footer.php';} ?>
        </div>
    </footer>




<script src="script.js"></script>

</body>
</html>
