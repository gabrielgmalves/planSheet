<?php
    function initialContent() {require "../components/indexPageContent.html";}
    function footer() {require "../components/footer.html";}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/js/all.js">
    <script src="../js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/myScripts.js"></script>
    <title>Welcome to PPS</title>
</head>
<body class="container bg-light">
    <div id="mainContent">
        <?php initialContent() ?>
    </div>
</body>
</html>