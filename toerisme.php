<!DOCTYPE html>
<meta name="author" content="Jayant, Bryan">
<html>
    <head>
        <link rel="stylesheet" href="css/defaultstyles.css">
        <link rel="icon" href="images/favicon.ico" type="image/gif" sizes="64x64">
    </head>
    <body>
        <div id='overlay'></div>
        <?php
            require_once('navMenu.php');
        ?>
        <div class="content">
            <div class="contentContainer">
                <?php
                if (isset($_GET["lang"])) {
                    switch ($_GET["lang"]) {
                        case "nl":
                            echo "
                            <h1>Toerisme</h1>
                            <p>Pekela is een gemeente in Noord-Nederland, in de provincie Groningen. De gemeente beslaat een oppervlakte van 50,22 km². Pekela is ontstaan door de samenvoeging van Oude Pekela en Nieuwe Pekela per 1 januari 1990. Sinds enkele jaren is Pekela ambtelijk gefuseerd met Veendam. De ambtelijke organisatie heet De Kompanjie.<br>
                            <p>
                            Pekela is een veenkoloniale gemeente waarvan de geschiedenis begint in 1599 wanneer enkele Hollandse en Friese kooplieden de Pekelcompagnie beginnen aan de Pekel A, waar de naam van de gemeente van wordt afgeleid. \"pekel\" en \"a\" respectievelijk \"zout\" en \"rivier\".</p>
                            <p>
                            Hoe zuidelijker je komt hoe meer gekanaliseerd de Pekel A wordt. Verveners van het gebied worden vereist na het afgraven de grond in richten voor de landbouw, veel velden in Pekela worden gebruikt voor rogge en haver, ook heeft Pekela één van de grootste hennepkwekerijen in Nederland.</p>
                            <center><div class='articleImageContainer'>
                            <img class='articleImage' src='images/EngelModderman.jpg'>
                            </div></center><br>
                            <div class='captionContainer'><p class='caption'>Engel Modderman, leider van de VCP</p></div>
                            <p>
                            Enkele bezienswaardigheden in en rondom Pekela zijn: Het Veenkoloniaal Museum in Veendam, het Monument voor Verguisde Communisten, het kantoor van de Verenigde Communistische Partij en nog veel meer!</p>
                            ";
                            break;
                        case "en":
                            echo "
                            <h1>Tourist information</h1>
                            <p>Pekela is a municipality in the northern province of Groningen. It covers an area of 50,22 km². It was created on Januari 1st 1990 by the merging of Old Pekela and New Pekela. A few years back Pekela officialy merged with Veendam, this merging is now called De Kompanjie.</p>
                            <p>
                            Pekela is a peat colonial municipality whose history begins in 1599 when Dutch and Frisian merchants bought land near the Pekel A (Salty River), a river which is where the name of the commune is derived from.</p>
                            <p>
                            The further south you come the more channeled the Pekel A becomes, boggers working on the land are demanded to repurpose the ground for agriculture. The most common crops grown in Pekela are rye and oatmeal. Pekela is also home to one of the biggest hemp nurseries in The Netherlands.</p>
                            <center><div class='articleImageContainer'>
                            <img class='articleImage' src='images/EngelModderman.jpg'>
                            </div></center><br>
                            <div class='captionContainer'><p class='caption'>Engel Modderman, leader of the VCP</p></div>
                            <p>
                            Some sights in Pekela include: Het Veenkoloniaal museum, the Monument for Defamed Communists, The Office of The United Communist Party and a whole lot more!</p>
                            ";
                            break;
                        case "arno":
                            echo "
                            <h1>Arno</h1>
                            <p>Arno is een gemeente in Noord-Arno, in de provincie Arno. De gemeente Arno beslaat een oppervlakte van 50,22 Arno². Arno is ontstaan door de samenvoeging van Oude Arno en Nieuwe Arno per 1 januari 1990. Sinds enkele jaren is Arno ambtelijk gefuseerd met Arnodam. De ambtelijke organisatie heet De Komparno.</p>
                            <p>
                            Arno is een veenkoloniale gemeente waarvan de geschiedenis begint in 1599 wanneer enkele Hollandse en Arnose kooplieden de Arnocompagnie beginnen aan de Arno A, waar de naam van de gemeente van wordt afgeleid. \"Arno\" en \"a\" respectievelijk \"zout\" en \"rivier\".</p>
                            <p>
                            Hoe zuidelijker je komt hoe meer gekanaliseerd de Arno A wordt. Verveners van het gebied worden vereist na het afgraven de grond in richten voor de landbouw, veel velden in Arno worden gebruikt voor rogge en haver, ook heeft Arno één van de grootste UXkwekerijen in Nederland.</p>
                            <center><div class='articleImageContainer'>
                            <img class='articleImage' src='images/EngelModderman.jpg'>
                            </div></center><br>
                            <div class='captionContainer'><p class='caption'>Arno Arnoman, leider van de VCA</p></div>
                            <p>
                            Enkele bezienswaardigheden in en rondom Arno zijn: Het Veenarno Museum in Arnodam, het Monument voor Verguisde Arno's, het kantoor van de Verenigde Communistische Arno en nog veel meer!</p>
                            ";
                            break;
                    }
                }
                else {
                    echo "
                        <h1>Toerisme</h1>
                        <p>Pekela is een gemeente in Noord-Nederland, in de provincie Groningen. De gemeente beslaat een oppervlakte van 50,22 km². Pekela is ontstaan door de samenvoeging van Oude Pekela en Nieuwe Pekela per 1 januari 1990. Sinds enkele jaren is Pekela ambtelijk gefuseerd met Veendam. De ambtelijke organisatie heet De Kompanjie.</p>
                        <p>
                        Pekela is een veenkoloniale gemeente waarvan de geschiedenis begint in 1599 wanneer enkele Hollandse en Friese kooplieden de Pekelcompagnie beginnen aan de Pekel A, waar de naam van de gemeente van wordt afgeleid. \"pekel\" en \"a\" respectievelijk \"zout\" en \"rivier\".</p>
                        <p>
                        Hoe zuidelijker je komt hoe meer gekanaliseerd de Pekel A wordt. Verveners van het gebied worden vereist na het afgraven de grond in richten voor de landbouw, veel velden in Pekela worden gebruikt voor rogge en haver, ook heeft Pekela één van de grootste hennepkwekerijen in Nederland.</p>
                        <div class='articleImageContainer'>
                        <img id='overlayTrigger' class='articleImage' src='images/EngelModderman.jpg'>
                        </div><br>
                        <div class='captionContainer'><p class='caption'>Engel Modderman, leider van de VCP</p></div>
                        <p>Enkele bezienswaardigheden in en rondom Pekela zijn: Het Veenkoloniaal Museum in Veendam, het Monument voor Verguisde Communisten, het kantoor van de Verenigde Communistische Partij en nog veel meer!</p>
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