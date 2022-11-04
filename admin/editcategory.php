<?php 
if(!isset($_SESSION["aid"]))
{
    echo "<script>
    window.location='./';
    </script>";
}
?>

<!-- Content Start -->       
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  
                       <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit Category</h6>
                            <form method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text-success">Edit Category Name *</label>
                                    <input type="text" name="catname" value="<?php echo $edcat[0]["categoryname"];?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-success">Edit Added Date</label>
                                    <input type="date" value="<?php echo $edcat[0]["addeddate"];?>" name="adddate" class="form-control" id="exampleInputPassword1">

                                </div>
                                
                                <button type="submit" name="updcategory" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                

                </div>
                </div>
            </div>
            </div>
            
            <!-- Sale & Revenue End -->

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                 
                 
                </div>
            </div>
         
            <!-- Widgets End -->
