<?php
include("php/query.php");
include("components/header.php");
if(!isset($_SESSION['adminEmail'])){
    echo "<script>location.assign('../login.php')</script>";
    }
?>
  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded   mx-0">
                    <div class="col-md-6 ">             
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Product Form</h6>
                            <form method="post" enctype="multipart/form-data" >
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">product Name</label>
                                    <input value="<?php echo $productName?>" name="pName" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $productNameErr?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">product Description</label>
                                   <textarea  name="pDes" class="form-control" id=""><?php echo $productDes?></textarea>
                                   <small class="text-danger"><?php echo $productDesErr?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">product Image</label>
                                  <input name="pImage" type="file" class="form-control">
                                  <small class="text-danger"><?php echo $productImageNameErr?></small>
                                </div>  
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">product Price</label>
                                    <input value="<?php echo $productPrice?>" name="pPrice" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $productPriceErr?></small>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">product Quantity</label>
                                    <input value="<?php echo $productQuantity?>" name="pQuantity" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $productQuantityErr?></small>
                                </div>


                                <div class="mb-3">
                                <label for="">Select category</label>
                                <select class="form-control" name="cId" id="">
                                    <option>Select</option>
                                    <?php 
                                    $query = $pdo->query("select * from categories");
                                    $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($allCategories as $category){
                                    ?>
                                    <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <small class="text-danger"><?php echo $categoryIdErr?></small>
                                </div>
                                <button name="addProduct" type="submit" class="btn btn-primary">Add product</button>
                         </form>                   
                    </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
















<?php
include("components/footer.php");
?>