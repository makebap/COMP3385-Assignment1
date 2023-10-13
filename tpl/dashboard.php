<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>ResearchPro - Dashboard</title>
</head>
<body>
    <nav class="p-2 row d-flex justify-content-between">
        <div class="col-2"><img class="logo" src="./assets/images/logo.png" alt=""></div>
        <div class="col-2 my-auto"><a href="../controller/Logout.php">Log out</a></div>
    </nav>
    <div class="container">
        <div class="row mb-3">
            <div class="col-6">
                <?php
                echo $_SESSION['role'];
                ?>
            : 
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
        <div class="row">
            <?php
                if ($_SESSION['role'] == "Research Study Manager" || $_SESSION['role'] == "Research Group Manager"){
                echo '<div class="mb-3 col-md-6"><div class="border p-4 text-center"><a href="">Create New Study</a></div></div>';
                }
            ?>
            <div class="mb-3 col-md-6"><div class="border p-4 text-center"><a href="">View All Studies</a></div></div>
        </div>
        <div class="row">
            <?php
                if ($_SESSION['role'] == "Research Study Manager" || $_SESSION['role'] == "Research Group Manager"){
                    echo '
                    <div class="mb-3 col-md-6"><div class="border p-4 text-center"><a href="">Delete Previous Study</a></div></div>
                    ';
                }
            ?>
            <?php
                if ($_SESSION['role'] == "Research Group Manager"){
                    echo '
                    <div class="mb-3 col-md-6"><div class="border p-4 text-center">
                        <form action="../controller/RedirectController.php" method="post">
                            <input hidden value="create" name="redirect">
                            <button class="btn btn-link">Create New Researcher</button>
                        </form>
                        </div>
                    </div>
                    ';
                }
            ?>
        </div>
    </div>
    <footer class="row border-top p-2">
        <div class="text-center">Copyright &copy; Makeba Proverbs. All Rights Reserved</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>