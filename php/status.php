<?php
    session_start();
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }else{
        exit;
    }
    if(isset($_SESSION['img'])){
        $imgfile = $_SESSION['img'];
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>edit status</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/status.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pridi" rel="stylesheet">

    </head>
        <body id="body"> 
        <div class = "grid-container">   
            <div class ="grid-item" id="upload-pic">
                     <img src= <?php echo "../pic/pic_user/".$imgfile ?> id="human" >                       
            </div>
        <div class ="grid-item" id="edit-form">
                <form action="up_status.php" name="add_sta" method="post">
                    <p>How are you today "<?php echo " ".$username. " " ?>" ?</p>
                    <input type="text" name="status" class="input"  placeholder="Your Status" maxlength="20">

                    <div class ="grid-item" id="button-select">
                        <br><br>    
                        <button type="button" class="button" id="button-back" >BACK</button>
                        <button type="submit" class="button" id="button-go">GO</button>
                    </div> 
                </form>
                    <br>
                </div>
                </form>            
            
        </div>
    </div>
</body>
</html>
