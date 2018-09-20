<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Bryan">
        <link rel="stylesheet" href="css/defaultstyles.css">
        <link rel="icon" href="images/favicon.ico" type="image/gif" sizes="64x64">
    </head>
    <body>
        <?php
            require_once('navMenu.php');
        ?>
        <div class="content">
            <div id ="content" class="contentContainer">
                <h1>Home</h1>
                <center><div class='articleImageContainer'>
                <img class='articleImage' src='images/gemeentehuis.JPG'>
                </div></center><br>
                <img src='images/Pekela_wapen_2.svg' style='height:100px; float:left;'>
                <img src='images/Pekela_wapen_2.svg' style='height:100px; float:right;'>
                <center>
                <?php
                    if (isset($_GET["lang"])) {
                        switch ($_GET["lang"]) {
                            case "nl":
                                echo "
                                <p>Welkom op de website van de gemeente Pekela in Groningen.</p>
                                <p>U kan hier gemeentelijk nieuws lezen, een afspraak bij het gemeentehuis regelen en toeristeninformatie bekijken.</p>
                                ";
                                break;
                            case "en":
                                echo "
                                <p>Welcome to the website of the municipality Pekela in Groningen.</p>
                                <p>Here you can read the latest news from Pekela, make an appointment at the town office and read tourist information.</p>
                                ";
                                break;
                            case "arno":
                                echo "
                                <p>Welkom op de website van de gemeente Arno in Groningen.</p>
                                <p>U kan hier arnonieuws lezen, een afspraak bij het arnohuis regelen en arnoinformatie bekijken.</p>
                                ";
                                break;
                        }
                    }
                    else {
                        echo "
                                <p>Welkom op de website van de gemeente Pekela in Groningen.</p>
                                <p>U kan hier gemeentelijk nieuws lezen, een afspraak bij het gemeentehuis regelen en toeristeninformatie bekijken.</p>.
                        ";
                    }
                ?>
                </center>
            </div>
            <?php
            require_once('sideContent.php');
            ?>
        </div>
        <footer>
            <div class="footerImageContainer">
            </div>
        </footer>
    </body>
</html>