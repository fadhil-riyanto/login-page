<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - Dev By Fadhil Riyanto</title>

    <!-- masukkan data dan javascript -->
    <script src="assets/vue.js"></script>
    <script src="assets/jquery.js"></script>
    <script src="assets/pooper.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets\custom-styling.css">

</head>

<body class='text-center'>
    <form class='form-signin' action="">
        <img class="mb-4" src="assets\fadhil-circle.png" width="72" height="72" alt="image fadhil gambar" srcset="">
        <h1 class='h3 mb-3 font-weight-normal'>Please Sign in</h1>
        <label for="inputEmail" class="sr-only">Email adress</label>
        <input type="email" class='form-control' placeholder="Email Adress" required autofocus id='inputEmail'
            name="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2020 - Fadhil Riyanto</p>
    </form>
</body>

</html>