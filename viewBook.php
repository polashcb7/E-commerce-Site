
<?php

   include_once("conn.php");
   $q =  "SELECT name,book,bcategory,bprice from bookup";
   $query = mysqli_query($conn,$q);
   $query1 = mysqli_query($conn,$q);
   $query2 = mysqli_query($conn,$q);
   $query3 = mysqli_query($conn,$q);
   $query4 = mysqli_query($conn,$q);
   $query5 = mysqli_query($conn,$q);
   $query6 = mysqli_query($conn,$q);
   $query7 = mysqli_query($conn,$q);
   $query8 = mysqli_query($conn,$q);
   $query9 = mysqli_query($conn,$q);
   $query10 = mysqli_query($conn,$q);
   $query11 = mysqli_query($conn,$q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--- link for icon --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- title of the page --->
    <title>Admin Book</title>

    <!--- css file link for navbar--->
    
     <link rel="stylesheet" href="try1.css">
     <link rel="stylesheet" href="home.css">
     <link rel="stylesheet" href="admin.css">
     <link rel="stylesheet" href="starBook.css">
     <link rel="stylesheet" href="gridBook2.css">

    
    <style>
.checked {
    color: orange;
}
</style>

</head>


<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fliud">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#btndata" data-toggle="collapse" aria-expanded="false">
          <span class="icon-bar"></span>
         

        </button>

               <a class="navbar-brand" href="admin.php">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse" id="btndata">
                <ul class="nav navbar-nav">
                    
                   
                <!---   Drop down menu for the navbar --->
                   
                        

      <!--- button for the navbar --->
             
               <li class="nav-item">
                        <a class="nav-link" href="adminlogin.php">Log Out</a>
                    </li> 

               
                  </ul>
          <!---search bar ---->
               
              
                   
                   
             
                

            </div>
        </div>

    </nav>
    <!--- image set --->

     

    
    

    <!--- icon and name --->
    <div class="line">
  <div class="perpendicular ">
    <img src="books.png" class="img-rounded" alt="Videos" width="50" height="70" > 
  </div>
  <div class="perpendicular">

    <div class="dropdown">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: black;font-size:25px ;margin-top: 3px;color:white">Books
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="bvPhysics.php">Physics</a></li>
      <li><a href="bvChemistry.php">Chemistry</a></li>
      <li><a href="bvBiology.php">Biology</a></li>
      <li><a href="bvMathematics.php">Mathematics</a></li>
      

    </ul>
  </div>


  </div>

  
  
</div>
<!--- catagory--->
<div>
  <p style="color: black;font-size:25px ;margin-top: 3px;margin-left: 30px">Physics</p>
</div>
<hr>

<!--- icon and name set --->



  <!--- end grid view --->

<!--- catagory--->

<div class="container">
        <ul>

          <?php
   


     
     while ($row=mysqli_fetch_assoc($query))
      {
        
        $name=$row['name'];
        $book=$row['book'];
        $bcategory=$row['bcategory'];
        $bprice=$row['bprice'];
        if($bcategory=="Physics")
        {
       
        
        ?>
            <li> 
            <img class="image" src="books/<?php echo $name;?>" width="100%" height="60%" />
            <br>

           <div class="bottom">
           <div class="write"> <h> <?php echo $book; ?></h></div></div>
            <br>
            <div class="price"><h > <?php echo $bprice; ?></h>
           
            </div>
             </li>
         
           <?php
         }
        
     }

     

 
 ?>
            
        </ul>
    </div>
  </div>
  </div>
  </div>
  <div>
  <p style="color: black;font-size:25px ;margin-top: 3px;margin-left: 30px">Chemistry</p>
</div>
<hr>

<!--- icon and name set --->


  <div class="container">
        <ul>

          <?php
   


     
     while ($row=mysqli_fetch_assoc($query1))
      {
        
        $name1=$row['name'];
        $book1=$row['book'];
        $bcategory1=$row['bcategory'];
        $bprice1=$row['bprice'];

        if($bcategory1=="Chemistry")
        {
       
        
        ?>
            <li> 
            <img class="image" src="books/<?php echo $name1;?>" width="100%" height="60%" />
            <br>

            <div class="bottom">
           <div class="write"> <h> <?php echo $book1; ?></h></div></div>
            <br>
            <div class="price"><h > <?php echo $bprice1; ?></h>
           
            </div>
             </li>
         
           <?php
         }
        
     }

     

 
 ?>
            
        </ul>
    </div>
  </div>
</div>
</div>
<div>
  <p style="color: black;font-size:25px ;margin-top: 3px;margin-left: 30px">Biology</p>
</div>
<hr>

<!--- icon and name set --->


  <div class="container">
        <ul>

          <?php
   


     
     while ($row=mysqli_fetch_assoc($query2))
      {
        
        $name2=$row['name'];
        $book2=$row['book'];
        $bcategory2=$row['bcategory'];
        $bprice2=$row['bprice'];

        if($bcategory2=="Biology")
        {
       
        
        ?>
            <li> 
            <img class="image" src="books/<?php echo $name2;?>" width="100%" height="60%" />
            <br>

            <div class="bottom">
           <div class="write"> <h> <?php echo $book2; ?></h></div></div>
            <br>
            <div class="price"><h > <?php echo $bprice2; ?></h>
           
           </div>
             </li>
         
           <?php
         }
        
     }

     

 
 ?>
            
        </ul>
        </div>
  </div>
  </div>
  </div>
  <div>
  <p style="color: black;font-size:25px ;margin-top: 3px;margin-left: 30px">Mathematics</p>
</div>
<hr>

<!--- icon and name set --->


  <div class="container">
        <ul>

          <?php
   


     
     while ($row=mysqli_fetch_assoc($query3))
      {
        
        $name3=$row['name'];
        $book3=$row['book'];
        $bcategory3=$row['bcategory'];
        $bprice3=$row['bprice'];

        if($bcategory3=="Mathematics")
        {
       
        
        ?>
            <li> 
            <img class="image" src="books/<?php echo $name3;?>" width="100%" height="60%" />
            <br>

            <div class="bottom">
           <div class="write"> <h> <?php echo $book3; ?></h></div></div>
            <br>
            <div class="price"><h > <?php echo $bprice3; ?></h>
           
            </div>
             </li>
         
           <?php
         }
        
     }

     

 
 ?>
            
        </ul>
        
  <div>

    
      
      

    </div>

    </div>
  
  </div>




      
      

    </div>

    </div>
  
  </div>


  



 <!---Link footer ---->
    
    
    
    <div class="c2 container-fluid">
        <p class="pz">Developed By Team Work &copy; Copyright 2018</p>

    </div>

</body>

</html>