<html>
    <head>
<?php
include 'header.php';
include 'connect.php';
if(isset($_POST['submit']))
{

    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    
    $a=mysqli_query($conn,"SELECT * FROM tbl_login where username='$uname' and password ='$password'");
    $row=mysqli_fetch_array($a);
     $status= $row['status'];
    $log=$row['loginid'];
    
    
    
    $b=mysqli_query($conn,"SELECT email FROM tbl_coodinator where  loginid='$log'");
    $row1=mysqli_fetch_array($b);
    
    if(!empty($row))
	{
		
    
     if($row['utype']==2)
		{
			session_start();
			$_SESSION['username']=$row['username'];
			$_SESSION['password']=$row['password'];
            $_SESSION['email']=$row1['email'];
            
            if( $status == 1)  
            {
              header('Location:coordinator/dashboard.php'); 
            }
            elseif( $status == 0)  
            {
             header("Location:login.php");    
            }
			
		}	
    
else if($row['utype']==3)
		{
			session_start();
		$_SESSION['username']=$row['username'];
			$_SESSION['password']=$row['password'];
            
            if( $status == 1)  
            {
              header('Location:student/dashboard.php');   
            }
            elseif( $status == 0)  
            {
             echo'<script> alert("Yet to be verified by Admin");</script>';  
            }
			
		}	
        
        else if($row['utype']==4)
		{
			session_start();
		$_SESSION['username']=$row['username'];
			$_SESSION['password']=$row['password'];
            
            if( $status == 1)  
            {
               header('Location:teacher/dashboard.php');
                
            }
        }
           else 
		{	
			if($row['utype']==5)
		{
			session_start();
                $_SESSION['username']=$row['username'];
            header("Location:admin/dashboard.php");   
         }
		
	
			}
			
			
    
        
    }
    
    }
 
    
            ?>
            <body>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in  HEAD tag ----------><style>
            body {
              margin: 0;
              padding: 0;
              background-image:url(images/img.jpg);
              height: 100vh;
            }
            #login .container #login-row #login-column #login-box {
              margin-top: 120px;
              max-width: 600px;
              height: 320px;
              border: 1px solid #9C9C9C;
              background-color: #EAEAEA;
            }
            #login .container #login-row #login-column #login-box #login-form {
              padding: 20px;
            }
            #login .container #login-row #login-column #login-box #login-form #register-link {
              margin-top: -85px;
              
            }</style> 
            <body>
            <form action="" method="POST">
            
                <div id="login">
                    
                    <div class="container">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <form id="login-form" class="form" action="" method="post">
                                        <h3 class="text-center text-info">Login</h3>
                                        <div class="form-group">
                                            <label for="username" class="text-info">Username:</label><br>
                                            <input type="text" name="username" id="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">Password:</label><br>
                        
                                            <input type ="password" id="password" class="form-control" name="password" >
                                                   </div>
                                        <div class="form-group">
                                           
                                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
            </div>
                    </div>
                </div>
            </body>
            
            
            </html>
            