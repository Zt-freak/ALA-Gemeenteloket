<?php
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
                    <a href='../nieuws.php?lang=nl'><button class='menuButton'>Terug naar nieuws</button></a>
                </div>
            ";
            break;
        case "en":
            echo "
                <div class='menuContainer' id='menu'>
                    <a href='../nieuws.php?lang=en'><button class='menuButton'>Back to news</button></a>
                </div>
            ";
            break;
        case "arno":
            echo "
                <div class='menuContainer' id='menu'>
                    <a href='../nieuws.php?lang=arno'><button class='menuButton'>Terug naar arnonieuws</button></a>
                </div>
            ";
            break;
    }
}
else {
    echo "
        <div class='menuContainer' id='menu'>
            <a href='../nieuws.php?lang=nl'><button class='menuButton'>Terug naar nieuws</button></a>
        </div>
    ";
}

echo "</nav>";

?>