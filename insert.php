<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ragister</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($name) && isset($department) && $phone){
                include_once "connection.php";
                $req = mysqli_query($con , "INSERT INTO Employe VALUES(NULL, '$name', '$department','$phone')");
                if($req){
                    header("location: index.php");
                }else {
                    $message = "employe a delete";
                }

           }else {
               $message = "there some error !";
           }
       }
    
    ?>
    <div class="form">
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
        <tr>
                        <td> <input type="text" name="name"></td>
                        <td><input type="text" name="department"></td>
                        <td> <input type="number" name="phone"></td>
                        <td>
                           <button type="submit"  name="button"> <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a></button>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    </form>
       
    </div>
</body>
</html>