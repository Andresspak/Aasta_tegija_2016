<?php include_once('system/main.php');

$result = $db->query("SELECT * FROM booking");

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""> <!-- TODO: page description -->

    <title>Meliss</title>

    <link rel="shortcut icon" type="image/x-icon" href="res/img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background: url("img/restaurant-bg.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <form id="bookingForm" role="form" class="clearfix">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact-name" class="sr-only">Name</label>
                    <input type="text" class="form-control input-lg" id="contact-firstname" name="client_name"
                           placeholder="Sinu eesnimi">
                </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact-name" class="sr-only">Name</label>
                    <input type="text" class="form-control input-lg" id="contact-lastname"
                           placeholder="Sinu perenimi">
                </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact-email" class="sr-only">Email</label>
                    <input type="email" class="form-control input-lg" id="contact-email" name="email"
                           placeholder="Sinu email">
                </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact-name" class="sr-only">Name</label>
                    <input type="text" class="form-control input-lg" id="contact-nr" name="phone_nr"
                           placeholder="Sinu number">
                </div><!-- form-group -->
            </div><!-- col -->

            <div class='col-sm-6' id="sandbox-container">
                <div class="form-group">
                    <div class="input-group date">
                        <input type="text" name="chosen_date" class="form-control input-lg" placeholder="Kuupäev"><span
                            class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                    </div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div class="form-group">
                    <select class="input-group form-control input-lg" name="time_id">
                        <option value="AL" disabled selected="selected" hidden>Vali kellaaeg</option>
                        <option value="1130">11:30</option>
                        <option value="1145">11:45</option>
                        <option value="1200">12:00</option>
                        <option value="1215">12:15</option>
                        <option value="1230">12:30</option>
                        <option value="1245">12:45</option>
                        <option value="1300">13:00</option>
                    </select>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class="form-group">
                    <select class="input-large form-control input-lg" name="seat_nr">
                        <option value="AL" selected="selected" disabled hidden>Vali inimeste arv</option>
                        <?php for ($n = 1; $n <= 26; $n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class="form-group">
                    <select class="input-large form-control input-lg" name="appetizers">
                        <option value="AL" selected="selected" disabled hidden>Vali eelroogade arv</option>
                        <?php for ($n = 0; $n <= 26; $n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class="form-group">
                    <select class="input-large form-control input-lg" name="main_dishes">
                        <option value="AL" selected="selected" disabled hidden>Vali põhiroogade arv</option>
                        <?php for ($n = 0; $n <= 26; $n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class="form-group">
                    <select class="input-large form-control input-lg" name="desserts">
                        <option value="AL" selected="selected" disabled hidden>Vali järelroogade arv</option>
                        <?php for ($n = 0; $n <= 26; $n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div><!-- row -->
        <br>
        <div class="col-sm-offset-3 col-sm-6 btn-warning" id="error"
             style="background-color: rgba(255, 255, 255, 0.8); border-radius: 5px;">
            <h3 style="text-align: center; color: red;" id="errorMsg">ERROR</h3>
        </div>
        <input id="submitBtn" type="submit" class="btn btn-warning btn-lg pull-right" value="Broneeri &raquo;">
    </form>
</div>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="locales/bootstrap-datepicker.et.min.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {
        $('#sandbox-container .input-group.date').datepicker({
            weekStart: 1,
            language: "et",
            orientation: "bottom auto",
            keyboardNavigation: false,
            daysOfWeekDisabled: "0,1,2,5,6",
            autoclose: true
        });
    });

    $('#error').hide();

    $('#submitBtn').on('click', function () {
        $.post("system/book.php", $('#bookingForm').serializeArray())
            .done(function (res) {
                $('#error').show();
                $('#errorMsg').html(res);
            });

        return false;
    });
</script>
</html>