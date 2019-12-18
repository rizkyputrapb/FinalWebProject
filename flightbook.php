<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>flightbook</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-1.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-10.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-2.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-3.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-4.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-5.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-6.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-7.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-8.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-9.css">
    <link rel="stylesheet" href="assets/css/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker-1.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker-2.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker-3.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker-4.css">
    <link rel="stylesheet" href="assets/css/ebs-bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css">
    <script>
        $(document).ready(function() {
            $("#from-datepicker").datepicker({
                format: 'yyyy/mm/dd'
            });
            $("#from-datepicker").on("change", function() {
                var fromdate = $(this).val();
            });
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.html">Falsetto</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services">Flight</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portfolio">MOVIE</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">TRAIn</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#team">HOTELS</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section style="height: 1454px;">
        <form method="post" action="dbinsert.php">
            <div class="container-fluid" style="width: 1481px;height: 1301px;margin-top: -86px;">
                <div class="card"></div>
                <div class="form-row">
                    <div class="col"><label class="col-form-label" style="font-size: 72px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;"><i class="fa fa-plane" style="font-size: 80px;color: rgb(254,209,54);"></i>&nbsp; Flight Booking</label></div>
                </div>
                <div class="form-row">
                    <div class="col"><label class="col-form-label" style="font-size: 38px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">From</label></div>
                    <div class="col"><label class="col-form-label" style="font-size: 38px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">To</label></div>
                </div>
                <div class="form-row">
                    <div class="col"><input class="form-control depart-city" type="text" name="origin" required="" placeholder="Airport Name" autofocus="" id="depart-city" style="height: 58px;width: 709.5px;font-size: 55px;font-family: Montserrat, sans-serif;font-style: oblique;"></div>
                    <div class="col"><input class="form-control" type="text" name="destination" placeholder="Airport Name" style="width: 705.5px;height: 58px;font-size: 55px;font-family: Montserrat, sans-serif;font-weight: normal;font-style: oblique;"></div>
                </div>
                <div class="form-row">
                    <div class="col"><label class="col-form-label" style="font-size: 38px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">Departure Date</label></div>
                </div>
                <div class="form-row">
                    <div class="col" style="height: 162px;"><input class="form-control" type="text" name="dep_date" id="from-datepicker" style="width: 731.5px;height: 98px;font-family: Montserrat, sans-serif;font-weight: normal;font-size: 55px;"></div>
                </div>
                <div class="form-row text-left" style="height: 155px;">
                    <div class="col"><label class="col-form-label text-left d-xl-flex align-items-xl-end" style="font-size: 56px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;margin-left: 0px;margin-bottom: 16px;height: 151px;"><br><br> <br> <br> <br> <br> <br> <br> <br><br><br><br> <br> <br> <br> <br> <br><i class="fa fa-user" style="margin-bottom: 11px;width: 54px;height: 63px;color: rgb(254,209,54);font-size: 62px;"></i>&nbsp;Passenger Information&nbsp;</label></div>
                </div>
                <div class="form-row">
                    <div class="col-xl-2"><label class="col-form-label" style="font-size: 36px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">ID Number:</label></div>
                    <div class="col"><input class="form-control" type="text" name="cust_id" required="" placeholder="ID Card / Passport" style="width: 1170.5px;height: 58px;font-size: 35px;font-family: Montserrat, sans-serif;font-weight: normal;font-style: oblique;"></div>
                </div>
                <div class="form-row">
                    <div class="col-xl-2"><label class="col-form-label" style="font-size: 36px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">First Name:</label></div>
                    <div class="col"><input class="form-control" type="text" name="firstname" required="" style="width: 1172.5px;height: 58px;font-size: 35px;font-family: Montserrat, sans-serif;font-weight: normal;font-style: oblique;"></div>
                </div>
                <div class="form-row">
                    <div class="col-xl-2"><label class="col-form-label" style="font-size: 36px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">Last Name:</label></div>
                    <div class="col"><input class="form-control" type="text" name="lastname" required="" style="width: 1175.5px;height: 58px;font-size: 35px;font-family: Montserrat, sans-serif;font-weight: normal;font-style: oblique;"></div>
                </div>
                <div class="form-row">
                    <div class="col-xl-1"><label class="col-form-label" style="font-size: 38px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">Title:</label></div>
                    <div class="col"><select class="form-control" name="title" style="width: 139px;height: 60px;font-size: 39px;font-family: Montserrat, sans-serif;">
                            <option value="Ms." selected="">Ms.</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                        </select></div>
                </div>
                <div class="form-row">
                    <div class="col-xl-2"><label class="col-form-label" style="font-size: 38px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">Nationality:</label></div>
                    <div class="col"><select class="form-control" name="nationality" style="width: 139px;height: 60px;font-size: 39px;font-family: Montserrat, sans-serif;">
                            <option value="INA" selected="">INA</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                            <option value="MY">MY</option>
                            <option value="VN">VN</option>
                            <option value="TH">TH</option>
                            <option value="PH">PH</option>
                        </select></div>
                </div>
                <div class="form-row" style="height: 147px;">
                    <div class="col"><label class="col-form-label text-left d-xl-flex align-items-xl-end" style="font-size: 56px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;margin-left: 0px;margin-bottom: 16px;height: 145px;"><br><br> <br> <br> <br> <br> <br> <br> <br><br><br><br> <br> <br> <br> <br> <br><i class="fas fa-plane" style="margin-bottom: 11px;width: 53px;height: 58px;color: rgb(254,209,54);font-size: 57px;"></i>&nbsp; Flight Details</label></div>
                </div>
                <div class="form-row">
                    <div class="col-xl-2"><label class="col-form-label" style="font-size: 38px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">Priority:</label></div>
                    <div class="col"><select class="form-control" name="flight_prio" style="width: 389px;height: 60px;font-size: 39px;font-family: Montserrat, sans-serif;">
                            <option value="Economy">Economy</option>
                            <option value="Business">Business</option>
                            <option value="First Class">First Class</option>
                        </select></div>
                </div>
                <div class="form-row">
                    <div class="col-xl-2"><label class="col-form-label" style="font-size: 38px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">Airlines:</label></div>
                    <div class="col"><select class="form-control" name="airlines" style="width: 743px;height: 60px;font-size: 39px;font-family: Montserrat, sans-serif;">
                            <option value="Citilink">Citilink</option>
                            <option value="Garuda Indonesia">Garuda Indonesia</option>
                            <option value="Sriwijaya Air">Sriwijaya Air</option>
                            <option value="Lion Air">Lion Air</option>
                            <option value="Batik Air">Batik Air</option>
                        </select></div>
                </div><button class="btn btn-primary btn-lg text-center border rounded d-xl-flex align-items-center align-content-center align-items-xl-center" type="submit" style="width: 1140px;margin-left: 130px;background-color: rgb(254,209,54);font-family: Montserrat, sans-serif;font-weight: bold;font-style: oblique;padding-left: 443px;height: 85px;font-size: 47px;">Book Flight</button>
            </div>
        </form>
    </section>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-1.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-10.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-11.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-12.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-13.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-14.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-2.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-3.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-4.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-5.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-6.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-7.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-8.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode-9.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/ebs-bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>