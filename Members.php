<?php
include("db_rja.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Rolando, Josh and Andrei Portfolio MEMBERS</title>
  <link href="Members.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container">
    <span><p>This website plays audio. Volume Warning.</p></span>
              <nav>
                <span><p><a href="./Frontpage.php">Front Page</a> | </p></span>
                <span><p><a href="./Members.php">Members</a> | </p></span>
                <span><p><a href="./Goals.php">Goals</a> | </p></span> 
                <span><p><a href="./index.php">Logout</a> </p></span>
               </nav>
  </div>
  <div class="container">
  <audio src="StylishStickup.mp3" id="Stylish Stickup from Phighters" loop autoplay controls onloadeddata="setHalfVolume()"></audio> <!-- music for browsing -->
  </div>
    <h1>MEMBERS</h1>
    <h2>Our Portraits and Names are Interactable!</h2>
  <div class="members"> <!-- Names and Videos have links, sectioned off from each other. Mini personal intros. -->
      <div class="section">
        <a href="https://www.facebook.com/rollllandu"><video src="rizzlando.mp4" alt="Rolando" autoplay muted onmouseover="this.play()"></a>
      </div>
      <div class="section">
        <h1 style="text-align:start"; ><a href="https://1037f448-74c6-4873-b728-cc43015f34ad-00-3pce5lzbdi704.kirk.replit.dev/">Rolando Cubillo III</a></h1>
        <p style="text-align:start;">That's my name up there, but you can call me Rolls! I love games, music, anime and art. I love my friends and wish to continue growing with them. I also have an undying love for Josh and Andrei haha. I alos love trying new things, I love excitement!</p>
      </div>
      </div>
  <div class="members" style="background-color: #346a29;">
      <div class="section">  
    <a href="https://www.facebook.com/joshdrix.reyes"><video src="joshrizz.mp4" alt="Josh" autoplay muted onmouseover="this.play();"></a>
    </div>
      <div class="section">
        <h1 style="text-align: start;"><a href="https://cb93ac1b-31d0-488c-ba83-44d69dc0f3a7-00-1xku5evhoyees.global.replit.dev/">Josh Reyes</a></h1>
        <p style="text-align: start;">Heya! The name's Josh. I like to listen to music, play games with friends, and to know more about life as I grow older, and of course to enjoy life as much as I could! I also have an undying love for Rolando and Andrei<3 SUB TO <a href=https://www.youtube.com/channel/UClAiIDbONrlGEBVERAQ2fJA>IMPARTIAL</a> WOOP WOOP 🗣️ 🔥</p>
        
        </div>
      </div>
  <div class="members">
      <div class="section">
        <a href="https://www.facebook.com/andrei.yupano"><video src="andrizz.mp4" alt="Andrei" autoplay muted onmouseover="this.play();"</a>
      </div>
        <div class="section">
          <h1 style="text-align:start; min-height: 50px; min-width: 50px;"><a href="https://fayupano.wixsite.com/andrei-yupano">Andrei Yupano</a></h1>
          <p style="text-align:start;">Hi, I am Andrei, Farrell if you fancy it. I like video games, retro stuff including music in that category, and art stuff too. My passion for video games and their environments has led me wanting to make some of my own which is why I ended up here! I also have an undying love for Rolando and Josh... the video playing right now is my love letter to them</p>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>