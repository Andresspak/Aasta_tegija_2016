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

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nimi</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Kuupäev</th>
        <th>Kell</th>
        <th>Inimeste arv</th>
        <th>Eelroad</th>
        <th>Põhiroad</th>
        <th>Järelroad</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $db = new mysqli('192.168.25.128', 'root', '', 'tegija');
    $bookings = $db->query("SELECT * FROM broneering");
    while ($booking = $bookings->fetch_assoc()) {
        ?>
        <td><?php echo $booking['name']; ?></td>
        <td><?php echo $booking['email']; ?></td>
        <td><?php echo $booking['phone']; ?></td>
        <td><?php echo $booking['date']; ?></td>
        <td><?php echo $booking['time']; ?></td>
        <td><?php echo $booking['num_people']; ?></td>
        <td><?php echo $booking['first_dish']; ?></td>
        <td><?php echo $booking['main_dish']; ?></td>
        <td><?php echo $booking['last_dish']; ?></td>
    <?php } ?>
    </tbody>
</table>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

</body>
</html>