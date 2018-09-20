<!DOCTYPE html>
<meta name="author" content="Jayant, Merlijn">
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
                    require_once('form.php');
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