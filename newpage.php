<!DOCTYPE html> 
<html> 

    <title> WEB SERVER FINAL EXAM   </title> 
  
    <body>
        <h3> Enter Workout type: 
            <img src= "https://images-na.ssl-images-amazon.com/images/I/71Z7ATk4CIL._SL1500_.jpg" width=500 height=500><br/>


            <?php $server = "localhost";
            $username = "php";
            $password= "password";
            $database= "test";
     ?>

    search: <input type="text" name="search"> <br/> 
            your info is:
            
            <?php
                $search= htmlspecialchars($_GET['search']);
                $ip=$_SERVER['REMOTE_ADDR'];
            ?>
           
            <?php echo $_SERVER['REMOTE_ADDR']; ?> and
            <?php echo $_GET['search'];
            ?>


        <br/>
  
  

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <script>
      function add_time()
    { 
        alert();
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
    </script>


   </body>
    </html> 