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