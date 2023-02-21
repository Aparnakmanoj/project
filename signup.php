<?php 
include "connect.php";
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
    $name2=$_POST['lname'];
  $email=$_POST['email'];
  $batch=$_POST['batch'];
  $phone=$_POST['phone'];
  
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $utype=3;
  $status=0;
  // echo $username;
  // echo $password;
  // exit;
  If($password==$cpassword)
  {
   $sql="INSERT INTO `tbl_login`( `username`, `password`, `utype`, `status`) VALUES ('$email','$password','$utype','$status')";
  //  $sql="INSERT INTO `tbl_login`(`username`, `password`, `utype`,`status`) VALUES ('$username','$password','$utype','0')";
   $quer=mysqli_query($conn,$sql);
   $loginid=mysqli_insert_id($conn);
    if($quer)
    {
      
      $sql1="INSERT INTO `tbl_studreg`(`loginid`, `name`, `lname`, `email`, `batch`, `phoneno`, `status`, `tstat`) VALUES ('$loginid','$name','$name2','$email','$batch','$phone','0','0') ";
        
        
     
      //  "INSERT INTO `tbl_studreg`(`name`) VALUES ('$username')";
      $res=mysqli_query($conn,$sql1);
      echo'<script> alert("Registration Completed.");</script>';
      echo'<script> window.location.href="login.php"</script>';
    }
    
  }
  else
    {
      echo '<script> alert("VALUE NOT INSERTED");</script>';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Student Registration</title>
    <script>
      //name
      function Validstr1() 
      {
        var val = document.getElementById('name').value;
         if (!val.match(/^[A-Za-z ]*$/))
        {
          document.getElementById('msg').innerHTML="Only alphabets are allowed";
          document.getElementById('name').value = val;
          document.getElementById('name').style.color = "red";
          return false;
          flag=1;
        }
        else
        {
          document.getElementById('msg').innerHTML=" ";
          document.getElementById('name').style.color = "green";
          //return true;
        }
      }
        
         function Validstr2() 
      {
        var val = document.getElementById('lname').value;
         if (!val.match(/^[A-Za-z ]*$/))
        {
          document.getElementById('msg99').innerHTML="Only alphabets are allowed";
          document.getElementById('lname').value = val;
          document.getElementById('lname').style.color = "red";
          return false;
          flag=1;
        }
        else
        {
          document.getElementById('msg99').innerHTML=" ";
          document.getElementById('lname').style.color = "green";
          //return true;
        }
      }
      //username                                       
      function Validstr() 
      {
        var val = document.getElementById('username').value;
        if (!val.match(/^[A-Za-z ]*$/))
        {
          document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets are allowed";
          document.getElementById('username').value = val;
          document.getElementById('username').style.color = "red";
          return false;
          flag=1;
        }
        if(val.length<4||val.length>10)
        {
          document.getElementById('msg1').innerHTML="Username between 4 to 10 characters";
          document.getElementById('username').value = val;
          document.getElementById('username').style.color = "red";
          return false;
          flag=1;
        }
        else
        {
          document.getElementById('msg1').innerHTML=" ";
          document.getElementById('username').style.color = "green";
          //return true;
        }
      }
      //email
      function Validateemail()
      {
        var email=document.getElementById('email').value;  
        var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
        if(email.length<3||email.length>40)
        {
         document.getElementById('email1').innerHTML="Invalid Email";
         document.getElementById('email').value = email;
         document.getElementById('email').style.color = "red";
         return false;
        }
        if(!email.match(/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/))
        {  
         document.getElementById('email1').innerHTML="Please enter a valid email";  
         document.getElementById('email').value = email;
         document.getElementById('email').style.color = "red";
         return false;  
        }
        else
        {
         document.getElementById('email1').innerHTML=" ";
         document.getElementById('email').style.color = "green";
          // return true;
        }
      }
      //phone
     function Validphone() 
      {
        var val = document.getElementById('phone').value;
        if (!val.match(/^[6789][0-9]{9}$/))
       {
         document.getElementById('msg2').innerHTML="Only Numbers are allowed and must contain 10 number";
         document.getElementById('phone').value = val;
          return false;
        }
        else
        {
         document.getElementById('msg2').innerHTML="";
          //   return true;
        }
      }
      //password
      
      function Password()
      {
        var pass=document.getElementById('password').value;
        consol.log(pass);
       //var patt= /^(?=.[0-9])(?=.[!@#$%^&])[A-Za-z0-9!@#$%^&]{7,15}$/;
       //var patt = /^[a-zA-Z0-9@#$%^&]{7,15}$/;
       var patt = /^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{7,15}$/;
       if(!pass.match(patt))
       {
          console.log(pass);
          document.getElementById('pass').innerHTML="Password must be 7 to 15 character with number and special character ";  
          document.getElementById('password').value = pass;
          document.getElementById('password').style.color = "red";
          return false;  
        }
        else
        {
          console.log(pass, "Green");
          document.getElementById('pass').innerHTML=" ";
          document.getElementById('password').style.color = "green";
         //return true;
        }
      }
      //confirmpassword
      function Password1()
      {
        var pass1=document.getElementById('password').value;
        var pass2=document.getElementById('password1').value;
       if(!pass1.match(pass2))
       {
         console.log(pass2);
         document.getElementById('pass2').innerHTML="Password must match";  
         document.getElementById('password1').value = pass;
         document.getElementById('password1').style.color = "red";
         return false;  
       }
       else
       {
          console.log(pass1, "Green");
          document.getElementById('pass1').innerHTML=" ";
         document.getElementById('password1').style.color = "green";
          //return true;
        }
      }
      function Valuemore()
     {
       if( Validstr1()==false ||  Validstr()==false ||  ValidateEmail()==false ||  Validphone()==false ||  Password()==false ||  Password1()==false)
        {
          return false;
        }
      }
    </script> 
  </head>
  <body>
    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url('images/students.jpg');"></div>
         <div class="contents order-2 order-md-1">
           <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7 py-5">
                  <h3>Student Registration</h3>
                  <form action="#" method="post" onsubmit="return Valuemore();">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group first">
                          <label for="name"> First Name</label>
                          <input type="text" class="form-control" placeholder="Enter your first name" name="name"   id="name" required onkeyup="return Validstr1();"/>
                            <label for="name"> Last Name</label>
                          <input type="text" class="form-control" placeholder="Enter your last name" name="lname"   id="lname" required onkeyup="return Validstr2();"/>
                        </div>  
                        <span id="msg99" style="color:red;"></span> 
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group first">
                          <label for="email">Email Address</label>
                          <input type="email" class="form-control" placeholder="Enter Your Email" name="email"  id="email" required onkeyup="return Validateemail()"/>
                        </div>  
                        <span id="email1" style="color:red;"></span>  
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group first">
                         <label for="batch">Batch</label>
                         <select name="batch" id="batch">
                           <option value="A">A</option>
                           <option value="B">B</option>
                          </select>
                        </div>    
                      </div>
                    </div>
                    <div class="row">
                     <div class="col-md-12">
                       <div class="form-group first">
                       <label for="phn">Phone Number</label>
                       <input type="text" class="form-control" placeholder="Enter phn no" id="phone" name="phone" required onkeyup="return Validphone()";/>
                      </div> 
                      <span id="msg2" style="color:red;"></span> 
                    </div>
                    </div> 
                  
                    <div class="row">
                    <div class="col-md-12">
                     <div class="form-group last mb-3">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" placeholder="Your Password"  id="password" name="password"required onkeyup="return Password();"/>
                     
                    </div>
                    <span id="pass" style="color:red;"></span>
                    </div>
                   </div>
                    <div class="row">
                   <div class="col-md-12">
                   <div class="form-group last mb-3">
                     <label for="re-password">Re-type Password</label>
                     <input type="password" class="form-control"  placeholder="Confirm Password" id="password1"  name="cpassword"required  onkeyup="return password1();"/>
                    </div>
                    <span id="pass1" style="color:red;"></span>
                   </div>
                   </div>
                   <div class="d-flex mb-5 mt-4 align-items-center">
                   <div class="d-flex align-items-center">
                   <div class="control__indicator"></div>
                    </label>
                    </div>
                    </div>
                    <input type="submit" name="submit" value="Register" onclick="Val() " class="btn px-5 btn-primary">
            </form>
        </div>
      </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>