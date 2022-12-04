<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">
        <title>Signin Template · Bootstrap v5.2</title>
        <link href="<?= ROOT ?>/assets/css/signin.css" rel="stylesheet">
        <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="">
                <?php if (!empty($data['errors'])) : ?>
                    <div class="alert alert-danger">
                        <?php echo implode("</br>", $data['errors']); ?>
                    </div>
                <?php endif ;?>
                <img class="mb-4" src="<?= ROOT ?>/assets/images/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please Log in</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" name="user_username" id="floatingInput" placeholder="Username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="user_password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Log in</button>
                <a href="<?=ROOT?>">Home</a>
                <a href="<?=ROOT?>/signup">Sign Up</a>
                <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
            </form>
        </main>
    </body>
</html>