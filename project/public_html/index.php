<?php
$user = 'id18739786_root';
$password = '#(LGx+SFH/~RQDU0';
$database = 'id18739786_saghair';
$servername='localhost';
$conn = new mysqli($servername, $user,$password, $database);
if ($conn->connect_error) {
    die('Connect Error (' .
    $conn->connect_errno . ') '.
    $conn->connect_error);
}
if(isset($_POST['but_delete'])){

  if(isset($_POST['checkbox'])){
    foreach($_POST['checkbox'] as $deleteid){

      $deleteUser = "DELETE from products WHERE prod_id=".$deleteid;
      mysqli_query($conn,$deleteUser);
    }
  }
}
$sql = "SELECT * FROM products ORDER BY type ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products list</title>

</head>

<body>
	<h1>Product list</h1>
<hr>
<br>
<form method="POST" action="index.php">
  <div class="btndiv"><a class="link" href="add-product.php">
<button class="btn" name="ADD">ADD</a></button>
<button class="btn1" type="submit" name="but_delete">MASS DELETE</button>
  </div>


  <div class="container" >
  
<?php 
$count=0;
                while($products=$result->fetch_assoc())
                :
              ?>
              <div class="products" >
              
              <p>SKU: <?php echo $products['sku'];?></p>
              <p>Name: <?php echo $products['name'];?></p>
              <p>Price: <?php echo $products['price'];?></p>
            
              
              <?php if($products['type']==='Book'):?>
              <p>Weight (KG): <?= $products['weight'] ?></p>
              <?php elseif($products['type']==='Furniture'):?>
                <p>Height (CM): <?= $products['height'] ?></p>
                <p>Width (CM): <?= $products['width'] ?></p>
                <p>Length (CM): <?= $products['length'] ?></p>
                <?php elseif($products['type']==='Harddrive'):?>
                <p>Size (MB): <?= $products['size'] ?></p>
                
              <?php endif ?> 
              
              
              
              
              <input class="checkbox" name="checkbox[]" id="delete-checkbox<?php echo $count; ?>" type="checkbox" value="<?php echo $products['prod_id']; ?>">
              </div>
       <?php
       endwhile;
       ?>       
       </div>
    </section>
</body>
</html>