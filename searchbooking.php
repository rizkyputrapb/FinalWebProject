<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FPWeb</title>
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
    <?php
    include "connection.php";

    $search_id = $_POST['search_id'];

    $SQL = "SELECT * FROM booking WHERE booking_id = '$search_id' ";
    $result = mysqli_query($connect, $SQL);

    $row = mysqli_fetch_array($result);
    $booking_id = $row["booking_id"];
    $origin = $row["origin"];
    $destination = $row["destination"];
    $dep_date = $row["dep_date"];
    $cust_id = $row["cust_id"];
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $title = $row["title"];
    $nationality = $row["nationality"];
    $flight_priority = $row["flight_priority"];
    $airlines = $row["airlines"];
    $price = $row["price"];
    ?>
</head>

<body>
    <header></header>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top d-xl-flex justify-content-xl-start" id="mainNav" style="color: rgb(255,214,0);background-color: #ffc700;background-image: url(&quot;none&quot;);height: 130px;">
        <div class="container"><a class="navbar-brand d-xl-flex justify-content-xl-start" href="index.html" style="font-family: 'Kaushan Script', cursive;color: rgb(255,255,255);font-size: 77px;">Falsetto</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services" style="font-size: 28px;">Booking Details</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 style="font-size: 39px;font-family: Montserrat, sans-serif;">Booking Number:&nbsp;</h1>
    <h1 style="font-size: 39px;font-family: Montserrat, sans-serif;font-weight: bold;"> <?php echo $booking_id; ?></h1>
    <section style="height: 1085px;">
        <div class="container-fluid" style="margin-top: -130px;height: 949px;">
            <div class="row" style="height: 184px;">
                <div class="col d-xl-flex justify-content-xl-start align-items-xl-center"><label class="col-form-label" style="font-size: 37px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;">&nbsp;<i class="fas fa-plane" style="font-size: 37px;margin-right: -2px;"></i>&nbsp;Flight Details</label></div>
                <div class="col"><label style="font-size: 29px;font-family: Montserrat, sans-serif;">Origin</label>
                    <p id="origin" class="origin" name="origin" style="font-size: 28px; font-style: italic"><?php echo $origin; ?></p>
                </div>
                <div class="col"><label style="font-size: 29px;font-family: Montserrat, sans-serif;">Destination</label>
                    <p id="destination" class="destination" name="destination" style="font-size: 28px; font-style: italic"><?php echo $destination; ?></p>
                </div>
                <div class="col"><label style="font-size: 29px;font-family: Montserrat, sans-serif;">Departure Date</label>
                    <p id="dep_date" class="dep_date" name="dep_date" style="font-size: 28px; font-style: italic"><?php echo $dep_date; ?></p>
                </div>
            </div>
            <div class="row" style="height: 184px;">
                <div class="col"></div>
                <div class="col"><label style="font-size: 29px;font-family: Montserrat, sans-serif;">Seat Priority</label>
                    <p id="flight_priority" class="flight_priority" name="flight_priority" style="font-size: 28px; font-style: italic"><?php echo $flight_priority; ?></p>
                </div>
                <div class="col"><label style="font-size: 29px;font-family: Montserrat, sans-serif;">Airlines</label>
                    <p id="airlines" class="airlines" name="airlines" style="font-size: 28px; font-style: italic"><?php echo $airlines; ?></p>
                </div>
                <div class="col"></div>
            </div>
            <div class="row" style="height: 184px;"></div>
            <div class="row" style="height: 184px;">
                <div class="col d-xl-flex justify-content-xl-start align-items-xl-center"><label class="col-form-label" style="font-size: 37px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;margin-left: 10px;"><i class="fas fa-user-alt" style="font-size: 37px;"></i>&nbsp;Passengers</label></div>
                <div class="col"><label style="font-size: 29px;font-family: Montserrat, sans-serif;">Full Name</label>
                    <p id="flight_priority" class="flight_priority" name="flight_priority" style="font-size: 28px; font-style: italic"><?php echo $title . " " . $firstname . " " . "$lastname"; ?></p>
                </div>
                <div class="col"><label style="font-size: 29px;font-family: Montserrat, sans-serif;">Nationality</label>
                    <p id="nationality" class="nationality" name="nationality" style="font-size: 28px; font-style: italic"><?php echo $nationality; ?></p>
                </div>
                <div class="col"></div>
            </div>
            <div class="row" style="height: 184px;">
                <div class="col d-xl-flex justify-content-xl-start align-items-xl-center"><label class="col-form-label" style="font-size: 37px;font-family: Montserrat, sans-serif;font-weight: bold;font-style: normal;margin-left: 10px;"><i class="fa fa-pencil" style="font-size: 37px;"></i>&nbsp;Booking Details</label></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"><label style="font-size: 29px;font-family: Montserrat, sans-serif;">Price</label>
                    <p id="price" class="price" name="price" style="font-size: 28px; font-style: italic"><?php echo "IDR" . $price; ?></p>
                </div>
            </div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
    </section>
    <h1></h1>
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