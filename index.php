<?php
include_once 'token.php';
include_once 'number.php';

use oop\oopgeneratetoken\number\Number;
use oop\oopgeneratetoken\token\token;

if(isset($_POST['btn']))
{

    $length=$_POST['length'];

    switch($_POST['btn']){
        
        case 'generate-token':

            $obj=new token($length);
    
            $obj->geneateToken();

            break;

        case 'generate-number':

            $obj1=new Number($length);
    
            $obj1->generateNumber();

            break;
    }
   
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
       crossorigin="anonymous">
    <title>generate token</title>
</head>
<body>
 <div class="col-md-8  m-auto mt-5">
        <form action="" method="post" class="form-group">
            <input type="number" name="length" class="form-control mt-5">
            <input type="submit"  class="form-control btn btn-dark btn-block mt-5" 
            value="generate-token" name="btn">
            <input type="submit"  class="form-control btn btn-success btn-block mt-5" 
            value="generate-number" name="btn">
        </form>

        <?php if(isset($obj)){?>
        <span class="text-center text-danger"><?php echo $obj->getToken() ?></span>
        <?php }?>
        <?php if(isset($obj1)){?>
        <span class="text-center text-danger"><?php echo $obj1->getNumber() ?></span>
        <?php }?>
 </div>
</body>
</html>