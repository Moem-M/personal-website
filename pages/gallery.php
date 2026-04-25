<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="../global/styles.css" />
    <script src="../scripts/gallery.js"></script>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/links.php"); ?>

    <div class="main-content" id="galleryPage">
        <div id="picture-gallery" class="picture-gallery">
            <button type="button" class="buttonPrev" onclick="prevPicture()">&#10094</button>

            <img class="gallery-picture" src="../images/gallery/astonmartin.avif" alt="Picture #1" />
            <img class="gallery-picture" src="../images/gallery/haas.webp" alt="Picture #2" />
            <img class="gallery-picture" src="../images/gallery/williams.webp" alt="Picture #3" />
            <img class="gallery-picture" src="../images/gallery/audi.webp" alt="Picture #4" />
            <img class="gallery-picture" src="../images/gallery/alpine.webp" alt="Picture #5" />
            <img class="gallery-picture" src="../images/gallery/cadillac.webp" alt="Picture #6" />
            <img class="gallery-picture" src="../images/gallery/ferarri.webp" alt="Picture #7" />
            <img class="gallery-picture" src="../images/gallery/mclaren.webp" alt="Picture #8" />
            <img class="gallery-picture" src="../images/gallery/mercedes.webp" alt="Picture #9" />
            <img class="gallery-picture" src="../images/gallery/racingbulls.webp" alt="Picture #10" />
            <img class="gallery-picture" src="../images/gallery/redbull.webp" alt="Picture #11" />

            <button type="button" class="buttonNext" onclick="nextPicture()">&#10095</button>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>
