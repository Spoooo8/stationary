<!DOCTYPE html>
<?php
require_once('connection.php');

$sql= "Select * from stcollection";
$all_project = $con->query($sql);

?>

<html>
<head><link rel="stylesheet" href="style.css"><title>Stationeries</title></head>
<body> 
    
<section>
    <div class="section">
        <br>
        <br>
    
        
        <div class="section2">
            <h1 style="text-align: center;"><p style="color: blanchedalmond;">STATIONERY COLLECTIONS</p></h1>
            <br>
            <br>        
            <br>
            <div class="container">
            <?php 
                        while($row = mysqli_fetch_assoc($all_project)){
                           ?>
                           <div class="items">
                                <div class="img">
                                     <img src="<?php echo $row["img"]; ?>" alt="" />
                                </div>
                                <div class="name"><a href="stinfo.php"><h4 style="color: white"><?php echo $row["name"]; ?></h4></a></div>
                                <div class="price"><?php echo $row["price"]; ?></div>
                                 <div class="info"> <?php echo $row["info"]; ?></div>
                        
                            </div>
                            
                      
                    
                    <?php
                 }
                    ?>
                </div>
         </div>             
    </div>
</section>
</body>
</html>

