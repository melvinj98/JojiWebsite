<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title> Joji </title>
    <meta name="description" content="Official Website of Joji">
    <meta name="author" content="Melvin John">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css?v=1.0">

</head>

<body>
    <div class="header">
       <?php
            include 'includes/header.php'
        ?>
    </div>
    <div id="page-container">
        <div id="content-wrap">
            <div id="items"> <!-- Contains merchandise -->
                <h2> Merchandise </h2>
                <div class = "column">
                    <a href="https://www.merchbar.com/pop/joji/joji-run-reach-hoodie" target="_blank">
                        <img src="images/runHoodie.png" height="300px" width="300px" margin="20px">
                        <h5> "Run" Reach Hoodie</h5>
                        <p> $44.95 </p>
                    </a>
                </div>
                <div class = "column">
                    <a href="https://www.merchbar.com/pop/joji/joji-sanctuary-graphic-tee-1585088" target="_blank">
                       <img src="images/sanctuaryTee.jpeg" height="300px" width="300px" margin="20px">
                        <h5> "Sanctuary" Graphic Tee</h5>
                        <p> $24.95 </p>
                    </a>
                </div>
                <div class = "column">
                    <a href="https://www.merchbar.com/pop/joji/joji-gimme-love-engraved-spoon-digital-album" target="_blank">
                        <img src="images/engravedSpoon.jpeg" height="300px" width="300px" margin="20px">
                        <h5> "Gimme Love" Engraved Spoon</h5>
                        <p> $17.24 </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer">
            <?php
                include 'includes/footer.php'   
            ?>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </div>

</body>

</html>
