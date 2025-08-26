<?php

// including connect file
include('./includes/connect.php');

// getting products
function getproducts(){
                  global $con;

                  //conditon to check isset or not

                  if(!isset($_GET['categories'])){
                    if(!isset($_GET['brand'])){

                  $select_query = "select * from `products` order by rand() limit 0,9";
                  $result_query = mysqli_query($con,$select_query);
                  while($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];

                    echo   "<div class='col-md-4'>
                                  <div class='card'>
                                      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                                      <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text'>$product_description.</p>
                                        <p class='card-text'>Price: $product_price. 00</p>
                                        <a href='#' class='btn btn-info'>Add To Card</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More ..</a>
                                      </div>
                                  </div>
                              </div>";
                  }
}
   }

                  }

                  // getting all products

                  function get_all_products(){
                     global $con;

                  //conditon to check isset or not

                  if(!isset($_GET['categories'])){
                    if(!isset($_GET['brand'])){

                  $select_query = "select * from `products` order by rand()";
                  $result_query = mysqli_query($con,$select_query);
                  while($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];

                    echo   "<div class='col-md-4'>
                                  <div class='card'>
                                      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                                      <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text'>$product_description.</p>
                                        <p class='card-text'>Price: $product_price. 00</p>
                                        <a href='#' class='btn btn-info'>Add To Card</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More ..</a>
                                      </div>
                                  </div>
                              </div>";
                  }
}
   }

                  }

                  // getting unic categories

                  function get_unique_categories(){
                  global $con;

                  //conditon to check isset or not

                  if(isset($_GET['categories'])){
                  $categories_id = $_GET['categories'];
                  $select_query = "select * from `products` where `category_id` = $categories_id ";
                  $result_query = mysqli_query($con,$select_query);
                  $num_of_rows = mysqli_num_rows($result_query);
                  if($num_of_rows == 0){
                    echo "<h2 class = 'text-center text-danger'>No Stock For This Category !</h2>";
                  }

                  while($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];

                    echo   "<div class='col-md-4'>
                                  <div class='card'>
                                      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                                      <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text'>$product_description.</p>
                                        <p class='card-text'>Price: $product_price. 00</p>
                                        <a href='#' class='btn btn-info'>Add To Card</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More ..</a>
                                      </div>
                                  </div>
                              </div>";
                  }
}
   }

    // getting unic brands

                  function get_unique_brands(){
                  global $con;

                  //conditon to check isset or not

                  if(isset($_GET['brand'])){
                  $brand_id = $_GET['brand'];
                  $select_query = "select * from `products` where `brand_id` = $brand_id ";
                  $result_query = mysqli_query($con,$select_query);
                  $num_of_rows = mysqli_num_rows($result_query);
                  if($num_of_rows == 0){
                    echo "<h2 class = 'text-center text-danger'>No Stock For This Brand !</h2>";
                  }

                  while($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];

                    echo   "<div class='col-md-4'>
                                  <div class='card'>
                                      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                                      <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text'>$product_description.</p>
                                        <p class='card-text'>Price: $product_price. 00</p>
                                        <a href='#' class='btn btn-info'>Add To Card</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More ..</a>
                                      </div>
                                  </div>
                              </div>";
                  }
}
   }


        // displaying brands in sidenav
function getbrands(){
              global $con;
              $select_brands = "select * from `brands`";
              $results_brands = mysqli_query($con,$select_brands);
              
              while( $row_data = mysqli_fetch_assoc($results_brands)){
                $brand_title = $row_data['brands_name'];
                $brand_id = $row_data['brands_id'];
                
                echo "
                <li class='nav-item'><a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a></li>
                ";
              }
}

// displaying categories in sidenav
function getcategories(){
              global $con;
              $select_category = "select * from `categories`";
              $result_category = mysqli_query($con,$select_category);
              
              while( $row_data = mysqli_fetch_assoc($result_category)){
                $categories_title = $row_data['categories_name'];
                $categories_id = $row_data['categories_id'];
                
                echo "
                <li class='nav-item'><a href='index.php?categories=$categories_id' class='nav-link text-light'>$categories_title</a></li>

                ";
              }
}

  // searching products funtion
  function search_products(){
                  global $con;
                  $search_data_value = $_GET['search_data'];
                  $search_query = "select * from `products` where product_keyword like '%$search_data_value%'";
                  $result_query = mysqli_query($con,$search_query);
                  $num_of_rows = mysqli_num_rows($result_query);
                  if($num_of_rows == 0){
                    echo "<h2 class='text-center text-danger'>No Results Match. No Products Found On This Category !</h2>";
                  }

                  while($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    
                    echo   "<div class='col-md-4'>
                                  <div class='card'>
                                      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                                      <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text'>$product_description.</p>
                                        <p class='card-text'>Price: $product_price. 00</p>
                                        <a href='#' class='btn btn-info'>Add To Card</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More ..</a>
                                      </div>
                                  </div>
                              </div>";
                  }
  }
?> 
