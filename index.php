<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();
    // unset($_SESSION['dangky']);
    include "admincp/config/config.php";
    include "pages/header.php";
    include "pages/main.php";
    include "pages/footer.php";
    ?>
</body>
</html>