<?php
include("connect.php");
include("shared/classes.php");

$islandList = array();

$islandQuery = "SELECT * FROM islandsofpersonality";
$islandResults = executeQuery($islandQuery);

while ($islandRow = mysqli_fetch_assoc($islandResults)) {
    $island = new Island(
        $islandRow['name'],
        $islandRow['shortDescription'],
        $islandRow['image'],
        $islandRow['islandOfPersonalityID']
    );

    array_push($islandList, $island);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | HQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/fonts/font.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 mx-auto" style="font-size: 50px;">Inside Out</span>
        </div>
    </nav>

    <!-- body -->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col">
                <h1 class="title display-4">Welcome to TM Lord's Headquarters!</h1>
                <h3 class="title-desc mt-5">You've arrived at the heart of my mind, where every thought, emotion, and
                    dream
                    is brought to life.</h3>
                <img class="homePic img-fluid animate-up" src="assets/img/homePic.png" alt="homePic">
            </div>
        </div>
    </div>

    <div class="islands container-fluid text-center p-5">
        <div class="row">
            <div class="col">
                <div class="navigate display-5 animate-up">Navigate through my personality islands!</div>
                <div class="row mt-5">
                    <?php
                    foreach ($islandList as $islandItem) {
                        echo $islandItem->createIsland();
                    }
                    ?>
                </div>

                <script src="assets/js/animate-up.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                    crossorigin="anonymous"></script>
</body>

</html>