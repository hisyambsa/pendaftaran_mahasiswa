<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@hisyambsa">
    <meta name="author" content="@hisyambsa">

    <title>Pemuda Rabithah APPS</title>


    <!-- Custom styles for this template -->
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<div class="container">
    <div class="text-center">

        <form class="form-signin" action="<?php echo base_url('login/auth') ?>" method="post">
            <img class="mb-4" src="http://pemudarabithah.org/wp-content/uploads/2020/01/New-Logo-Pemuda-RA-2015-80x80.png" alt="logo" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1>
            <label for="username" class="sr-only">USERNAME</label>
            <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Masukan Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input name="password" type="password" id="password" class="form-control" placeholder="Masukan Password" required>
            <button class="btn btn-lg btn-blue btn-block" type="submit">Sign in</button>

        </form>
        <label>
            <a href="forgot.php"><button class="btn btn-xs btn-primary btn-rounded">Lupa Password</button></a>
        </label>
        <p class="mt-3 text-muted">&copy; 2011 - <?php echo date('Y') ?> </p>
    </div>
    </body>

</html>