<?php
include '../m/participation.php';
include '../c/participationC.php';

$error = "";
$participation = null ;
$participationC = new participationC() ;
    if (
        isset($_POST["cin"]) &&
        isset($_POST["nomp"]) &&
        isset($_POST["prep"]) &&
        isset($_POST["emailp"]) &&
        isset($_POST["telp"]) 

    ) {
        if(
            !empty($_POST["cin"]) &&
            !empty($_POST["nomp"]) &&
            !empty($_POST["prep"]) &&
            !empty($_POST["emailp"]) &&
            !empty($_POST["telp"]) 
           
        ){
            $participation = new participation(
                null ,
                $_POST['cin'],
                $_POST['nomp'],
                $_POST['prep'],
                $_POST['emailp'],
                $_POST['telp'] 
                
            );
            $participationC->addpart($participation);
            header('Location:eventa.html');
        }else
        $error = "Missing information";
       



}

?>

<!-- Reste du code HTML inchangé -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Event</title>


    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

   

    <!-- Main CSS-->
    <link href="css1/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Participation Form </h2>
                </div>
                <div class="card-body">
                <?php echo $error; ?>

                    <form method="POST"   >
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nomp" id="nomp" required>
                                            <label class="label--desc">first name</label>
                                        </div>
                                        <br>
                                        <span id="s1"></span>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="prep" id="prep" required>
                                            <label class="label--desc">last name</label>
                                            <br>
                                            <br>
                                        <span id="s2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">CIN</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"  name="cin" id="cin" required>
                                </div>
                                <br>
                                <span id="s6"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"  name="emailp" id="emailp" required>
                                </div>
                                <br>
                                <span id="s3"></span>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code" id="area" required>
                                            <label class="label--desc">Area Code</label>
                                            <br>
                                            <br>
                                        <span id="s4"></span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="telp" id="telp" required>
                                            <label class="label--desc">Phone Number</label>
                                            <br>
                                            <br>
                                        <span id="s5"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                     
                        <div>
                        <button class="btn btn--radius-2 btn--red" type="submit" value="Signup" onclick="validerEtSoumettre ()">Register</button>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 

    <!-- Main JS-->
    <script src="validation.js"></script>

</body>

</html>
<!-- end document-->