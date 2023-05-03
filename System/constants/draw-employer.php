
<head>
        <script src="showpass.js"></script>
        </head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
        <div class="login-box-wrapper">
                                    
        <div class="modal-header">
        <h4 class="modal-title text-center">LOOKING TO HIRE PEOPLE?</h4><br>
        <h4 class="modal-title text-center">CREATE YOUR ACCOUNT NOW!</h4>
        </div>

        <div class="modal-body">
                                                                        
        <div class="row gap-20">
                                                    

                                                        

                                                        
        <div class="col-sm-12 col-md-12">
        <?php
            include 'constants/check_reply.php';	
                                        ?>

        <div class="form-group"> 
        <label>Company Name</label>
        <input class="form-control" placeholder="Enter Company Name" name="company" required type="text"> 
        </div>
                                                        
        </div>

        <div class="col-sm-12 col-md-12">

        <div class="form-group"> 
        <label>Company Type</label>
        <input class="form-control" placeholder="Eg: Booking/Travel, Computer Software etc" name="type" required type="text"> 
        </div>
                                                        
        </div>
                                                        
        <div class="col-sm-12 col-md-12">

        <div class="form-group"> 
        <label>Email Address</label>
        <input class="form-control" placeholder="Enter Company Email" name="email" required type="text"> 
        </div>
                                                        
        </div>
                                                        
        <div class="col-sm-12 col-md-12">
                                                        
        <div class="form-group"> 
        <label>Password</label>
        <input id="id_password" class="form-control" placeholder="Min 8 and Max 20 characters" name="password" required type="password"> 
        </div>
                                                        
        </div>
                                                        
        <div class="col-sm-12 col-md-12">
                                                        
        <div class="form"> 
        <label>Password Confirmation</label>
        <input id="id_password2"class="form-control" placeholder="Enter Password again" name="confirmpassword" required type="password">

        <input type="checkbox" id="showPassword" onclick="showpass()"/>
        <label for="showPassword">Show password</label>
        <script>
            let loginPassStatus = false;

        function showPass(){
            let getLoginInput = document.getElementById("id_password");

            if (loginPassStatus === false){
                getLoginInput.setAttribute("type","text");
                loginPassStatus =true;

            }else if( loginPassStatus === true){
                getLoginInput.setAttribute("type","password");
                loginPassStatus =false;


            }


            

        }
        </script>
        </div>
                                                        
        </div>
                                                        
        <input type="hidden" name="acctype" value="102">
                                                        
                                                        
        </div>

        </div>


        <div class="modal-footer text-center">
            
        <button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">SIGNUP</button>
        </div>

        <div class="modal-footer text-center">
        <p>By signing up, I have read and agreed to Terms of Use and Privacy Policy</p>
        </div>
                                                
        </div>
</form>