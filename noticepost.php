<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="noticepost.css">
    <link rel="stylesheet" href="loadingspinner.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="widget-post" aria-labelledby="post-header-title">
<div class="loaderbg" id="loaderbg"></div>
<div class="loader" id="loader"></div>
  <div class="widget-post__header">
    <h2 class="widget-post__title" id="post-header-title">
       <i class="fa fa-pencil" aria-hidden="true"></i>
      Write notice
   </h2>
  </div>

  <form id="widget-form" class="widget-post__form" name="form" aria-label="post widget" method="POST" action="#">

      <div class="widget-post__content">
    
      <label for="post-content" class="sr-only">share your moments</label>
      <input type="text" name="title" placeholder="Input Title" size="100" class="inputz" >
      <textarea name="post" id="post-content" class="widget-post__textarea scroller" placeholder="Inform Annoucement"></textarea>
    </div>
    <div class="widget-post__options is--hidden" id="stock-options">
      <label for="search" class="sr-only">Select Symbol</label>
      <input type="search" placeholder="Select Symbol" class=" widget-post___input widget-post--search search--stock" id="search">

      <label for="stock-price" class="sr-only">target price</label>
      <input type="number" class="widget-post___input widget-post--price" id="stock-price" placeholder="stock price">

      <label for="stop-loss" class="sr-only">Stop Loss</label>
      <input type="number" class="widget-post___input widget-post--loss" id="stop-loss" placeholder="stop loss">

      <label for="date" class="sr-only">date</label>
      <input type="date" class="widget-post___input widget-post--date" id="date"> 
    </div>
    <div class="widget-post__actions post--actions">
      <div class="post-actions__attachments">
        <button type="button" class="btn post-actions__stock attachments--btn" aria-controls="stock-options" aria-haspopup="true">
          <i class="fa fa-usd" aria-hidden="true"></i>
          stock
        </button>
        <button type="button" class="btn post-actions__upload attachments--btn">
          <label for="upload-image" class="post-actions__label">
             <i class="fa fa-upload" aria-hidden="true"></i> 
            upload image
          </label>
         
        </button>
     
        <input type="file" id="upload-image" accept="image/*" multiple>
      </div>
      <div class="post-actions__widget">
        <button type="submit" name="postnotice" class="btn post-actions__publish" id="submit">publish</button>
      </div>
    </div>
  </form>
</div> 
<script src="noticepost.js"></script>
<?php 
    if (isset($_POST['postnotice'])){
         ?>
         <script>

document.getElementById("loader").style.display="block";
document.getElementById("loaderbg").style.display="block";
         </script>

         <?php

      date_default_timezone_set('Singapore');
     
      require_once('connect.php');
    
      $archive =1;
      $post = $_POST['post'];
      $dateposted = date("F j, Y, g:i a"); 
      $noticeposterid = $sessionid;
      $title= $_POST['title'];;
     

  if (empty($post)) {
      echo "Post empty";
  }
    else {
      $sql = "INSERT INTO `notice_table` (`message`, `dateposted`, `archive`, `noticeposterid`, `title`) 

      VALUES ( '$post', '$dateposted', '0', '$noticeposterid', '$title')";

          if($conn->query($sql) === TRUE) {
          
              ?>
              <script>

var delayInMilliseconds = 1000; //1 second
setTimeout(function() {
  //your code to be executed after 1 second
  document.getElementById("loader").style.display="none";
                document.getElementById("loaderbg").style.display="none";
}, delayInMilliseconds);
                
                 $("#refresh-section").load(location.href+" #refresh-section");
                  
              </script>
              <?php
          } else {
              echo "Error " . $sql . ' ' . $conn->connect_error;
          }
          $conn->close();
      }
  
      
      }




?>

</body>


</html>

