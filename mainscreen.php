<?php
//mainscreen.php
require('db_connect.php');

   if($_SERVER['REQUEST_METHOD']== 'POST') {
       
       $uname= mysql_escape_string($_POST['uname']);
       $pass= mysql_escape_string($_POST['pass']);
       $role= mysql_escape_string($_POST['role']);
       $_SESSION['uname']=$uname;
       
       //$uname is the username passed from the form
       $vcheck = mysql_query("SELECT * FROM users WHERE username='$uname' AND password='$pass' AND role='$role'");
        
      //checks the number of rows that the query generates      
                 $numberrows = mysql_num_rows($vcheck);
}

                 if($numberrows>0){
                     session_start();
                     
                     $_SESSION['login']="1";
                     header("Location: page1.php");
                    
                 }
                     
                         
                     
            
                   else{
                       
                         $errorMessage="Invalid Login";
                         header("Location: index.php");
                         session_start();
                             $_SESSION['login']="";
                         echo 'User does not exist';
                         
                   }
  require('header.php');
 require('footer.php');
 
?>