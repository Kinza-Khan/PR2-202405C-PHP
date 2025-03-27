<?php
include("php/query.php");
include("components/header.php");

?>
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded   mx-0">
                    <div class="col-md-6 ">
              
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Category Form</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category Description</label>
                                   <textarea name="" class="form-control" id=""></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category Image</label>
                                  <input type="file" class="form-control">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Add Category</button>
                         </form>                   
                    </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->

<?php
include("components/footer.php");
?>