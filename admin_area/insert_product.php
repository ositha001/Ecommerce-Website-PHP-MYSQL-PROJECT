<?php  
include('../includes/connect.php'); 
if(isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_categories'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = "true";

    // accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // accessing image tmp name
    $tmp_image1 = $_FILES['product_image1']['tmp_name'];
    $tmp_image2 = $_FILES['product_image1']['tmp_name'];
    $tmp_image3 = $_FILES['product_image1']['tmp_name'];

    // checking empty condition

    if($product_title == '' or $description == '' or $product_keywords == '' or $product_category == '' 
    or $product_brands == '' or $product_price == '' or $product_image1 == '' or $product_image2 == '' 
    or $product_image3 == ''){
        echo "<script>alert('Please fill all the avilable fields')</script>";
        exit();
    }else{
        move_uploaded_file($tmp_image1,"./product_images/$product_image1");
        move_uploaded_file($tmp_image2,"./product_images/$product_image2");
        move_uploaded_file($tmp_image3,"./product_images/$product_image3");

        //insert query
        $insert_prodoucts = "insert into `products` (product_title,product_description,product_keyword,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) 
        values ('$product_title','$description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result_query = mysqli_query($con,$insert_prodoucts);
        if($result_query){
            echo "<script>alert('Successfully Insert Into Produ FILES')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <!-- Boostrap CSS Link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
     <!-- Font Awosome Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Css -->
     <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mt-2">INSERT PRODUCTS</h1>
        <!-- form -->
         <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" required="required" palceholder="Enter Product Title" autocomplete="off">
            </div>
             <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" required="required" palceholder="Enter Product Description" autocomplete="off">
            </div>
              <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" required="required" palceholder="Enter Product Keyword" autocomplete="off">
            </div>
              <!-- catergories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" class="form-select" id="">
                    <option value="">Select a Category</option>

                    <?php 
                    
                        $select_query = "Select * from `categories`";
                        $result_query = mysqli_query($con,$select_query);
                        while($row = mysqli_fetch_assoc($result_query)){
                            $category_title = $row['categories_name'];
                            $category_id = $row['categories_id'];
                            echo "<option value='$category_id'>$category_title</option>"; 
                        }
                    
                    ?>
               
                </select>
            </div>
             <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" class="form-select" id="">
                    <option value="">Select a Brands</option>

                    <?php 
                        $select_query = "Select * from `brands`";
                        $result_query = mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $brand_title = $row['brands_name'];
                            $brand_id = $row['brands_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                    ?>

                </select>
            </div>
               <!-- Image 1 -->
            <div class="form-outline mb-5 w-50 m-auto">
                <label for="keywords" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>
               <!-- Image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="keywords" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
               <!-- Image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="keywords" class="form-label">Product Image 1</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>
               <!-- product price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="keywords" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" required="required" palceholder="Enter Product Price" autocomplete="off">
            </div>

                 <!-- product price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-success mb-3 px-3" value="Insert Products">
            </div>
         </form>
    </div>
</body>
</html>