<?php /* Contact template */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title><?php echo $page->title ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


    <style type="text/css">
        /* google map div */
        div#map {
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>
<?php echo $modules->get('MearchContactUsAndMapHelper')->renderGoogleLocationMap();?>
</body>
</html>