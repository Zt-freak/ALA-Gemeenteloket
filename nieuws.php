<!DOCTYPE html>
<meta name="author" content="Bryan">
<html>
    <head>
        <link rel="stylesheet" href="css/defaultstyles.css">
        <link rel="icon" href="images/favicon.ico" type="image/gif" sizes="64x64">
    </head>
    <body>      
        <?php
            require_once('navMenu.php')
        ?>
        <div class="content">
            <div class="contentContainer">
                <?php
                if (isset($_GET["lang"])) {
                    switch ($_GET["lang"]) {
                        case "nl":
                            echo "
                            <h1>Nieuws</h1>
                            <a href='nieuws/stempassen.php?lang=nl'><h2>Ongeldige stempassen bezorgd in Pekela</h2></a>
                            <p class='articleDesc'>09 maart 2018</p>
                            <a href='nieuws/oorlogsmonument.php?lang=nl'><h2>Oorlogsmonument Nieuwe Pekela gestolen</h2></a>
                            <p class='articleDesc'>22 februari 2018</p>
                            ";
                            break;
                        case "en":
                            echo "
                            <h1>Nieuws</h1>
                            <a href='nieuws/stempassen.php?lang=en'><h2>Invalid voting passes delivered in Pekela</h2></a>
                            <p class='articleDesc'>09 maart 2018</p>
                            <a href='nieuws/oorlogsmonument.php?lang=en'><h2>War memorial stolen in Nieuwe Pekela</h2></a>
                            <p class='articleDesc'>22 februari 2018</p>
                            ";
                            break;
                        case "arno":
                            echo "
                            <h1>Arnonieuws</h1>
                            <a href='nieuws/stempassen.php?lang=arno'><h2>Ongeldige arnopassen bezorgd in Arno</h2></a>
                            <p class='articleDesc'>09 maart 2018</p>
                            <a href='nieuws/oorlogsmonument.php?lang=arno'><h2>Oorlogsarno Nieuwe Arno gestolen</h2></a>
                            <p class='articleDesc'>22 februari 2018</p>
                            ";
                            break;
                    }
                }
                else {
                    echo "
                            <h1>Nieuws</h1>
                            <a href='nieuws/stempassen.php?lang=nl'><h2>Ongeldige stempassen bezorgd in Pekela</h2></a>
                            <p class='articleDesc'>09 maart 2018</p>
                            <a href='nieuws/oorlogsmonument.php?lang=nl'><h2>Oorlogsmonument Nieuwe Pekela gestolen</h2></a>
                            <p class='articleDesc'>22 februari 2018</p>
                            ";
                }
            ?>
            </div>
            <?php
                require_once('sideContent.php');
            ?>
        </div>
        <footer>
            <div class="footerImageContainer"></div>
        </footer>
    </body>
</html>