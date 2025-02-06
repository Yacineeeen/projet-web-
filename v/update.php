<?php

include '../c/eventC.php';
include '../m/event.php';
$error = "";

// create event
$event = null;
// create an instance of the controller
$eventC = new eventC();


if (
    isset($_POST["obj"]) &&
    isset($_POST["place"]) &&
    isset($_POST["dh"]) &&
    isset($_POST["bud"]) &&
    isset($_POST["be"]) &&
    isset($_POST["nbrp"])
) {
    if (
        !empty($_POST["obj"]) &&
        !empty($_POST["place"]) &&
        !empty($_POST["dh"]) &&
        !empty($_POST["bud"]) &&
        !empty($_POST["be"]) &&
        !empty($_POST["nbrp"])
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $event = new event(
            null,
            $_POST['obj'],
            $_POST['place'],
            $_POST['dh'],
            $_POST['bud'],
            $_POST['be'],
            $_POST['nbrp']
        );
        var_dump($event);
        
        $eventC->update($event, $_POST['ide']);

        header('Location:listevent.php');
    } else
        $error = "Missing information";
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="css2/main.css" rel="stylesheet" media="all">
</head>

<body>
    <button><a href="listevent.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['ide'])) {
        $event = $eventC->showevent($_POST['ide']);
        
    ?>
     <form method="POST" >
                        <div class="form-row m-b-55">
                            <div class="name">obj</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="obj" id="obj" value="<?php echo $_POST['obj'] ?>">
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <span id="s1"></span>
                        </div>
                    
                        <div class="form-row">
                            <div class="name">place</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="place" id="place"  value="<?php echo $_POST['place'] ?>" >
                                </div>
                            </div>
                            <span id="s2"></span>
                        </div>
                        <div class="form-row">
                            <div class="name">date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="dh" id="dh"  value="<?php echo  $_POST['dh'] ?>">
                                </div>
                            </div>
                            <span id="s3"></span>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">budget</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="bud" id="bud"  value="<?php echo $_POST['bud'] ?>" >
                                </div>
                            </div>
                            <span id="s4"></span>
                        </div>
                        <div class="form-row">
                            <div class="name">be</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="be" id="be"  value="<?php echo $_POST['be'] ?>">
                                </div>
                            </div>
                            <span id="s5"></span>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Number of participation</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="nbrp" id="nbrp" value="<?php echo $_POST['nbrp'] ?>" >
                                </div>
                            </div>
                            
                            <span id="s6"></span>
                        </div>
                
                        
                        <div>
                        <input type="submit" value="Save">
                        <br>
                        <br>
                        <input type="reset" value="Reset">
                          <!-- <button class="btn btn--radius-2 btn--red"  type="submit" value="save"   onclick="validerEtSoumettre(event)">Register</button> -->

                       <!-- <input type="submit" value="Save" onclick="validerEtSoumettre(event)> -->
 </div>
                    </form>
    <?php
    }
    ?>
</body>

</html>