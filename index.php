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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link
        href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
        }
    </style>
    <script>

    </script>
</head>
<body>
<div class="container">
    <form role="form" class="clearfix">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact-name" class="sr-only">Name</label>
                    <input type="text" class="form-control input-lg" id="contact-firstname" placeholder="Sinu eesnimi">
                </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact-name" class="sr-only">Name</label>
                    <input type="text" class="form-control input-lg" id="contact-lastname" placeholder="Sinu perenimi">
                </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact-email" class="sr-only">Email</label>
                    <input type="email" class="form-control input-lg" id="contact-email" placeholder="Sinu email">
                </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="contact-name" class="sr-only">Name</label>
                    <input type="text" class="form-control input-lg" id="contact-nr" placeholder="Sinu number">
                </div><!-- form-group -->
            </div><!-- col -->
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker3'>
                        <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker3').datetimepicker({
                        format: 'LL',
                        daysOfWeekDisabled: [0, 1, 2, 5, 6]
                    });
                });
            </script>
            <div class='col-sm-6'>
                <div class="form-group">
                    <select class="input-group form-control">
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
                    <select class="input-large form-control">
                        <option value="AL" selected="selected" disabled hidden>Vali inimeste arv</option>
                        <?php for ($n = 1; $n <= 26; $n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class="form-group">
                    <select class="input-large form-control">
                        <option value="AL" selected="selected" disabled hidden>Vali eelroogade arv</option>
                        <?php for ($n = 1; $n <= 26; $n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class="form-group">
                    <select class="input-large form-control">
                        <option value="AL" selected="selected" disabled hidden>Vali põhiroogade arv</option>
                        <?php for ($n = 1; $n <= 26; $n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class='col-sm-3'>
                <div class="form-group">
                    <select class="input-large form-control">
                        <option value="AL" selected="selected" disabled hidden>Vali järelroogade arv</option>
                        <?php for ($n = 1; $n <= 26; $n++) { ?>
                            <option value="<?php echo $n; ?>"><?php echo $n; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div><!-- row -->
        <br>
        <input type="submit" class="btn btn-info btn-lg pull-right" value="Broneeri &raquo;">
    </form>
</div>
</body>

<script type="text/javascript" src="res/js/jquery-1.12.0.min.js"></script>
<script src="res/js/bootstrap-3.3.1.min.js"></script>
<script src="res/js/moment-with-locales.js"></script>
<script src="res/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">
    $('#datetimepicker3').datetimepicker({
        format: 'LL',
        daysOfWeekDisabled: [0, 1, 2, 5, 6]
    });
</script>
</html>