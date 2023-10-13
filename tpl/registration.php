<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>ResearchPro - Registration</title>
</head>
<body>
    <nav>
        <img class="logo" src="./assets/images/logo.png" alt="">
    </nav>
    <div class="container">
        <form action="./RegistrationController.php" method="post" class="col-md-6 offset-md-3 mb-4">
        <h1 class="mb-3 text-center">Sign up</h1>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="emailInput" name="email" placeholder="name@example.com" <?php
            if (isset($_POST['email'])){
                echo 'value="' . $_POST['email'] . '"';
            }
            ?>>
            <label for="emailInput">Email address</label>
            <?php
            if (isset($_POST['errors']['email'])){
                echo '<p class="text-danger font-weight-bold">' . $_POST['errors']['email'] . '</p>';
            }
            ?>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="confEmailInput" name="confEmail" placeholder="name@example.com" <?php
            if (isset($_POST['email'])){
                echo 'value="' . $_POST['confEmail'] . '"';
            }
            ?>>
            <label for="confEmailInput">Confirm Email address</label>
            <?php
            if (isset($_POST['errors']['confEmail'])){
                echo '<p class="text-danger font-weight-bold">' . $_POST['errors']['confEmail'] . '</p>';
            }
            ?>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="usernameInput" name="username" placeholder="username" <?php
            if (isset($_POST['username'])){
                echo 'value="' . $_POST['username'] . '"';
            }
            ?>>
            <label for="usernameInput">Username</label>
            <?php
            if (isset($_POST['errors']['username'])){
                echo '<p class="text-danger font-weight-bold">' . $_POST['errors']['username'] . '</p>';
            }
            ?>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password" <?php
            if (isset($_POST['password'])){
                echo 'value="' . $_POST['password'] . '"';
            }
            ?>>
            <label for="passwordInput">Password</label>
            <?php
            if (isset($_POST['errors']['password'])){
                echo '<p class="text-danger font-weight-bold">' . $_POST['errors']['password'] . '</p>';
            }
            ?>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="confPasswordInput" name="confPassword" placeholder="confPasswordInput" <?php
            if (isset($_POST['confPassword'])){
                echo 'value="' . $_POST['confPassword'] . '"';
            }
            ?>>
            <label for="floatingPassword">Confirm  Password</label>
            <?php
            if (isset($_POST['errors']['confPass'])){
                echo '<p class="text-danger font-weight-bold">' . $_POST['errors']['confPass'] . '</p>';
            }
            ?>
        </div>
        <div class="d-grid gap-2 mb-3">
            <button class="btn btn-secondary" type="submit">Register</button>
        </div>
        </form>
        <form action="./RedirectController.php" method="post">
            <input hidden type="text" name="redirect" value="login">
            <button class="btn btn-link">Already have an account?</button>
        </form>
    </div>
    <footer class="row border-top p-2">
        <div class="text-center">Copyright &copy; Makeba Proverbs. All Rights Reserved</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>