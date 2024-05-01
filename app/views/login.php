<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= wan ?>/css/styles.css">
    <link rel="shortcut icon" href="https://lms.bulacanpolytechniccollege.com/pluginfile.php/1/theme_moove/favicon/1707749313/bpclogo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>BPC Scheduling: Log in to the site</title>
</head>

<body>

    <div class="container1" id="container1">

        <div class="form-container1 sign-in-container">

            <form action="" method="POST">
                <h1>Log In</h1>
                <br>
                <?php if (!empty($errors)) : ?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php foreach ($errors as $error) : ?>
                            <?= $error . "<br>" ?>
                        <?php endforeach; ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php endif; ?>

                <p class="sp1">Login to your account</p>
                <input type="text" name="email" value="<?= get_var('email') ?>" placeholder="Email / Student ID" >
                <br>
                <input type="password" name="password" value="<?= get_var('password') ?>" placeholder="Password" >
                <a href="#">Forgot your password?</a>
                <button type="submit" class="btn btn-success btn-sm">Login</button>
            </form>

        </div>

        <div class="overlay-container">

            <div class="overlay">
                <div class="overlay-panel overlay-left">
                </div>

                <div class="overlay-panel overlay-right">
                    <img class="logo" src="https://lms.bulacanpolytechniccollege.com/pluginfile.php/1/theme_moove/favicon/1707749313/bpclogo.ico" alt="bpc logo">
                    <h1>BPC <span>eSched</span></h1>
                    <p>Home of the Brave, the Beautiful, and the Blessed</p>

                </div>

            </div>

        </div>

    </div>
    <script src="../../assets/js/index.js"></script>

    <?php include "partials/footer.php" ?>