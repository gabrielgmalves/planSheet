<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/js/all.js">
    <script src="../js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/signup.css">
    <script src="../js/myScripts.js"></script>
    <title>Welcome to PPS</title>
</head>
<body class="text-center">
    <main class="form-signin">
        <form>
            <h1 class="h3 mb-3 fw-normal">Welcome to Private Planning Sheets</h1>
        
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" placeholder="Your name" required>
                <label for="floatingName">Name</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Next</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021-2021</p>
        </form>
        <button type="button" class="btn btn-primary btn-floating" onclick="backHome()">
            <i class="fas fa-chevron-circle-left"></i> Back to Home
        </button>
    </main>
</body>
</html>