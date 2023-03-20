<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITJEN WIL II | HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url("img/bg.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
</style>

<body>


    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logokemenag.png" alt="Logo" width="35" height="32" class="align-self-center">
                ITJEN WIL II
            </a>
        </div>
    </nav>

    <h1></h1>
    <h1></h1>
    <h1></h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <h1 class="h3 mb-3 fw-normal text-center">Please LOGIN</h1>

                <form action="<?php echo e(route('postlogin')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">

                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">

                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\xamp\htdocs\multi-loginv2\resources\views/login/index.blade.php ENDPATH**/ ?>