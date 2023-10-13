<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>ResearchPro - Create User</title>
</head>
<body class="min-vh-100">
    <nav class="p-2 row d-flex justify-content-between">
        <div class="col-2"><img class="logo" src="./assets/images/logo.png" alt=""></div>
        <div class="col-2 my-auto"><a href="../controller/Logout.php">Log out</a></div>
    </nav>
    <div class="container">
        <div class="row mb-3">
            <div class="col-6">Researcher: 
                <?php
                    echo $_SESSION['username'];
                ?>
            </div>
            <div class="col-6">Email: 
                <?php
                    echo $_SESSION['email'];
                ?>
            </div>
        </div>
        <form action="../controller/CreateUserController.php" method="post" class="col-md-6 offset-md-3 mb-4">
        <h1 class="mb-3 text-center">Create user</h1>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="usernameInput" name="username" placeholder="username">
            <label for="usernameInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailInput" name="email" placeholder="name@example.com">
            <label for="emailInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="passwordInput">
            <label for="passwordInput">Password</label>
        </div>
        <div class="mb-3">
            <label for="roleSelect">Role</label>
            <select id="roleSelect" name="role" class="form-select" aria-label="Role select">
                <option selected value="Research Study Manager">Research Study Manager</option>
                <option value="Researcher">Researcher</option>
            </select>
        </div>
        <div class="d-grid gap-2 mb-3">
            <button class="btn btn-secondary" type="submit">Create user</button>
        </div>
        </form>
    </div>
    <footer class="row border-top p-2">
        <div class="text-center">Copyright &copy; Makeba Proverbs. All Rights Reserved</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>