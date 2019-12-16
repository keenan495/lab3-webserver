<!DOCTYPE html> 
<html> 

    <title> WEB SERVER FINAL EXAM   </title> 
  
    <body>
        <h3> WEB SERVER FINAL EXAM
            <img src= "https://www.google.com/imgres?imgurl=https%3A%2F%2Fstorage.googleapis.com%2Fgd-wagtail-prod-assets%2Fimages%2Fevolving_google_identity_2x.max-4000x2000.jpegquality-90.jpg&imgrefurl=https%3A%2F%2Fdesign.google%2Flibrary%2Fevolving-google-identity%2F&docid=4aQ0r7NfC0dsEM&tbnid=qZcGMELPKtbGvM%3A&vet=10ahUKEwjciuulxrrmAhUDZN8KHZlBCXsQMwh5KAAwAA..i&w=2432&h=1216&bih=901&biw=1564&q=google%20image&ved=0ahUKEwjciuulxrrmAhUDZN8KHZlBCXsQMwh5KAAwAA&iact=mrc&uact=8" width=500 height=500><br/>

            <?php $server = "localhost";
            $username = "php";
            $password= "password";
            $database= "test";
     ?>

    search: <input type="text" name="search"> <br/> 
    <input type="submit" value="enter">
         
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