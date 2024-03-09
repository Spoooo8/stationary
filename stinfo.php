<!DOCTYPE html>
<?php
require_once('connection.php');

$sql= "Select * from stinfo";
$all_project = $con->query($sql);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"/>
    <title>Bluelight Stationeries</title>
</head>
<body>
    
        <section>
            <div class="content">
                

                <?php 
                        while($row = mysqli_fetch_assoc($all_project)){
                           ?>
                     <div class="main-content">       
                    <h1 data-aos="fade-right" data-aos-duration="2000"><?php echo $row["Name"]; ?></h1>
                    <h2 data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200"><?php echo $row["price"]; ?></h2>
                    <h4 data-aos="fade-right" data-aos-duration="2000" data-aos-delay="400"><?php echo $row["desc1"]; ?></h4>
                    <p data-aos="flip-down" data-aos-duration="2000" data-aos-delay="600"><?php echo $row["desc2"]; ?></p>
                    <div class="order">
                        <h3 data-aos="zoom-in-right" data-aos-duration="2000" data-aos-delay="800">Buy now</h3>
                        <button data-aos-duration="2000" data-aos-delay="800"><a href="bill.html">ORDER NOW</a></button>
                    </div>       
            </div>   
                    
            <div class="image">
                    <img src="<?php echo $row["img"]; ?>" data-aos="zoom-in" data-aos-duration="2000">
                </div>
                    <?php
                 }
                    ?>
                  
               
                
            </div>
        </section>
        
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init({
            offset:1
          });
        </script>
         
</body>
       
</html>