<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
    $id = $_GET['id'];

    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
    
    $query = "DELETE from agenda where id='$id' and data_aula >= CURRENT_DATE";
    $delete = mysqli_query($connect, $query);
    
    if($delete){
        echo"<script language='javascript' type='text/javascript'>;window.location.href='listaAula.php'</script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>alert('Aula');window.location.href='listaAula.php'</script>";
    }
?>
    </body>
</html>
