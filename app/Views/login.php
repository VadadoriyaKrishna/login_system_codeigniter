<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="min-height: 600px;">
            <div class="card">
                <div class="card-content">
                    <div class="card-body shadow">
                        <?php if (isset($_SESSION['success'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                            </div>
                        <?php } ?>
                        <div class="card-title">Login</div>
                        <form  action="home/insert" method="post" >
                            <div class="form-group">
                                <input type="email" placeholder="enter email.." class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="enter password.." class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-secondary shadow-sm" >Login</button>
                                <a href="register">Forgot Password</a>
                                <br><br><input type="checkbox" name="remember me">Remember Me
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>