<?php
session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        header('Location:../html/login.html');
        exit;
    }

    if(isset($_SESSION['img'])){
        $imgfile = $_SESSION['img'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>edit profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="..//css/edit-profile.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pridi" rel="stylesheet">
        <script type="text/javascript" src="../js/uppic.js"></script>
        <script type="text/javascript" src="../js/proJS.js"></script>
    </head>
        <body id="body"> 
        <div class = "grid-container">    
            <div class ="grid-item" id="upload-pic">
                    <form action="../php/logout.php" method="post" enctype="multipart/form-data">
                         <button name="logout">logout</button>  
                    </form>
                    <img src= <?php echo "../pic/pic_user/".$imgfile ?> id="human" >            
                    <form id="img-upload" action="../php/check_pro.php" method="post" enctype="multipart/form-data">

                        <input type="file" name="fileToUpload" id="fileToUpload" />
                        
                    </form>
            </div>
                <form action="../php/get_pro.php" class ="grid-item" id="edit-form" method="post">
                    <input type="text" name="username1" class="input"  placeholder="Username" required>
                    <br>
                    <select name="gender" class="input"  required >
                        <option disabled selected value="">Gender</option>
                        <option value="Male" >Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <br>
                    <select name="interest" class="input"  required>
                            <option disabled selected value="">Interst in</option>
                            <option value="Male" >Male</option>
                            <option value="Female">Female</option>
                    </select>
                    <br>
                    <select name="location" class="input" required>
                            <option disabled selected value="">Location</option>
                            <option value="Saraburi" >Saraburi</option>
                            <option value="Bangkok">Bangkok</option>
                    </select>
                    <br>
                    <input type="date" name="age" class="input" required min="1919-01-01"  >
                    <br>
                    <br>
                            <button type="button" class="button" id="button-back" >BACK</button>
                            <button type="submit" name="submit" class="button" id="button-go">GO</button>
                            <span id="errordisplay"></span><br>           
                  
                </form>
            
        </div>
    </div>
</body>
</html>
