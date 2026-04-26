<html>
<head>
<title>Registation Form</title>
<link rel="stylesheet" href="mystyle1.css">
</head>
<body>
<?php
if(isset($_POST['Submit']))
{

    include 'pr25.php';
     
    $name=$_POST["cname"];
    $cemail=$_POST["cemail"];
    $password=$_POST["cpassword"];
    $contact=$_POST["ccontact"];

    $fn=false;
    $fe=false;
    $fp=false;
    $fc=false;
    $fse=false;

    if(empty($name))
    {
        echo "<br> <span style=color.red> Name Required</span>";
    }
    else{
        if(!preg_match("/^[a-zA-Z]*$/",$name))
        {
            echo "<br> <span style=color.red>Invalid Name </span>";
        }
        else{
            $name=trim($name);
            $fn=true;
        }
    }
   if(empty($cemail))
   {
      echo "<br> <span style=color.red> Email Reqired </span>";

   }
   else{
        $email=trim($cemail);
        $email=filter_var($cemail,FILTER_VALIDATE_EMAIL);

        if($cemail==false)
         {
            echo "<br> <span style=color.red>Invalid Email</span>";
         }
         else{
             $cemail=$cemail;
             $sql= " select * from cust_info where email='$cemail'";
             $result=mysqli_query($conn,$sql);

             if(mysqli_affected_rows($conn)>0)
             {
                echo "<br> <span style=color.red>Email Exist Try Other </span>";
             }
             else{
                $fe=true;
                $cemail=cemail;
             }

         }
   }

   if(empty($password)){

    echo "<br> <span style=color.red>Password Empty </span>";
   }
   else
   {
    $password=trim($password);
  if(strlen($password)<=4)
  {
    echo "<br> <span style=color.red >Password atleast 4 letter Long</span>";
  } 
  else{
        $password=$password;
        $fp=true;

  }
}
    if(empty($contact)){
        echo "<br> <span style=color.red> Contact Required </span>";
    }
    else{
        $contact=filter_var($contact,FILTER_VALIDATE_INT);
        
        if($contact==false)
        {
            echo "<br> <span style=color.red>Invalid Contact </span>";
        }
        elseif(!preg_match("/^[0-9]{10}$/",$contact))
        {
            echo "<br> span style=color.red>Contact Should Long 10 </span>";
        }
        else{
            $contact=trim($contact);
            $fc=true;
        }
    }
}
 else{
    echo '
  <form name="registration" method="post" action="pr30reg.php>
    <div class="main">
    <table width="400" border="1" cellspading="10" cellspacing="20">
        <tr><td>
    Name<input type="text" name="cname" class="tb"><br>
    </td></tr>
    <tr><td>
    Email<input type="email" name="cemail" class="tb"><br>
    </td></tr>
    <tr><td>
    Password<input type="password" name="cpassword" class="tb"><br>
    </td></tr>
    <tr><td>
    Contact<input type="text" name="ccontact" class="tb"><br>
     </td></tr>
    <tr><td>
    <input type="submit" name="Submit" value="Register">


           </td>
            </tr>
</table>
<h4>Already Register Login Now</h4>
<a href="login.php">Login Here</a>
</form>
';}
?>
</body>
</html>
