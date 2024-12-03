<!DOCTYPE html>
<html lang="en">

<style>
    .navbar {
        font-family: 'Inside Out4', sans-serif;
    }
</style>

<head>
    <title>Welcome!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/font.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 mx-auto" style="font-size: 30px;">Inside Out</span>
        </div>
    </nav>

    <!-- Header -->
    <header class="headerPic container-fluid text-center"
        style="background: url('assets/img/header picture.png') no-repeat center center/cover; ">
        <div class="row">
            <div class="col">
                <h1 class="title display-3">Welcome to TM Lord's Headquarters!</h1>
                <h3 class="title-desc">Step into the control center of my mind, where emotions, memories, and dreams
                    come alive. </h3>
                <div class="overlay-content d-flex flex-column align-items-center justify-content-end animate-up">
                    <h1 class="title-desc2 mt-5">Explore My Personality Islands</h1>
                    <h3 class="title-desc3">Discover the core aspects of what makes me, me. <br>Ready to embark on this
                        journey?</h3>
                    <form action="home.php" method="get">
                    <button class="w3-button w3-padding-large w3-large mt-1 rounded-5">Let's Go!</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <script src="assets/js/function.js"></script>
    <script src="assets/js/animate-up.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

<?php include("shared/footer.php") ?>


</html>