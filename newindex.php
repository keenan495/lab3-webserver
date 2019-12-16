<!DOCTYPE html> 
<html> 

    <title> Page title  </title> 
    <link rel="stylesheet" href="index.css">
 <!--   <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">">
         <div style="border: 1px solid black">testing page version2</div> --> 
    <body>
            <style> 
            body  
            {
                background-color: lightblue;
            }
            </style>
         <?php $server = "localhost";
                $username = "php";
                $password= "password";
                $database= "test";
         ?> 
        <h2> Awesome Dinosaur page working in progress v2  
        <br/>
             <span style="border: 1px solid black">Welcome to Keenan's Dino page</span>
        </h2>
   
                <br/>
                <br/>
              What is a dinosaur? : 
              Dinosaurs are a diverse group of reptiles of the clade Dinosauria. 
              They first appeared during the Triassic period, between 243 and 233.23 million years ago, 
              although the exact origin and timing of the evolution of dinosaurs is the subject of active research. 
              They became the dominant terrestrial vertebrates after the Triassic–Jurassic extinction event 201 million years ago. 
            <br/>
         <form>
        {
            <span style="border: 1px solid rgb(141, 16, 16)">Here of my favorite options:</span>
            <ol>
                <li>t-rex</li>
                <li>velociraptor</li>
                <li>triceratops</li>
                <li>steg</li>
            </ol>
            <br/>

            Quiz: Lets see if you know your dinosaurs: 
            <Label For="big_dino"> Please pick which dinosaur is the largest in mass? </Label>
            <select id="big_dino">
                <option value="1">Spinosaur</option>
                <option value="2">Stegosaurus</option>
                <option value="3">Argentinosaurus</option>
                <option value="4">Brachiosaurus</option>
            </select>
            
        <button onclick="setdino(big_dino)">submit</button>
        <br/>
       
        Answer: <p id="ans"> </p>
        <br/>

        <h2>  PHP lab 9 section </h2>

        Give your favorite dinosaur:
        <br/>
      <form action="newindex.php" method="get">
      Fav Dino: <input type="test" name="d1"> 
      <br/>
      Fav dino #2:<input type="test" name="d2"> 
        <input type="submit" value="enter">
        </form>
   <br/>
  
 your Favorite dino is: 
            <?php echo $_GET['d1']; ?> and
            <?php echo $_GET['d2'];
            ?>

        <br/>

<?php
echo " By the way here is a list of files in my directory";
$output = `ls -al`;
echo "<pre>$output</pre>";
//$output1 = `gpio blink 7`;
//echo "<pre>$output1</pre>";
?>
<Label> Press button bellow to activate blinking light </Label>
 <button onclick="//<?php
//$output1 = `gpio blink 7`;
//echo "<pre>$output1</pre>";
?>">submit</button>

<br/> 

   <Label For="small_dino"> Please pick which dinosaur is the smallest in mass? </Label>
            <select id="small_dino">
                <option value="1">Spinosaur</option>
                <option value="2">Stegosaurus</option>
                <option value="3">Argentinosaurus</option>
                <option value="4">Brachiosaurus</option>
            </select>
   <button onclick="setsmalldino(small_dino)">submit</button>
   <br/>
   
   dino: 
        <p id="ans1"> </p>
        <p id="ans3"> </p>
        <br/>
        <p id="choiceSelected"> </p>
        <br/>
    <!--    <span style="border: 1px solid rgb(141, 16, 16)">QUIZ: How long ago did they live?</span>

     -->
        

        </form>
        <form action="newindex.php" method="get">
      Firstname: <input type="text" name="first1"> <br/> 
      Lastname: <input type="text" name="last1"> <br/>
      MemberId: <input type="text" name="ID1"> <br/>  
      email: <input type="text" name="email"> <br/> 
      <br/>
      <input type="submit" value="enter">
        <?php
                $first= htmlspecialchars($_GET['first1']);
                $last= htmlspecialchars($_GET['last1']);
                $ID1= htmlspecialchars($_GET['ID1']);
                $email= htmlspecialchars($_GET['email']);

        ?>
      <h3> Memeber info:</h3>
      firstname: <?php echo $first?> <br/>
     lastname: <?php echo $last?> <br/>
     id: <?php echo $ID1?> <br/>
     email: <?php echo $email?> <br/>

     <?php
        $conn = mysqli_connect($server, $username, $password, $database);  
        $sql = "INSERT INTO users (ID1, first1 ,last1, email) VALUES('$ID1','$first', '$last', '$email');";

        if (mysqli_query($conn,$sql)) {

        echo "it worked";
        }
        else{
           echo "error:" .$sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
        
   </form>

        <script>
             var select = document.querySelector('#big_dino');
             //var para = document.querySelector('p');
             select.addEventListener('change', setDino);
             
             var select1 = document.querySelector('#small_dino')
             select.addEventListener('change', setsmalldino);
                
             function setdino(select_dino)
                {
                  var choice = select.value;
                          
                    if(choice == "3") 
                    {
                        document.getElementById("ans").innerHTML = "correct";
                        alert('that is correct');
                    } 
                    else 
                    {
                        document.getElementById("ans").innerHTML = "false";
                        alert('incorrect'); 
                    }                
                    
                }  
               
                function setsmalldino(small_dino)
                {
                  var choice1 = small_dino.value;
                              
                  if(choice1 == "2") 
                    {
                        document.getElementById("ans1").innerHTML = choice1;
                        alert('that is correct');
                    } 
                    else 
                    {
                        document.getElementById("ans3").innerHTML = choice1;
                        alert('incorrect'); 
                    }    
                    document.getElementById("choiceSelected") = "choice1";
                            
                } 

        </script>

       
  <!--  <img src= "https://images-na.ssl-images-amazon.com/images/I/71Z7ATk4CIL._SL1500_.jpg" width=500 height=500> -->
</body>
</html>


