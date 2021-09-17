<!doctype html>
<html lang="fr
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style> <?php require ('css_multiplicator.css')?> </style>
    <title>Multiplicator</title>
</head>
<body>

    <?php
        if (!isset($_POST['number'])) {
            include ('form.php');
        } else {
            include ('results.php');
        }
    ?>
<footer class="footer">

</footer>
</body>
</html>