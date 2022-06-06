<?php
  include_once 'backend/Database.php';
  if(isset($_POST['save']))
  {    
       $sku = mysqli_real_escape_string($conn, $_POST['sku']);
       $price = mysqli_real_escape_string($conn, $_POST['price']);
       $name = mysqli_real_escape_string($conn, $_POST['name']);
       $type = mysqli_real_escape_string($conn, $_POST['type']);
       $size = mysqli_real_escape_string($conn, $_POST['size']);
       $weight = mysqli_real_escape_string($conn, $_POST['weight']);
       $length = mysqli_real_escape_string($conn, $_POST['length']);
       $height = mysqli_real_escape_string($conn, $_POST['height']);
       $width = mysqli_real_escape_string($conn, $_POST['width']);
       $sql = "INSERT INTO products (sku,price,name,type,size,weight,length,height,width)
       VALUES ('$sku','$price','$name','$type','$size','$weight','$length','$height','$width')";
       if (mysqli_query($conn, $sql)) {
          
          header("Location: index.php?product=added");
       } else {
          echo "Error: " . $sql . ":-" . mysqli_error($conn);
          header("Location: add-product.php?product=Not-added");
       }
       mysqli_close($conn);
      
  }
    ?>