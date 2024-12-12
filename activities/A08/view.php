<?php
include("connect.php");
include("shared/classes.php");

$islandDescripList = array();

// Query for Island Description
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

// $islandContentList = array();

// Query for Content
$islandID = isset($_GET['id']) ? $_GET['id'] : null;
$islandContentList = array();

$islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandID' LIMIT 3";
$islandContentResults = executeQuery($islandContentQuery);


if (mysqli_num_rows($islandContentResults) > 0) {
    $coreMemoryCounter = 1;

    while ($islandContentRow = mysqli_fetch_assoc($islandContentResults)) {
        $islandContent = new IslandContent(
            $islandContentRow['islandContentID'],
            $islandContentRow['islandOfPersonalityID'],
            $islandContentRow['content']
        );

        array_push($islandContentList, $islandContent);
    }
}

// Query for Island Name
$islandName = "";
$islandID = isset($_GET['id']) ? $_GET['id'] : null;

$islandNameQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = $islandID";
$islandNameResults = executeQuery($islandNameQuery);

while ($islandNameRows = mysqli_fetch_assoc($islandNameResults)) {
    $islandName = $islandNameRows['name'];
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "Island | " . $islandName; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/view.css">
    <link rel="stylesheet" href="assets/fonts/font.css">
    <link rel="icon" href="assets/img/AO8_favicon.png" type="image/x-icon">
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
                        <a class="nav-link active" aria-current="page" href="home.php">Back to Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- body -->
    <section class="container-fluid">
        <div class="row py-3">
            <?php $islandID = isset($_GET['id']) ? $_GET['id'] : null; ?>
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
        </div>

        <div class="container-fluid">
            <div class="row">
                <?php
                $coreMemoryCounter = 1;
                foreach ($islandContentList as $content):
                    ?>
                    <div class="col-6 col-md-6">
                        <div class="orb"></div>
                        <div class="look d-flex justify-content-center align-items-center display-5">
                            Core Memory <?php echo $coreMemoryCounter++; ?>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-sm-6">
                        <?php echo $content->displayContent(); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- footer -->
        <?php include("shared/footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>