<?php
    session_start();
    if(isset($_SESSION['username'])){
        $username= $_SESSION['username'];
    }else{
        exit;
    }
    if(isset($_SESSION['img'])){
        $imgfile = $_SESSION['img'];
    }
    if(isset($_SESSION['user_do'])){
        $username_like = $_SESSION['user_do'];
    }
    if(isset($_SESSION['img_do'])){
        $img_like = $_SESSION['img_do'];
    }
    if(isset($_SESSION['status_do'])){
        $status_like = $_SESSION['status_do'];
    }
    if(isset($_SESSION['lo_do'])){
        $lo_like = $_SESSION['lo_do'];
    }
    if(isset($_SESSION['username_like'])){
         $username_like = $_SESSION['username_like'];
     }
     if(isset($_SESSION['img_like'])){
         $img_like = $_SESSION['img_like'];
     }
     if(isset($_SESSION['status_like'])){
         $status_like = $_SESSION['status_like'];
     }
     if(isset($_SESSION['lo_like'])){
         $lo_like = $_SESSION['lo_like'];
     }
     //      if(isset($_SESSION['sql2'])){
     //     $sql2 = $_SESSION['sql2'];
     // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>wematch</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/matching.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pridi" rel="stylesheet">
        <script type="text/javascript" src="../js/wematch.js"></script>

    </head>
    <body id="body">
        <form action="../php/match_ch.php" method="post" class = "grid-container">
            <div class="grid-item" id="my-profile">
                <a href="../php/edit_profile.php">
                <img name="pro-pic" src=<?php echo "../pic/pic_user/".$imgfile ?> id="profile-pic" class="profile-pic" >
                </a>
                <label for="profile-pic" class="profile-text" id="myprofile-text">
                    MY PROFILE
                </label>
                <?php ?>
            </div>
            <div class="grid-item" id= "discover" >
                <img src="../pic/discover.png"class="profile-pic" id="discover-pic"> 
                <label for="discover-pic" class="profile-text" id="discover-text">
                   Discover New Matches  
                </label>
            </div>
            <div class="grid-item" id= "select-chat" >
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text">
                                <div class="text-name" name="us_like">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaafgfaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">Hellaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaao</div>
                                 </label>                   
                    </div>
                    <div class="chat">
                            <img src="../pic/human.jpg"class="profile-pic"> 
                            <label for="discover-pic" class="profile-text" >
                                <div class="text-name">Liza</div><div class="text-chat">สวัสดีครับ</div>
                                 </label>                   
                    </div>
                   
             </div>
            <div class="grid-item" id= "swip-chat" >
                <div id="logo-box">
                    <img src="../pic/logo.png" id="logo">
                    <button name="logout">logout</button>
                </div>
                <div class="chat-swip" id="eiei">
                    <div id="chat-card">
                        <img src=<?php echo "../pic/pic_user/".$img_like ?> id="pic-match">
                        <p class="text-match"><?php echo $username_like ?><span>,22</span></p>
                        <p class="text-match"><?php echo $lo_like ?></p>
                        <div class="text-match" id="status"><?php echo $status_like ?></div>
                    </div>
                    <form id="button" method="post">
                        <button type="submit" name="not_like" formaction="/action_page2.php" class="button" id="not-like" ></button>
                        <button type="submit" name="like" class="button"id="like"></button>       
                    </form>
                </div> 
                <!-- <div class="chat-swip-match">
                    <div id="chat-card">
                        <img src="../pic/human.jpg" class="pic-match" >
                        <img src="../pic/human.jpg" class="pic-match" >
                    </div>
                    <form id="button">
                        <button type="submit" formaction="/action_page2.php" class="button" id="send-ms" >SEND MASSAGE</button>
                        <button type="submit"  class="button"id="keep-swip">KEEP SWIPING</button>       
                    </form>
                </div> -->
            </div>
        </form>
    </body>
</html>