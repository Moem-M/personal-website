<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Picture Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../global/styles.css" />
    <link rel="icon" href="../images/logo500.png" />
    <script src="../scripts/gallery.js"></script>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/links.php"); ?>

    <div class="main-content" id="galleryPage">

        <h1 id="gallery-header" class="main-header">Formula 1 2026 Teams and their Cars</h1>

        <div id="picture-gallery" class="picture-gallery">
            <button type="button" class="buttonPrev" onclick="prevPicture()">&#10094</button>

            <figure>
                <img class="gallery-picture" src="../images/gallery/astonmartin.avif" alt="Picture #1" />
                <figcaption>Aston Martin</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/haas.webp" alt="Picture #2" />
                <figcaption>Haas</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/williams.webp" alt="Picture #3" />
                <figcaption>Williams</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/audi.webp" alt="Picture #4" />
                <figcaption>Audi</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/alpine.webp" alt="Picture #5" />
                <figcaption>Alpine</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/cadillac.webp" alt="Picture #6" />
                <figcaption>Cadillac</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/ferarri.webp" alt="Picture #7" />
                <figcaption>Ferrari</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/mclaren.webp" alt="Picture #8" />
                <figcaption>McLaren</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/mercedes.webp" alt="Picture #9" />
                <figcaption>Mercedes</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/racingbulls.webp" alt="Picture #10" />
                <figcaption>Racing Bulls</figcaption>
            </figure>

            <figure>
                <img class="gallery-picture" src="../images/gallery/redbull.webp" alt="Picture #11" />
                <figcaption>Red Bull Racing</figcaption>
            </figure>


            <button type="button" class="buttonNext" onclick="nextPicture()">&#10095</button>
        </div>
        <div id="thumbnail-display" class="thumbnail-display">

            <img class="thumbnail-picture" src="../images/gallery/astonmartin.avif" alt="Picture #1" onclick="showPicture(0)" />
            <img class="thumbnail-picture" src="../images/gallery/haas.webp" alt="Picture #2" onclick="showPicture(1)" />
            <img class="thumbnail-picture" src="../images/gallery/williams.webp" alt="Picture #3" onclick="showPicture(2)" />
            <img class="thumbnail-picture" src="../images/gallery/audi.webp" alt="Picture #4" onclick="showPicture(3)" />
            <img class="thumbnail-picture" src="../images/gallery/alpine.webp" alt="Picture #5" onclick="showPicture(4)" />
            <img class="thumbnail-picture" src="../images/gallery/cadillac.webp" alt="Picture #6" onclick="showPicture(5)" />
            <img class="thumbnail-picture" src="../images/gallery/ferarri.webp" alt="Picture #7" onclick="showPicture(6)" />
            <img class="thumbnail-picture" src="../images/gallery/mclaren.webp" alt="Picture #8" onclick="showPicture(7)" />
            <img class="thumbnail-picture" src="../images/gallery/mercedes.webp" alt="Picture #9" onclick="showPicture(8)" />
            <img class="thumbnail-picture" src="../images/gallery/racingbulls.webp" alt="Picture #10" onclick="showPicture(9)" />
            <img class="thumbnail-picture" src="../images/gallery/redbull.webp" alt="Picture #11" onclick="showPicture(10)" />


        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>
