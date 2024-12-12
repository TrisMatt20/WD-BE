<?php
include("connect.php");
include("shared/classes.php");

$islandDescripList = array();

// Query for Island Name
$islandQuery = "SELECT * FROM islandsofpersonality";
$islandResults = executeQuery($islandQuery);

while ($islandRow = mysqli_fetch_assoc($islandResults)) {
    $island = new Island(
        $islandRow['name'],
        $islandRow['longDescription'],
        $islandRow['image'],
        $islandRow['islandOfPersonalityID']
    );

    array_push($islandDescripList, $island);
}

$islandContentList = array();

// Query for Content
$islandContentQuery = "SELECT * FROM islandcontents";
$islandContentResults = executeQuery($islandContentQuery);

while ($islandContentRow = mysqli_fetch_assoc($islandContentResults)) {
    $islandContent = new IslandContent(
        $islandContentRow['islandContentID'],
        $islandContentRow['islandOfPersonalityID'],
        $islandContentRow['content']
    );

    array_push($islandContentList, $islandContent);
}


$islandName = "";
$islandID = isset($_GET['id']) ? $_GET['id'] : null;

// Query for Island Name
$islandNameQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = $islandID";
$islandNameResults = executeQuery($islandNameQuery);

while($islandNameRows = mysqli_fetch_assoc($islandNameResults)){
    $islandName = $islandNameRows['name'];
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $islandName; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/view.css">
    <link rel="stylesheet" href="assets/fonts/font.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-3">
        <div class="container-fluid">
            <div class="navbar-brand display-2">Inside Out</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Islands
                        </a>
                        <ul class="dropdown dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bonding Bay</a></li>
                            <li><a class="dropdown-item" href="#">Pixel Peak</a></li>
                            <li><a class="dropdown-item" href="#">Hoop Haven</a></li>
                            <li><a class="dropdown-item" href="#">TechnoSphere</a></li>
                        </ul>
                    </li>
                    <li class="nav nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- body -->
    <section class="container-fluid">
        <div class="row py-3">
            <?php $islandID = isset($_GET['id']) ? $_GET['id'] : null;?>
        </div>
        <?php
           if ($islandID) {
            foreach ($islandDescripList as $islandItem) {
                if ($islandItem->islandOfPersonalityID == $islandID) {
                    echo "<div class='title display-5 text-center' style='margin-bottom:50px;'>Welcome to TM Lord's " . $islandItem->name . "!</div>";
                    echo $islandItem->showDescrip();
                    break; 
                }
            }
        }
        ?>

    </section>

    <!-- Core Memories -->
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col">
                <div class="coreTitle display-5 text-center">
                    What core memories make up this island?
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-6">
                    <div class="orb"></div>
                    <div class="look d-flex justify-content-center align-items-center display-5">
                        Core Memory 1
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="islandContent d-flex justify-content-center align-items-center">
                        As a kid, I spent a lot of time indoors because my parents were very strict about letting me go
                        out. But when I was about 9 years old, they finally allowed me to explore. I still vividly
                        remember the joy of making my first friend and playing together. It was like discovering a whole
                        new world outside our home, full of connection and adventure.
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="orb"></div>
                    <div class="look d-flex justify-content-center align-items-center display-5">
                        Core Memory 2
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="islandContent d-flex justify-content-center align-items-center">
                        In 10th grade, I met my best friend, Louie, a truly unforgettable person who stood out from
                        everyone else I'd ever known. He embodied all the qualities you'd hope for in a best friend.
                        Together, we shared countless moments, created beautiful memories, and most importantly, we grew
                        and became better versions of ourselves side by side.
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="orb"></div>
                    <div class="look d-flex justify-content-center align-items-center display-5">
                        Core Memory 3
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="islandContent d-flex justify-content-center align-items-center">
                        When I started college at PUP Sto. Tomas in 2022, I encountered all kinds of people, but I never
                        expected to meet someone I'd come to see as a sister. Yet, I did—her name is Jade. She's one of
                        the smartest, most supportive, and truly remarkable people I've ever met. Together, with Louie
                        and Jade, our circle became one of the most cherished and defining parts of my life in this
                        universe.
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>