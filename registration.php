
<!DOCTYPE html>
<html>
<head>
<title>Registration</title> 
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// define variables and set to empty values
$usernameErr = $passwordErr = $firstnameErr = $lastnameErr = "";
$username = $password = $firstname = $lastname = "";

$emailErr = "";
$email = "";

$genderErr = "";
$gender = "";

$addresserr = "";
$address = "";

$dobErr = "";
$dob = "";

$phonenumbererr = "";
$phonenumber = "";

$companyname = "";
$employeename = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["userid"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["userid"]);
  }

  if (empty($_POST["mahesh"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["mahesh"]);
  }
  
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
  }
  
  if (empty($_POST["Last name"])) {
    $lastnameErr = "Email is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
  
  if (empty($_POST["gender"])) {
    $genderErr = "genderder isrequired";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  
  if (empty($_POST["dob"])) {
    $dobErr = "dob is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["phonenumber"])) {
    $website = "";
  } else {
    $phonenumber = test_input($_POST["phonenumber"]);
  }

  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>
<form name=registration" method="post" action="registration.php">
<table width="50% bgcolor="0099CC" align="center">

<tr>
<td colspan=2><center><font size=4><b>HTML registration Page</b></font></center></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" size=25 name="userid"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" size=25 name="mahesh"></td>
</tr>

<tr>
<td>First Name:</td>
<td><input type="text" size=25 name="firstname"></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" size=25 name="lastname"></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" size=25 name="email">
<span class="error"><?php echo $emailErr;?></span>
</td>
</tr>


<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other</td>
</tr>

<tr>
<td>DOB:</td>
<td><input type="text" size=25 name="dob"></td>
</tr>

<tr>
<td>Phone number:</td>
<td><input type="text" size=25 name="phonenumber"></td>
</tr>

<tr>
<td>Address:</td>
<td><textarea rows="4" cols="50" name="address">
</textarea>
</td>
</tr>

<tr>
 <td>Company Name</td>
 <td><input type="text" size=25 name="comanyname"></td>
</textarea>
</td>
</tr>

<tr>
 <td>Employee Name</td>
 <td><input type="text" size=25 name="employeename"></td>
</textarea>
</td>
</tr>


<tr>
<td ><input type="Reset"></td>
<td><input type="submit" onclick="return check(this.form)" value="Register"></td>
</tr>

</table>
</form>
<script language="javascript">
/*
function check(form)
{

if(form.userid.value == "Roseindia" && form.pwd.value == "Roseindia")
{
	return true;
}
else
{
	alert("Error Password or Username")
	return false;
}
}*/
</script>




</body>
</html>