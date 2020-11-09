<?php
include "connection.php";
 if(isset($_POST['submit']))

   {

    $name=$_POST['name'];
    $cno=$_POST['cno'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $insertin = "INSERT INTO `hres`(`name`, `cno`, `address`, `email`, `pass`) VALUES ('$name','$cno','$address','$email','$pass')";
    $ress= mysqli_query($conn,$insertin );
    if($ress)
    {
        ?>
        <script>
            alert("data inserted properly");
        </script>
        <?php
    
    }
    else
    {
        ?>
        <script>
            alert("data not inserted properly");
        </script>
        <?php
    
    }


  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>resistration form</title>
</head>
<body >
    <style>
body {background-color: red;
    background-repeat: no-repeat;
      background-attachment: fixed;
    background-size: cover;}
h1   {color: white;
font-family:all;
font-size: 220%;
text-shadow: 2px 2px 4px #000000;
}
p{ font-size: 160%;
color: white; }
textarea {
   resize: 70%;
}
form
{
    background-color: white;
    padding: 35px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
     border-radius: 15px;
}
div
{
    display: block;
    text-align: center;
}
button {
  background-color:#fc032d ; /* Green */
  border: none;
  color: white;
  padding: 10px 24px;
  border-radius: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border: 2px solid white;

}

</style><center>
<form action="#" method="POST">
<table cellpadding="5" cellspacing="5" border="0">
	
	<td>
		<tr><div style="background-color: red">
			
			<center><h1><b>Register as a Hospital</b></h1></center>

			
			
		</div>
		</tr>
		
				    <label for="name"><b> Hospital Name:-</b></label>
    <input type="text" placeholder="Enter Hosital Name" name="name" id="name"  required><br><br>

    <label for="age"><b>Contact No :-</b></label>
    <input type="number" placeholder="Enter Contact Number" name="cno" id="cno" maxlength="10" required><br><br>


    <label for="address"><b>Address :-</b></label>
    <textarea placeholder="Enter Adress"  name="address" rows="4" cols="50" id="add" required></textarea><br><br>
    

    <label for="user"><b>Email :-</b></label>
    <input type="email" name="email" placeholder="Enter Your Email/Gmail Address" id="user">
    <br>
    <br>
    <label><b>Password :-</b></label>
    <input type="password" name="pass" placeholder="Enter Password"  ><br><br>

    <hr>

    <button type="submit" class="RegisterButton">Submit</button>

<button type="reset" class="RegisterButton">Reset</button>



	</td>

</table>
</form>
</center>
</body>
</html>