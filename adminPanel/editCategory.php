<?php
include("php/query.php");
include("components/header.php");
if(!isset($_SESSION['adminEmail'])){
    echo "<script>location.assign('../login.php')</script>";
    }

?>

<?php
if(isset($_GET['cId'])){
    $categoryId = $_GET['cId'];
    $query = $pdo->prepare("select * from categories where id = :catId");
    $query->bindParam('catId' , $categoryId);
    $query->execute();
    $category = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($category);
}


?>
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded   mx-0">
                    <div class="col-md-6 ">             
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Category Form</h6>
                            <form method="post" enctype="multipart/form-data" >
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input value="<?php echo $category['name']?>" name="cName" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                        <small class="text-danger"><?php echo $categoryNameErr?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category Description</label>
                                   <textarea  name="cDes" class="form-control" id=""><?php echo $category['description']?></textarea>
                                   <small class="text-danger"><?php echo $categoryDesErr?></small>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category Image</label>
                                  <input name="cImage" type="file" class="form-control">
                                  <small class="text-danger"><?php echo $categoryImageNameErr?></small>
                                  <img height="100px" src="images/<?php echo $category['image']?>" alt="">
                                </div>                             
                                <button name="updateCategory" type="submit" class="btn btn-primary">Update Category</button>
                         </form>                   
                    </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php
include("components/footer.php");
?>