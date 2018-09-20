<?php
echo "<div class='sideContent'>";

if (isset($_GET["lang"])) {
    switch ($_GET["lang"]) {
        case "nl":
            echo "
                <h2>Nieuws</h2>
                <ul>
                    <li><a style='color: inherit; text-decoration:none;' href='nieuws/stempassen.php?lang=nl'><b>Foutieve stempassen geleverd</b></li>
                    <li><a style='color: inherit; text-decoration:none;' href='nieuws/oorlogsmonument.php?lang=nl'><b>Oorlogsmonument Nieuwe Pekela gestolen</b></a></li>
                </ul>
                <div class='separator'></div>
                <h2>Openingstijden</h2>
                <ul>
                    <li>Ochtend: Maandag t/m vrijdag: 9:00 – 12:00</li>
                    <li>Middag/avond: Dinsdag: 13:00 – 19:00</li>
                    <li>Middag: Maandag, woensdag en donderdag: 13:00 – 16:00</li>
                </ul>
                <div class='separator'></div>
                <h2>Contact</h2>
                <p class='sideContentParagraph'>
                    Raadhuislaan 8<br>
                    20 000 Oude Pekela<br>
                    <br>
                    Telefoonnummer: 0597 617555<br>
                    e-mail: info@pekela.nl
                </p>
            ";
            break;
        case "en":
            echo "
                <h2>News</h2>
                <ul>
                    <li><a style='color: inherit; text-decoration:none;' href='nieuws/stempassen.php?lang=en'><b>Faulty voting cards delivered</b> <small>(Article in Dutch)</small></a></li>
                    <li><a style='color: inherit; text-decoration:none;' href='nieuws/oorlogsmonument.php?lang=en'><b>War memorial stolen in New Pekela</b> <small>(Article in Dutch)</small></a></li>
                </ul>
                <div class='separator'></div>
                <h2>Opening times</h2>
                <ul>
                    <li>Morning: Monday to Friday: 9:00 – 12:00 </li>
                    <li>Afternoon/evening: Tuesday: 13:00 – 19:00</li>
                    <li>Afternoon: Monday, Wednesday en Thursday: 13:00 – 16:00</li>
                </ul>
                <div class='separator'></div>
                <h2>Contact</h2>
                <p class='sideContentParagraph'>
                    Raadhuislaan 8<br>
                    20 000 Oude Pekela<br>
                    <br>
                    Telephone number: 0597 617555<br>
                    e-mail: info@pekela.nl
                </p>
            ";
            break;
        case "arno":
            echo "
                <h2>Arnonieuws</h2>
                <ul>
                    <li><a style='color: inherit; text-decoration:none;' href='nieuws/stempassen.php?lang=arno'><b>Arno stemarno geleverd</b></li>
                    <li><a style='color: inherit; text-decoration:none;' href='nieuws/oorlogsmonument.php?lang=arno'><b>Arnomonument Nieuwe Arno gestolen</b></a></li>
                </ul>
                <div class='separator'></div>
                <h2>Arnotijden</h2>
                <ul>
                    <li>Ochtend: Maandag t/m vrijdag: 9:00 – 12:00 Arno</li>
                    <li>Middag/avond: Dinsdag: 13:00 – 19:00 Arno</li>
                    <li>Middag: Maandag, woensdag en donderdag: 13:00 – 16:00 Arno</li>
                </ul>
                <div class='separator'></div>
                <h2>Arno</h2>
                <p class='sideContentParagraph'>
                    Arnolaan 8<br>
                    20 000 Oude Arno<br>
                    <br>
                    Arnonummer: 0597 617555<br>
                    e-arno: arno@pekela.nl
                </p>
            ";
            break;
    }
}
else {
            echo "
                <h2>Nieuws</h2>
                <ul>
                    <li><a style='color: inherit; text-decoration:none;' href='nieuws/stempassen.php?lang=nl'><b>Foutieve stempassen geleverd</b></li>
                    <li><a style='color: inherit; text-decoration:none;' href='nieuws/oorlogsmonument.php?lang=nl'><b>Oorlogsmonument Nieuwe Pekela gestolen</b></a></li>
                </ul>
                <div class='separator'></div>
                <h2>Openingstijden</h2>
                <ul>
                    <li>Ochtend: Maandag t/m vrijdag: 9:00 – 12:00</li>
                    <li>Middag/avond: Dinsdag: 13:00 – 19:00</li>
                    <li>Middag: Maandag, woensdag en donderdag: 13:00 – 16:00</li>
                </ul>
                <div class='separator'></div>
                <h2>Contact</h2>
                <p class='sideContentParagraph'>
                    Raadhuislaan 8<br>
                    20 000 Oude Pekela<br>
                    <br>
                    Telefoonnummer: 0597 617555<br>
                    e-mail: info@pekela.nl
                </p>
            ";
}

echo "
    <table class='socialMedia'>
        <tr>
            <td><a href='https://www.facebook.com/gemeentepekela' target='_blank'><div class='facebookIcon'></div></a></td>
            <td><a href='https://twitter.com/gemeente_pekela' target='_blank'><div class='twitterIcon'></div></a></td>
        </tr>
    </table>
    <div class='separator'></div>
    <a href='https://www.youtube.com/watch?v=bjyNmli3pSw' target='_blank'><img class='adviserment' src='images/ad.gif'></a>
</div>
"; 
    
?>