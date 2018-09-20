<!DOCTYPE html>
<meta name="author" content="Jayant, Merlijn">
<html>
    <body>
        <?php
            if (isset($_GET["lang"])) {
                switch ($_GET["lang"]) {
                    case "nl":
                        echo "
                        <h1>Maak afspraak</h1>
                        ";
                        break;
                    case "en":
                        echo "
                        <h1>Make an appointment</h1>
                        ";
                        break;
                    case "arno":
                        echo "
                        <h1>Maak arnoafspraak</h1>
                        ";
                        break;
                }
            }
            else {
                echo "
                    <h1>Maak afspraak</h1>
                ";
            }
        ?>
        <?php
            if (isset($_GET["lang"])) {
                switch ($_GET["lang"]) {
                    case "nl":
                        echo "
                        <form action='' method='post'>
                            <label>Kies een reden voor de afspraak</label><br>
                              <input required list='product' name='product'><br>
                              <datalist id='product'>
                                <option value='Aangifte van geboorte'>
                                <option value='Aangifte van overlijden'>
                                <option value='Adresonderzoek'>
                                <option value='Akte burgelijke stand, afschrift en uittreksel'>
                                <option value='Attestatie de vita, internationaal uittreksel'>
                                <option value='Briefadres'>
                                <option value='Erkenning kind voor geboorte'>
                                <option value='Hervestiging'>
                                <option value='Kapvergunning aanvragen'>
                                <option value='Paspoort aanvragen'>
                                <option value='Rijbewijs omwisselen na verlies'>
                                <option value='Rijbewijs vernieuwen'>
                                <option value='Uittreksel bevolkingsregister'>
                                <option value='Vluchtelingen paspoort'>
                              </datalist>

                            <label>Voer uw naam in</label><br>
                            <input required type='text' placeholder='Voornaam' name='firstname'><br>
                            <input type='text' placeholder='Tussenvoegsel(s)' name='tussen'><br>
                            <input required type='text' placeholder='Achternaam' name='lastname'><br>

                            <label>Kies een datum voor uw afspraak</label><br>
                            <input required type='date' name='date'><br>

                            <label>Voer uw e-mailadres in</label><br>
                            <input required type='email' placeholder='E-mail' name='email'><br>
                            <br>
                            <input class='submitButton' type='submit' name='verzend' value='Verzend'><br>
                        </form>
                        ";
                        break;
                    case "en":
                        echo "
                        <form action='' method='post'>
                            <label>Choose a reason for the appointment</label><br>
                              <input required list='product' name='product'><br>
                              <datalist id='product'>
                                <option value='Declaration of birth'>
                                <option value='Declaration of death'>
                                <option value='Address investigtion'>
                                <option value='Act of civil status, copt and extract'>
                                <option value='attestation de vita, international extract'>
                                <option value='Mailing address'>
                                <option value='Recognision child for birth'>
                                <option value='Reloaction'>
                                <option value='Logging licence request'>
                                <option value='Request passport'>
                                <option value='Change drivers licence after loss'>
                                <option value='Renew drivers licence'>
                                <option value='Extract of civil register'>
                                <option value='Refugee passport'>
                              </datalist>

                            <label>Enter your name</label><br>
                            <input required type='text' placeholder='First name' name='firstname'><br>
                            <input type='text' placeholder='Insertion(s)' name='tussen'><br>
                            <input required type='text' placeholder='Last name' name='lastname'><br>

                            <label>Pick a preferred date</label><br>
                            <input required type='date' name='date'><br>

                            <label>Enter your e-mail address</label><br>
                            <input required type='email' placeholder='E-mail' name='email'><br>
                            <br>
                            <input class='submitButton' type='submit' name='verzend' value='Send'><br>
                        </form>
                        ";
                        break;
                    case "arno":
                        echo "
                        <form action='' method='post'>
                            <label>Kies een reden voor de afspraak</label><br>
                              <input required list='product' name='product'><br>
                              <datalist id='product'>
                                <option value='Aangifte van arno'>
                                <option value='Aangifte van overarno'>
                                <option value='Arnoonderzoek'>
                                <option value='Akte burgelijke arno, afschrift en uittreksel'>
                                <option value='Attestatie de arno, internationaal uittreksel'>
                                <option value='Briefarno'>
                                <option value='Erkenning arno voor geboorte'>
                                <option value='Herarno'>
                                <option value='Arnovergunning aanvragen'>
                                <option value='Pasarno aanvragen'>
                                <option value='Arnobewijs omwisselen na verlies'>
                                <option value='Arnobewijs vernieuwen'>
                                <option value='Uittreksel arnoregister'>
                                <option value='Arnolingen paspoort'>
                              </datalist>

                            <label>Voer uw naam in</label><br>
                            <input required type='text' placeholder='Voorarno' name='firstname'><br>
                            <input type='text' placeholder='Tussenarno(s)' name='tussen'><br>
                            <input required type='text' placeholder='Achterarno' name='lastname'><br>

                            <label>Kies een datum voor uw arnoafspraak</label><br>
                            <input required type='date' name='date'><br>

                            <label>Voer uw e-arnoadres in</label><br>
                            <input required type='email' placeholder='E-mail' name='email'><br>
                            <br>
                            <input class='submitButton' type='submit' name='verzend' value='Arno'><br>
                        </form>
                        ";
                        break;
                }
            }
            else {
                echo "
                    plaats default hier, voor als er geen taal is geselecteerd
                ";
            }
        ?>

        <form method="post">
            <?php
            if (isset($_POST["firstname"]) && $_POST["firstname"] === "Arno") {
                header ("location: arno.php");
            }
            else if (isset($_POST["firstname"]) && $_POST["firstname"] === "Sagiri") {
                require_once('eromangasensei.php');
            }
            
            if (isset($_POST["bevestig"])) {
                echo "<div class='appointmentCheck'>";
                
                if (isset($_GET["lang"])) {
                    switch ($_GET["lang"]) {
                        case "nl":
                            echo "<p><b>Afspraak bevestigd, controleer uw e-mail voor details!</b></p>";
                            break;
                        case "en":
                            echo "<p><b>Appointment confirmed, check you e-mail for details!</b></p>";
                            break;
                        case "arno":
                            echo "<p><b>Arnoafspraak bevestigd, controleer uw e-mail voor details!</b></p>";
                            break;
                    }
                }
                else {
                    echo "<p><b>Afspraak bevestigd, controleer uw e-mail voor details!</b></p>";
                }
                
                echo "</div>";
            }
            else {
                if (isset($_POST["verzend"])) {
                    echo "<div class='appointmentCheck'>";
                    

                    if (isset($_GET["lang"])) {
                        switch ($_GET["lang"]) {
                            case "nl":
                                echo "<p><b>Controleer uw afspraak</b></p>";
                                echo "<p>Uw reden voor afspraak: ".$_POST["product"]."<br>";
                                echo "Uw naam: ".$_POST["firstname"].$_POST["tussen"].$_POST["lastname"]."<br>";
                                echo "Uw datum van voorkeur: ".$_POST["date"]."<br>";
                                echo "Uw e-mailadres: ".$_POST["email"]."</p>";
                                echo "<input class='inverseSubmitButton' type='submit' name='bevestig' value='Bevestig'>";
                                break;
                            case "en":
                                echo "<p><b>Check if everything is correct</b></p>";
                                echo "<p>Reason for appointment: ".$_POST["product"]."<br>";
                                echo "Your name: ".$_POST["firstname"].$_POST["tussen"].$_POST["lastname"]."<br>";
                                echo "Preferred date: ".$_POST["date"]."<br>";
                                echo "Your e-mail address: ".$_POST["email"]."</p>";
                                echo "<input class='inverseSubmitButton' type='submit' name='bevestig' value='Confirm'>";
                                break;
                            case "arno":
                                echo "<p><b>Controleer uw afspraak</b></p>";
                                echo "<p>Uw reden voor afspraak: ".$_POST["product"]."<br>";
                                echo "Uw naam: ".$_POST["firstname"].$_POST["tussen"].$_POST["lastname"]."<br>";
                                echo "Uw datum van voorkeur: ".$_POST["date"]."<br>";
                                echo "Uw e-mailadres: ".$_POST["email"]."</p>";
                                echo "<input class='inverseSubmitButton' type='submit' name='bevestig' value='Bevestig'>";
                                break;
                        }
                    }
                    else {
                                echo "<p><b>Controleer uw afspraak</b></p>";
                                echo "<p>Uw reden voor afspraak: ".$_POST["product"]."<br>";
                                echo "Uw naam: ".$_POST["firstname"].$_POST["tussen"].$_POST["lastname"]."<br>";
                                echo "Uw datum van voorkeur: ".$_POST["date"]."<br>";
                                echo "Uw e-mailadres: ".$_POST["email"]."</p>";
                                echo "<input class='inverseSubmitButton' type='submit' name='bevestig' value='Bevestig'>";
                    }
                
                    echo "</div>";
                }
            }
            
            ?>
        </form>
    </body>
</html>