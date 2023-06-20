<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
   

    
       
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password); 
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
        $sql = "select username,password from login where username = '$username' and password = '$password'" ;  
        try{$result = mysqli_query($con, $sql); }
        catch(Exception $e){echo "you do not have access to this website";}
         
        if($result){$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  }
        
             
       
        if($result){  
            session_start();
            $_SESSION['status']="Active";
            $_SESSION['user']="$username";
            
            if($row["username"]  == "" || $row["password"]  == "" ){echo "<h1> Login failed. Invalid username or password or level.</h1>";  }
            
            else if ($username == $row['username'] && $password == $row['password'] ){
                header("Location: admin/Main Menu.php");
              
            }
            
            
            
        }  else if (!$result) {echo "Boom.inc@2023";}
        
        mysqli_close($con);
        




        
?> 