
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

        /*
          // define variables and set to empty values
          $usernameErr = $passwordErr = $firstnameErr = $lastnameErr = "";
          $mpd = $password = $firstname = $lastname = "";

          $emailErr = "";
          $email = "";

          //$genderErr = "";
          $gender = "";

          //$addresserr = "";
          $address = "";

          //$dobErr = "";
          $dob = "";

          $phonenumbererr = "";
          $phonenumber = "";

          $companynamex = "";
          $employeenamep = "";


         */
        $emailErr = "";
        $email = "";

        $urr = "";
        $updr = "";
        
        $aaaa = "";
        $bbbb = "";
        
        $cccc = "";
        $dddd = "";

        $eeee = "";
        $ffff = "";
        
        $gggg = "";
        $hhhh = "";
        
        $iiii = "";
        $jjjj = "";
        
        $kkkk = "";
        $llll = "";
        
        
        
        
        

        


        print_r($_POST);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // valide username
            if (empty($_POST["userid"])) {
                $urr = "Name is required";
            } else {
                $updr = test_input($_POST["userid"]);
            }

            // validete password
            
           if (empty($_POST["mahesh"])) {
                $aaaa= "password is required";
            } else {
                $bbbb = test_input($_POST["mahesh"]);
                
            }
            
            //validate email
                
            if (empty($_POST["email"])) {
                $cccc = "email is required";
            } else {
                $dddd = test_input($_POST["email"]);
                
            }
                
             //validate phone number
                
            if (empty($_POST["phonenumber"])) {
                $eeee = "phonenumber is required";
            } else {
                $ffff = test_input($_POST["phonenumber"]);
            }
                
             //validate first name
                
            if (empty($_POST["firstname"])) {
                $gggg = "firstname is required";
            } else {
                $hhhh = test_input($_POST["firstname"]);
            }
                
            //validate last name
                
            if (empty($_POST["lastname"])) {
                $jjjj = "lastname is required";
            } else {
                $iiii = test_input($_POST["lastname"]);
            }

            //validate gender
                
            if (empty($_POST["dob"])) {
                $kkkk = "dob is required";
            } else {
                $llll = test_input($_POST["dob"]);
            }
              
                
                
                /*
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
             */
            /*
              if (empty($_POST["lastname"])) {
              $lastnameErr = "lastname is required";
              } else {
              $lastname = test_input($_POST["lastname"]);
              }
             */
            /*
              $lastname = test_input($_POST["lastname"]);


              if (empty($_POST["email"])) {
              $emailErr = "Email is required";
              } else {
              $email = test_input($_POST["email"]);
              }

              $gender = test_input($_POST["gender"]);
              $dob = test_input($_POST["dob"]);

              if (empty($_POST["phonenumber"])) {
              $phonenumbererr = "phonenumber is required";
              } else {
              $phonenumber = test_input($_POST["phonenumber"]);
              }

              $address = test_input($_POST["address"]);
              $companynamex = test_input($_POST["companyname"]);
              $employeenamep = test_input($_POST["employeename"]);
             */
            /*
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
             */
        }
        ?>
        <form name=registration" method="post" action="registration.php">
            <table width="50% bgcolor="0099CC" align="center">

                <tr>
                    <td colspan=2><center><font size=4><b>HTML registration Page</b></font></center></td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" size=25 name="userid" value="<?php echo $updr; ?>" >
                        <span class="error"><?php echo $urr; ?></span>
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" size=25 name="mahesh" value="<?php echo $bbbb; ?>" >
                        <span class="error"><?php echo $aaaa; ?></span>
                    </td>
                </tr>

                <tr>
                    <td>First Name:</td>
                    <td><input type="text" size=25 name="firstname" value="<?php echo $hhhh; ?>">
                        <span class="error"><?php echo $gggg; ?></span>
                    </td>
                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" size=25 name="lastname" value="<?php echo $iiii; ?>" ></td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input type="text" size=25 name="email" value="<?php echo $dddd; ?>" >
                        <span class="error"><?php echo $cccc; ?></span>
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
                    <td><input type="text" size=25 name="dob" value="<?php echo $llll; ?>" ></td>
                </tr>

                <tr>
                    <td>Phone number:</td>
                    <td><input type="text" size=25 name="phonenumber" value="<?php echo $email; ?>" ></td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td><textarea rows="4" cols="50" name="address" value="<?php echo $email; ?>" >
                        </textarea>
                    </td>
                </tr>

                <tr>
                    <td>Company Name</td>
                    <td><input type="text" size=25 name="comanyname" value="<?php echo $email; ?>" ></td>
                    </textarea>
                    </td>
                </tr>

                <tr>
                    <td>Employee Name</td>
                    <td><input type="text" size=25 name="employeename" value="<?php echo $email; ?>" ></td>
                    </textarea>
                    </td>
                </tr>


                <tr>
                    <td ><input type="Reset"></td>
                    <td><input type="submit" value="Register"></td>
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