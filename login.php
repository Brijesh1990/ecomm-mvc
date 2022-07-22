
<!-- modal for apply now -->

<div class="modal fade" id="log" role="dialog">
  <div class="modal-dialog p-4">
      <div class="modal-content p-5">
          
        <h5 class="bg-dark text-white p-2 text-center">Login Form</h5>
        <hr class="border border-2 border-dark w-50">

        <form method="post">
         

            
            <div class="form-group">
                <input type="text" name="email" placeholder="Email *" class="form-control">
            </div>

            
            <div class="form-group">
                <input type="password" name="pass" placeholder="Password *" class="form-control">
            </div>


            
            <div class="form-group">
                <input type="submit" name="submit" value="SignIn"  class="btn btn-dark btn-sm text-white">

              <b><a href="<?php echo $mainurl;?>forget-password">Forget Password</a></b>
            </div>

            
            <div class="form-group">
           
            <b>Don't have an Account ?<a href="<?php echo $mainurl;?>register">Create Account Here</a></b>
          </div>



        </form>

      </div>
  </div>
</div>