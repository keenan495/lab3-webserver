<!DOCTYPE html> 
<html> 

    <title> WEB SERVER FINAL EXAM   </title> 
  
    <body>
        <h3> WEB SERVER FINAL EXAM
            <img src= "" width=500 height=500><br/>

            <?php $server = "localhost";
            $username = "root";
            $password= "staticvoid";
            $database= "final";
     ?>
    <form action="newpage.php" method="get">
    search: <input type="text" name="search"> <br/> 
    <input type="submit" value="I'm feeling lucky">
    
        your info is:
            
            <?php
                $search= htmlspecialchars($_GET['search']);
                $ip=$_SERVER['REMOTE_ADDR'];
            ?>
           
            <?php echo $_SERVER['REMOTE_ADDR']; ?> and
            <?php echo $_GET['search'];
            ?>


<?php
        $conn = mysqli_connect($server, $username, $password, $database);  
        $ID1=001
     //   $sql = "INSERT INTO googlesearches (id, search, ip) VALUES('$ID1','$search', '$ip');";

        if (mysqli_query($conn,$sql)) {

        echo "it worked";
        }
        else{
           echo "error:" .$sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>

    </form>
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