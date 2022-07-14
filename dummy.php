<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$connect= mysqli_connect($server,$username,$password,$database);
$sql = mysqli_query($connect,"SELECT * FROM enroll");
$fetchrecords= mysqli_fetch_array($sql);
$countrecords =mysqli_num_rows($sql);
//echo $fetchrecords['firstname'].' '.$fetchrecords['email'];
while ($fetchrecords = mysqli_fetch_array($sql)){
    echo $fetchrecords['fullname'].' '.$fetchrecords['phonenumber'].' '.$fetchrecords['email'].' '. $fetchrecords['gender'].' '.$fetchrecords['course'] .'<br>';
}


?>
<tr>
								<th scope="row">1</th>
								<td>Jacob</td>
								<td>0772694609</td>
								<td>ft@gmail.com</td>
								<td>datascience</td>
								<td>male</td>
								<td>20th August</td>
								<td>
									<a href="" class="btn btn-primary">
									<i class="fa fa-edit"></i></a>
									<a href="" class="btn btn-primary">
									<i class="fa fa-eye"></i></a>
									<a href="" class="btn btn-primary">
									<i class="fa fa-trash"></i></a>

									
								</td>
								</tr>
								<div class="container register-container" style="padding-top:70px; padding-bottom:10px;">
        <div class="card student-register-card" style="padding:20px">

            
            

            <form method="POST" action="login.php" style="padding-bottom: 20px;" id="fnlForm" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="KAXdOuLzo8yOxaLshXSCkDccaujz8dbyu5r45PeU">
                <div class="container">
                    <!-- <h3  class="enroll-header"><Register/h3> -->
                    <h2 class="enroll-header">Login</h2>
                    <div class="form-row" style="column-gap: 0px; ">
                        <div class="form-group col-lg-12 col-md-12">
                            <label for="email" class="enroll-label">Email</label>
                            <input type="email" class="form-control br-radius" name="email" id="email" placeholder="example@email.com" required="" autocoplete="on">
                        </div>
                    </div>

                    <div class="form-row" style="column-gap: 0px">
                        <div class="form-group col-lg-12 col-md-12">
                            <label for="inputPassword4" class="enroll-label">Password</label>
                            <div class="input-icon-container" id="show_hide_password">
                                <input type="password" class="form-control br-radiu" id="inputPassword" name="password" placeholder="Type your password" value="" required="" autocomplete="current-password">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="enroll-login">Don't have an account?
                                <a href="register.php" style="color:#F57E20; text-decoration:underline"> Enroll.</a>
                            </h2>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-block" style="background-color: #F57E20; color: #fff; width: 368px; border-radius: 10px; margin-bottom: 15px;">Sign
                        In</button>

                                        <a class="" href="https://hrmis.zalegoacademy.ac.ke/school/public/password/reset" style="color:#F57E20; text-decoration:underline; padding-top:10px;">
                        Forgot Your Password?
                    </a>
                                    </div>



            </form>

        </div>
    </div>	