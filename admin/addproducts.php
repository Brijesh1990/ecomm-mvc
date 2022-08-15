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
<h6 class="mb-4">Add Products</h6>
<form method="post" enctype="multipart/form-data">


<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Select Category Name *</label>
<select type="text" name="catname" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp">

<option value="">-select category-</option>
<?php
foreach($shwcat as $shwcat1)
{ 
?>
<option value="<?php echo $shwcat1["catid"];?>"><?php echo $shwcat1["categoryname"];?></option>
<?php 
}
?>
</select>

</div>


<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Select Category Name *</label>
<select type="text" name="subcatname" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp">

<option value="">-select subcategory-</option>
<?php
foreach($shwsubcat as $shwsubcat1)
{ 
?>
<option value="<?php echo $shwsubcat1["subcatid"];?>"><?php echo $shwsubcat1["subcategoryname"];?></option>
<?php 
}
?>
</select>
</div>


<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Productname *</label>
<input type="text" name="pname" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Upload Image *</label>
<input type="file" name="pimg" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Old Price *</label>
<input type="text" name="oprice" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Offer price *</label>
<input type="text" name="nprice" class="form-control" id="exampleInputEmail1"
aria-describedby="emailHelp">
</div>


<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Added Date</label>
<input type="date" name="added_date" class="form-control" id="exampleInputPassword1">

</div>


<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Descriptions</label>
<textarea  name="pdesc" class="form-control" id="exampleInputPassword1"></textarea>

</div>

<button type="submit" name="addprod" class="btn btn-primary">Add Products</button>
</form>
</div>
</div>


<!-- manage category -->

<div class="bg-secondary rounded h-100 p-4">
<h6 class="mb-4">Manage All Products</h6>
<table class="table">
<thead>
<tr>
<th scope="col">#Id</th>
<th scope="col">CategoryName</th>
<th scope="col">SubCategoryName</th>
<th scope="col">Pname</th>
<th scope="col">Image</th>
<th scope="col">OldPrice</th>
<th scope="col">NewPrice</th>
<th scope="col">AddedDate</th>
<th scope="col">Descriptions</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
foreach($shwprod as $row)
{ 
?>
<tr>
<th scope="row"><?php echo $row["pid"];?></th>
<td><?php echo $row["categoryname"];?></td>
<td><?php echo $row["subcategoryname"];?></td>
<td><?php echo $row["pname"];?></td>
<td><img src="<?php echo $row["pimage"];?>" class="img-fluid" width="85px" height="85px"></td>
<td><?php echo $row["oldprice"];?></td>
<td><?php echo $row["offerprice"];?></td>
<td><?php echo $row["added_date"];?></td>
<td><?php echo $row["description"];?></td>
<td><a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a> | <a href="" class="btn btn-info btn-sm"><i class="bi bi-pencil"></i></a> </td>
</tr>
<?php 
}
?>
</tbody>
</table>
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
