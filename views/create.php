<?php
    $title = "Add student";

    ob_start();
?>
<style>
        form{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items:center;
            padding-top:2%;
            color:white;
        }
        input{
            width: 50%;
        }
        button{
            width: 20%;
        }
</style>
<form method="post" action="store.php">
        <lable for="name">Full name</lable><br>
        <input type="text" id="name" name="name"><br>

        <lable for="email">Email</lable><br>
        <input type="email" id="eamil" name="email"><br>

        <button type="submit" name="ajouter">ADD</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>
