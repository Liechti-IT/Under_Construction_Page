<?php

//======================================================================
/* Variables for various languages */
//======================================================================

$welcome = "Willkommen"; /* Change for different Language" */
$paragraph = "Die Webseite ist im Aufbau, schau doch nächste Woche noch einmal vorbei oder melde dich per E-Mail"; /* Change to your Paragraph */
$mail = "&#109;&#97;&#105;&#108;&#116;&#111;&#58;%79%6F%75%72%2D%65%6D%61%69%6C%40%6D%61%69%6C%2E%63%6F%6D"; /* Change to your E-Mail | For preventing Spam its usefull to encode the mailto Link */ 
$contact = "Kontakt"; /* Text of the Button */

?>


<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>
        <div class="container">

            <div id=content-wrap>
                
                <div class="images-grid">
                    <div class="img-left">
                        <img src="/img/cloud_1.svg" alt="CloudImage">
                    </div>

                    <div class="img-center">
                        <img src="/img/cloud_2.svg" alt="CloudImage">
                    </div>

                    <div class="img-right">
                        <img src="/img/cloud_3.svg" alt="CloudImage">
                    </div>
                </div>

                <?php echo "<h1>$welcome</h1>"; ?>

                <div>

                    <?php echo "<p>$paragraph</p>"; ?>

                    <button>
                        <a href="<?php echo "$mail"; ?>"><?php echo "<p>$contact</p>"; ?></a>
                    </button>

                </div>

            </div>

            <footer>
                <p>Copyright © <?php echo date("Y"); ?></p>
            </footer>

        </div>
    </body>


</html>




