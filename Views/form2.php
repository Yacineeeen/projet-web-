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
    <title>Donation Form</title>

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
    <!-- Icons font CSS-->
    <link href="vendor2/mdi-font/css1/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor2/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor2/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor2/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css2/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Donation Form</h2>
                </div>
                <div class="card-body">
                    <form id="donation_form" method="POST" onsubmit="return redirectToHomePage()">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name"><span
                                                id="first_name_error" style="color: red;"></span>
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name"><span
                                                id="last_name_error" style="color: red;"></span>
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email"><span id="email_error"
                                        style="color: red;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code"><span
                                                id="phone_error" style="color: red;"></span>
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Place</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="place"><span id="place_error"
                                        style="color: red;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="date_d"><span id="date_error"
                                        style="color: red;"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Donation cause</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cause"><span id="cause_error"
                                        style="color: red;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Indicate the amount you hope to donate</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="amount">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Donation method</div>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">online
                                    <input type="radio" checked="checked" name="online">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">paypal
                                    <input type="radio" name="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Can you confirm your SUGGESTION ?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Donate now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validateForm() {
            var firstName = document.forms["donation_form"]["first_name"].value;
            var lastName = document.forms["donation_form"]["last_name"].value;
            var email = document.forms["donation_form"]["email"].value;
            var phone = document.forms["donation_form"]["phone"].value;
            var place = document.forms["donation_form"]["place"].value;
            var date = document.forms["donation_form"]["date_d"].value;
            var cause = document.forms["donation_form"]["cause"].value;
            var amount = document.forms["donation_form"]["amount"].value;

            // Ajoutez des conditions de validation ici

            if (firstName == "" || lastName == "" || email == "" || phone == "" || place == "" || date == "" || cause == "" || amount == "") {
                alert("Veuillez remplir tous les champs obligatoires.");
                return false;
            }
        }
        function redirectToHomePage() {
            alert("Merci pour votre contribution");
            window.location.href = "../Views/index.php"; // Correction de l'URL
            return false;
        }

    </script>
    <!-- Jquery JS-->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor2/select2/select2.min.js"></script>
    <script src="vendor2/datepicker/moment.min.js"></script>
    <script src="vendor2/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js2/global.js"></script>
    <script src="verifcicatin.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->