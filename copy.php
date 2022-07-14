<div class="container register-container" style="padding-top:70px; padding-bottom:10px;width:50%">
    <div class="card student-register-card shadow" style="padding:20px">
        <form action="login.php" method="POST" style="padding-bottom: 20px;" id="fnlForm" enctype="multipart/form-data">
            
            <div class="container">
               <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your user name" name="userName">
                    
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                    
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="Password">
                </div>
                <div class="mb-3">
                        <label for="InputPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="Password" name="confirmpassword">
                </div>
                
                <button type="submit" class="btn btn-primary" name="submitbutton">Submit</button>
                <div class="mb-3">
                    <span>Have an account? <a href="login.php" class="Login here">Login here</a></span>
                </div> 
            </div>
        </form>

    </div>
</div>	