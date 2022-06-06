<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

</head>
<style>

</style>
<body>
<h1>Add Product</h1>
<hr>
<br>
<strong> <p1>Add a new product to the list:</p></strong>

<p></p>

        <div class="form-wrapper">
        <div class="form">
            <form method="post" action="add-data.php" id='form'>
                
               <div> <label for="sku">SKU</label>
                <input type="text" id="formbox" name="sku" placeholder="#sku" required>
                <br>
                <br>
               </div>
               <div>
                <label for="Name">Name</label>
                <input type="text" id="formbox" name="name" placeholder="#name" required>
               <br>
               <br>
            </div>
               <div class="harddrive">
                <label for="price">Price</label>
                <input type="number" id="formbox" name="price" placeholder="#price" required><br>
                <br>
                <br>   
            </div>
            <label>Type Switcher</label>
                <select class="switcher" id="type" name="type" onchange="">
                    <option value="">Choose type</option>
                    <option value="Harddrive">Hard drive</option>
                    <option value="Book">Book</option>
                    <option value="Furniture">Furniture</option>
                    
                </select></div>
                
                <br>
                <script>
        $("select").on("change", function() {
        $(this).nextAll("input,label,br").remove();
        if ($(this).prop("value") === "Harddrive") {
            $(this).after("</br></br><label class='choice' for='size'>Size in (MB): </label>" +
                           "<input class='choice' type='text' name='size' value='' size='10'/>"
                           );
        }
        if ($(this).prop("value") === "Book") {
            $(this).after("</br></br><label class='choice' for='weight'>Weight in (KG): </label>" +
                           "<input class='choice' type='text' name='weight' size='10'/>"
                           
                           );
        }
        if ($(this).prop("value") === "Furniture") {
            $(this).after("</br></br><label class='choice' for='length'>Length in (CM): </label>" +
                           "<input class='choice' type='text' name='length' size='10'/>" +
                           "</br></br><label class='choice' for='height'>Height in (CM): </label>" +
                           "<input class='choice' type='text' name='height' size='10'/>" +
                           "</br></br><label class='choice' for='width'>Width in (CM): </label>" +
                           "<input class='choice' type='text' name='width' size='10'/>" 
                           
                           );
        }
       else {
            $(this).after(
                           );
             }
    });</script>
    <div class="btndiv"><button class="btn" type="submit"  value="submit" name="save">Save</button>
    <a class="btn1" href="index.php">Back</a>   </div>           
</form>
  </div>
  </div>
      <style>
          .fieldbox {
            display: none;
          }
      </style>         
                
    </body>
    
    </html>