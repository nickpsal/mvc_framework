<!doctype html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">
        <title>Cover Template · Bootstrap v5.2</title>
        <link href="<?=ROOT?>/assets/css/cover.css" rel="stylesheet">
        <link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex h-100 text-center text-bg-dark">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
                <div>
                    <h3 class="float-md-start mb-0">Cover</h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
                        <?php if (empty($_SESSION)) : ?>
                            <a class="nav-link fw-bold py-1 px-0" href="login">Login</a>
                            <a class="nav-link fw-bold py-1 px-0" href="signup">Sign Up</a>
                        <?php else : ?>
                            <a class="nav-link fw-bold py-1 px-0" href="profile">Profile</a>
                            <a class="nav-link fw-bold py-1 px-0" href="logout">Log out</a>
                        <?php endif;?>
                    </nav>
                </div>
            </header>
            <main class="px-3">
                <h4>Hi <?=$data['user_username'];?></h4>
                <h1>Cover your page.</h1>
                <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
                </p>
            </main>
            <footer class="mt-auto text-white-50">
                <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
            </footer>
        </div>
    </body>
</html>