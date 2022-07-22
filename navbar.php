<nav class="navbar navbar-expand-md bg-dark">
    <!--logo here  -->
   <a href="<?php echo $mainurl;?>" class="navbar-brand text-white">Laravel App <i class="bi bi-webcam"></i></a>
   <!-- toggle navbar collapsible navbar -->
   <button type="button" class="btn btn-lg navbar-toggler btn-dark" data-toggle="collapse" data-target="#coll">
       <span class="bi bi-list text-white" style="font-size:25px"></span>
   </button>
   
   <div class="collapse navbar-collapse" id="coll">
      <ul class="navbar-link">
        <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
          <li><a href="<?php echo $mainurl;?>"> Home</a></li>
          <li><a href="#">Furnitures</a></li>
          <li><a href="#">Kids Items</a></li>
          <li><a href="#">Electronics</a></li>
          <li><a href="#">Portfolio</a></li>
         
          <li><a href="<?php echo $mainurl;?>Contact-us">Contact</a></li> 
         <!-- <li><a href="">Cart <span class="badge badge-lg badge-danger">0</span></a></li>-->
          <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Account <i class="bi bi-person"></i></a>
          
  
            <ul class="dropdown-menu bg-dark">
                <li><a href="#" data-toggle="modal" data-target="#log">Login <i class="bi bi-person"></i></a>  </li>
                <li><a href="register.html">Register  <i class="bi bi-person"></i></a></li>
              </ul>
          
          </li>-->
          <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
          <li><a href="#" data-toggle="modal" data-target="#log">Login</a>  </li>
          <li><a href="<?php echo $mainurl;?>register">Register </a></li>
      </ul> 
      </div> 
  
  </nav>
  
  
  