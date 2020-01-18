<?php require_once 'Application/functions.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" style="Application/Style/style.css">
</head>
<body>
<?php 
    require_once 'Application/Template/header.html';
    $jsonfile = file_get_contents("Application/Datas/photos.json");
    if(isset($_GET["page"]))
    {
        $page = $_GET["page"];
        #echo "<br>Az átvett érték: " $page;

        switch ($page) {
            case 'home':
                require_once 'Application/Core/home.php';
             break;

            case 'upload':
                require_once 'Application/Core/add.php';
             break;

            default:
            break;
        }
    }
    else
    {
        echo "Ez az értékadás nélküli rész...";
    }
?>
</body>
</html>