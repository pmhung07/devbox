<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Devbox :: Web Developer, Full Stack Developer</title>

    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/assets/admin/css/animate.css" rel="stylesheet">
    <link href="/assets/admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">DEV</h1>
            </div>
            <h3>Welcome to Devbox Administration</h3>
            <p>Learn & Share</p>
            <form class="m-t" role="form" method="POST" action="/admin/auth/login">
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a> 
                {{ csrf_field() }}
            </form>
            <p class="m-t"> <small>Developed By Devbox Team &copy; 2018</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/assets/admin/js/jquery-2.1.1.js"></script>
    <script src="/assets/admin/js/bootstrap.min.js"></script>

</body>

</html>
