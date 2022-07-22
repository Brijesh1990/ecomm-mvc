

<!-- content start here -->

<section class="content">
    <div class="container mt-5">
        <h3 class="bg-dark text-white p-2 text-center">Create Your Account Here</h3>
        <hr class="border border-2 border-dark w-50">

        <div class="row">
            <div class="col-md-5">

              <img src="<?php echo $baseurl;?>images/signup.gif" class="img-fluid w-100" style="width:90%; height:350px">

            </div>
        

            <div class="col-md-7">

        <form method="post">
            <div class="form-group">
                <input type="text" name="fname" placeholder="FirstName *" class="form-control">
            </div>
            
            <div class="form-group">
                <input type="text" name="lname" placeholder="LastName *" class="form-control">
            </div>

            
            <div class="form-group">
                <input type="text" name="email" placeholder="Email *" class="form-control">
            </div>

            
            <div class="form-group">
                <input type="date" name="dob" placeholder="DOB *" class="form-control">
            </div>


            
            <div class="form-group">
                <input type="text" name="edu" placeholder="Education *" class="form-control">
            </div>


            
            <div class="form-group">
                <textarea  name="address" placeholder="Address *" class="form-control"></textarea>
            </div>


            
            <div class="form-group">
                <input type="submit" name="submit" value="Register"  class="btn btn-dark btn-sm text-white">

                <input type="reset" name="reset" value="Reset"  class="btn btn-danger btn-sm text-white">
            </div>


        </form>

      </div>
  </div>
</div>

</section>

