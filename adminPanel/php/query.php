<?php
include("dbcon.php");
session_start();
$categoryName = $categoryDes = $categoryImageName = "" ;
$categoryNameErr = $categoryDesErr = $categoryImageNameErr = "" ;
if(isset($_POST['addCategory'])){
    $categoryName = $_POST['cName'];
    $categoryDes = $_POST['cDes'];
    $categoryImageName = strtolower($_FILES['cImage']['name']);
    $categoryImageTmpName =  $_FILES['cImage']['tmp_name'];
    $extension = pathinfo($categoryImageName,PATHINFO_EXTENSION);
    $destination = "images/".$categoryImageName ;
    if(empty($categoryName)){
        $categoryNameErr = "Category Name is Required";
    }
    if(empty($categoryDes)){
        $categoryDesErr = "Category Description is Required";
    }
    if(empty($categoryImageName)){
            $categoryImageNameErr = "Image is Requried";
    }
    else{
        $format = [ "jpg" , "png" , "jpeg" , "webp" , "svg"];
        if(!in_array($extension,$format)){
            $categoryImageNameErr = "Invalid Extension";
        }
    }
    if(empty($categoryNameErr) && empty($categoryDesErr) && empty($categoryImageNameErr)){
        if(move_uploaded_file($categoryImageTmpName,$destination)){
            $query = $pdo->prepare("insert into categories (name , image, description) values (:name , :image , :des)");
            $query->bindParam('name',$categoryName);
            $query->bindParam('des',$categoryDes);
            $query->bindParam('image',$categoryImageName);
            $query->execute();
            echo "<script>alert('category added');</script>";
        }
    }
}

// update category
if(isset($_POST['updateCategory'])){
    $categoryId = $_GET['cId'];
    $categoryName = $_POST['cName'];
    $categoryDes = $_POST['cDes'];
    $query = $pdo->prepare("update categories set name = :cName , description = :cDes where id = :cId");
    if(!empty($_FILES['cImage']['name'])){
        $categoryImageName = $_FILES['cImage']['name'];
        $categoryImageTmpName = $_FILES['cImage']['tmp_name'];
        $extension = pathinfo($categoryImageName,PATHINFO_EXTENSION);
        $destination = "images/".$categoryImageName ;
        $format = ["jpg" , "png" , "jpeg" , "webp" , "svg"] ;
        if(in_array($extension , $format)){
                    if(move_uploaded_file($categoryImageTmpName, $destination)){    
                        $query = $pdo->prepare("update categories set name = :cName , description = :cDes ,image = :cImage where id = :cId");
                        $query->bindParam('cImage',$categoryImageName);
                    }    
        }
        else{
            echo "<script>alert('invalid extension')</script>";
        }   
    }
    $query->bindParam('cName',$categoryName);
    $query->bindParam('cDes',$categoryDes);
    $query->bindParam('cId',$categoryId);
    $query->execute();
    echo "<script>alert('category updated');location.assign('viewCategory.php')</script>";


}

// remove
if(isset($_GET['categoryId'])){
    $categoryId = $_GET['categoryId'];
    $query = $pdo->prepare("delete from categories where id = :cId");
    $query->bindParam('cId',$categoryId);
    $query->execute();
    echo "<script>alert('category deleted');location.assign('viewCategory.php')</script>";
}


// add product 
$productName = $productPrice = $productDes = $productQuantity = $productImageName = $categoryId = "" ;
$productNameErr = $productPriceErr = $productDesErr = $productQuantityErr = $productImageNameErr = $categoryIdErr = "" ;
if(isset($_POST['addProduct'])){
        $productName = $_POST['pName'];
        $productPrice = $_POST['pPrice'];
        $productQuantity = $_POST['pQuantity'];
        $productDes = $_POST['pDes'];
        $categoryId = $_POST['cId'];
        $productImageName = $_FILES['pImage']['name'];
        $productImageTmpName = $_FILES['pImage']['tmp_name'];
        $extension = pathinfo($productImageName,PATHINFO_EXTENSION);
        $destination = "images/".$productImageName ;
        if(empty($productName)){
                $productNameErr = "Product Name is Required" ;
        }
        if(empty($productPrice)){
            $productPriceErr = "Product Price is Required" ;
    }
    if(empty($productDes)){
        $productDesErr = "Product Description is Required" ;
}
if(empty($productQuantity)){
    $productQuantityErr = "Product Quantity is Required" ;
}
if(empty($categoryId)){
    $categoryIdErr = "category is Required" ;
}
if(empty($productImageName)){
    $productImageNameErr = "Product Image is Required" ;
}
else{
    $format = ["jpg" ,"png" ,"jpeg" ,"webp"] ;
    if(!in_array($extension ,$format)){
            $productImageNameErr = "Invalid Extension" ;
    }
}
if(empty($productNameErr) && empty($productDesErr) && empty($productPriceErr) && empty($productQuantityErr) && empty($categoryIdErr) && empty($productImageNameErr) ){
        if(move_uploaded_file($productImageTmpName ,$destination)){
            $query = $pdo->prepare("insert into products (name, price , qty , description , image , c_id) values (:name, :price , :qty , :description , :image , :c_id)");
            $query->bindParam('name',$productName);
            $query->bindParam('price',$productPrice);
            $query->bindParam('description',$productDes);
            $query->bindParam('qty',$productQuantity);
            $query->bindParam('c_id',$categoryId);
            $query->bindParam('image',$productImageName);
            $query->execute();
            echo "<script>alert('product added');location.assign('viewProducts.php')</script>";

        }
}
}

?>