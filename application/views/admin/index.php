<script type="text/javascript" src="<?= base_url();?>assets/jquery/jquery-3.4.1.min.map"></script>
	<style>
		.row {
			background: white;
			border-radius:20px;
		}
	</style>
 <div class="container mt=5">
 	<center>
 		<br><br> <br>
  	<div class="row">
  		<div class="col-md-4 col-md-offset-4" class="main"><br>
        <h4 class="mt-3">Login Admin</h4>
        <hr>
            
	                   <form method="post" action="<?= base_url();?>admin/login">
                          <div class="form-group">                  
                           <input type="text" class="form-control" placeholder="Email" name="email_admin" autofocus autocomplete="off">
                          </div>
                          <div class="form-group">                  
                           <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
                          </div>
                        
                            <br>
                            <button type="submit" class="form btn btn-danger text-light mt-3" style="width: 360px; border-radius: 10px" name="masuk">Login</button>
                        </form>      
              <hr> 
          </div>
        </div>
    </div>
