<?php

declare(strict_types=1);

require_once './Main.php';

$main = new Main();

$allUsers = $main->getIns()->query('SELECT * FROM users')->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">
                <img src="assets/images/avatar.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top rounded-circle">
                CSEC ASTU
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Seminar division</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h3>List of users</h3>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Telegram</th>
                    <th>Education</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allUsers as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars((string)$user['user_id']) ?></td>
                        <td><?= htmlspecialchars($user['f_name']. " " . $user['l_name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['gender']) ?></td>
                        <td><?= htmlspecialchars($user['phone']) ?></td>
                        <td><?= htmlspecialchars($user['telegram']) ?></td>
                        <td><?= htmlspecialchars($user['education']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>