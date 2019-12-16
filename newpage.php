<!DOCTYPE html> 
<html> 

    <title> WEB SERVER FINAL EXAM   </title> 
  
    <body>
        <h3> WEB SERVER FINAL EXAM
            <img src= "https://www.google.com/url?sa=i&source=imgres&cd=&ved=2ahUKEwjuhb2xxrrmAhXLQs0KHXYCBa8QjRx6BAgBEAQ&url=https%3A%2F%2Fdesign.google%2Flibrary%2Fevolving-google-identity%2F&psig=AOvVaw119FSyVG1ui0e9ETZ73Y30&ust=1576598809339460" width=500 height=500><br/>

            <?php $server = "localhost";
            $username = "php";
            $password= "password";
            $database= "test";
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