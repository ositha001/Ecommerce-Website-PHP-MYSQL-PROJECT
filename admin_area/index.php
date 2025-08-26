<!DOCTYPE html>
<html lang="en">
     <!-- Boostrap CSS Link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

 <!-- Font Awosome Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Css -->
     <link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Area</title>
</head>
<body>

<style>
    .logo{
    width: 3%;
    height: 6%;
    margin-right: 20px;
}

.admin_image{
    width: 100px !important;
     object-fit: contain !important;
}

button{
    border: none !important;
    font-size:20px;
}
</style>

    <!-- Navbar -->
    <div class="container-fluid p-0">

        <!-- First Child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
         <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
         </div>

         <!-- Third Child -->
          <div class="row">
            <div class="col-md-12 bg-secondary d-flex p-1 align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/admin.png." class="admin_image" alt=""></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button g-1 text-center">
                    <button class="btn-lg my-2 bg-success"><a href="insert_product.php" class="nav-link text-white my-1">Insert Products</a></button>        
                    <button class="bg-success "><a href=".php" class="nav-link text-white my-1">View Product</a></button>        
                    <button class="bg-success mt-2"><a href="index.php?insert_category" class="nav-link text-white my-1">Insert Categories</a></button>        
                    <button class="bg-success mt-2"><a href="" class="nav-link text-white my-1">View Categories</a></button>        
                    <button class="bg-success mt-2"><a href="index.php?insert_brand" class="nav-link text-white my-1">Insert Brands</a></button>        
                    <button class="bg-success mt-2"><a href="" class="nav-link text-white my-1">View Brands</a></button>        
                    <button class="bg-success mt-2"><a href="" class="nav-link text-white my-1">All Orders</a></button>        
                    <button class="bg-success mt-2"><a href="" class="nav-link text-white my-1">All Payments</a></button>        
                    <button class="bg-success mt-2"><a href="" class="nav-link text-white my-1 ">List Users</a></button>        
                    <button class="bg-success mt-2"><a href="" class="nav-link text-white my-1 ">Log Out</a></button>        
                </div>
            </div>
          </div>

          <!-- Forth Child -->
           <div class="container my-5">
                <?php
                if(isset($_GET['insert_category'])){
                    include('insert_categories.php');
                }
                if(isset($_GET['insert_brand'])){
                    include('insert_brand.php');
                }
                ?>
           </div>

           <!-- Last child -->
      <div class="bg-info p-3 text-center">
        <p>All rights reserved @- Designed By Ositha-2025</p>
      </div>

    </div>
</body>
</html>