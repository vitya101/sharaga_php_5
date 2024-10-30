<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>index</title>
</head>
<body>
    <?php
        require_once "$_SERVER[DOCUMENT_ROOT]/services/getFile.service.php";
        $header = getFile("$_SERVER[DOCUMENT_ROOT]/views/components/header.php");
        echo $header;
    ?>
	<p>index</p>
</body>
</html>