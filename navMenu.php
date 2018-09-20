<?php
//Dit PHP-bestand genereert het navigatiemenu
echo "<nav>
        <div class='navImageContainer'>
            <a href='index.php?lang=nl'>
                <div class='logoContainer'>
                </div>
            </a>
            <form method='get'>
                <table class='langSelector'>
                    <tr>
                        <td>
                            <input id='NLflag' class='flagButton' type='submit' name='lang' value='nl'>
                        </td>
                        <td>
                            <input id='ENflag' class='flagButton' type='submit' name='lang' value='en'>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    ";
if (isset($_GET["lang"])) {
    switch ($_GET["lang"]) {
        case "nl":
            echo "
                <div class='menuContainer' id='menu'>
                    <a href='index.php?lang=nl'><button class='menuButton'>Home</button></a>
                    <a href='nieuws.php?lang=nl'><button class='menuButton'>Nieuws</button></a>
                    <a href='afspraak.php?lang=nl'><button class='menuButton'>Maak afspraak</button></a>
                    <a href='toerisme.php?lang=nl'><button class='menuButton'>Toerisme</button></a>
                </div>
            ";
            break;
        case "en":
            echo "
                <div class='menuContainer' id='menu'>
                    <a href='index.php?lang=en'><button class='menuButton'>Home</button></a>
                    <a href='nieuws.php?lang=en'><button class='menuButton'>News</button></a>
                    <a href='afspraak.php?lang=en'><button class='menuButton'>Appointment</button></a>
                    <a href='toerisme.php?lang=en'><button class='menuButton'>Tourism</button></a>
                </div>
            ";
            break;
        case "arno":
            echo "
                <div class='menuContainer' id='menu'>
                    <a href='index.php?lang=arno'><button class='menuButton'>Arnohome</button></a>
                    <a href='nieuws.php?lang=arno'><button class='menuButton'>Arnonieuws</button></a>
                    <a href='afspraak.php?lang=arno'><button class='menuButton'>Arnoafspraak</button></a>
                    <a href='toerisme.php?lang=arno'><button class='menuButton'>Arno</button></a>
                </div>
            ";
            break;
    }
}
else {
    echo "
        <div class='menuContainer' id='menu'>
            <a href='index.php?lang=nl'><button class='menuButton'>Home</button></a>
            <a href='nieuws.php?lang=nl'><button class='menuButton'>Nieuws</button></a>
            <a href='afspraak.php?lang=nl'><button class='menuButton'>Maak afspraak</button></a>
            <a href='toerisme.php?lang=nl'><button class='menuButton'>Toerisme</button></a>
        </div>
    ";
}

echo "</nav>";

?>