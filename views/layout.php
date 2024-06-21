<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        table{
            width: 100%;
        }
        tr:hover{
            background-color: black;
            color: white;
        }
        td{
            padding:10px;
        }
    </style>
</head>
<body style="background-color:rgb(20,110,118);width:100%;min-height:100vh">
    <?php require_once 'include/nav.php' ?>
    <h1 align="center"><?= $title ?></h1>
    <hr>
    <?= $content ?>
</body>
</html>
