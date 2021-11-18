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
            <div id ="music">
               <div id="newestReleases"> <!-- Contains newest releases -->
            <h2> Newest Releases </h2>
                <iframe src="https://open.spotify.com/embed/album/6vC3YjRy755VljFSemBUu7" width="300" height="380" frameborder="5" allowtransparency="true" allow="encrypted-media"></iframe>
                <iframe src="https://open.spotify.com/embed/track/3xaugmCyXrVkrDTXbFkMW3" width="300" height="380" frameborder="5" allowtransparency="true" allow="encrypted-media"></iframe>
                <iframe src="https://open.spotify.com/embed/track/2hfoyc7ve6xM4ZEiNIiU1B" width="300" height="380" frameborder="5" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div id = "albums">  <!-- Contains albums --> 
                <h2> Albums </h2>
                    <iframe src="https://open.spotify.com/embed/album/34GQP3dILpyCN018y2k61L" width="300" height="380" frameborder="5" allowtransparency="true" allow="encrypted-media"></iframe>
                    <iframe src="https://open.spotify.com/embed/album/3dtSst4EXjGeZVQ5Sco315" width="300" height="380" frameborder="5" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>
        
        <div class="footer">
            <?php
                include 'includes/footer.php'   
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </div>

</body>

</html>
