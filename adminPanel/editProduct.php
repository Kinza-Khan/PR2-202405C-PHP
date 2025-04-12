<?php
include("php/query.php");
include("components/header.php");
if(!isset($_SESSION['adminEmail'])){
    echo "<script>location.assign('../login.php')</script>";
    }

?>

<?php
if(isset($_GET['pId'])){
    $productId = $_GET['pId'];
    $query = $pdo->prepare("select products.id ,  products.name as pName , products.price , products.qty , products.description , products.image , categories.name as cName , categories.id as cId  from products inner join categories on products.c_id = categories.id where products.id = :pId");
    $query->bindParam('pId' , $productId);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);
    print_r($product);
    
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
                                    <input value="<?php echo $product['pName']?>" name="pName" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $productNameErr?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">product Description</label>
                                   <textarea  name="pDes" class="form-control" id=""><?php echo $product['description']?></textarea>
                                   <small class="text-danger"><?php echo $productDesErr?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">product Image</label>
                                  <input name="pImage" type="file" class="form-control">
                                  <small class="text-danger"><?php echo $productImageNameErr?></small>
                                  <img height="100px" src="images/<?php echo $product['image']?>" alt="">
                                </div>  
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">product Price</label>
                                    <input value="<?php echo $product['price']?>" name="pPrice" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $productPriceErr?></small>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">product Quantity</label>
                                    <input value="<?php echo $product['qty']?>" name="pQuantity" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $productQuantityErr?></small>
                                </div>


                                <div class="mb-3">
                                <label for="">Select category</label>
                                <select class="form-control" name="cId" id="">
                                    <option value="<?php echo $product['cId']?>"><?php echo $product['cName']?></option>
                                    <?php 
                                    $query = $pdo->prepare("select * from categories where name != :cName");
                                    $query->bindParam('cName' ,$product['cName']);
                                    $query->execute();
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
                                <button name="updateProduct" type="submit" class="btn btn-primary">Add product</button>
                         </form>                   
                    </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php
include("components/footer.php");
?>