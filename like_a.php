<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>проект по информатике</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="#top">
                                   <!-- main header -->
  <?php require_once $_SERVER['DOCUMENT_ROOT'].'/shablons/header.php';?>
  <div class="main_pagetext">
    <div class="products">    
                <!-- list of products -->
           <div class="metadata" onclick=window.location='https://github.com/gOradef/project.com'  style="grid-column:1 / 3">
        <div style="padding: 18px 0 0 0 ;">
          <p >There is my library of projects! Btw you can see here exmple my works</p>
        </div> <br>
  </div>
    <div class="productcase-1 productcase">
      <div class="metadata" onclick=window.location='https://github.com/gOradef/project.com'>
        <div>
          <p>This web source-code avaliable on GitHub!</p>
        </div>          
      </div>
    </div>
    <div class="productcase-2 productcase">
            <div class="metadata" onclick=window.location='https://github.com/gOradef/project.com'>
        <div>
          <p>There is my python library with basisc operations!</p>
        </div>
    </div>
     </div>
     <div class="productcase-4 productcase">
      <div class="metadata" onclick=window.location='https://www.youtube.com/watch?v=dQw4w9WgXcQ'>
        <div>
          <p>Intrested channels about frontend by my mind!</p>
        </div>          
      </div>
    </div>
    <div class="productcase-5 productcase">
            <div class="metadata" onclick=window.location='https://developer.mozilla.org/en-US/'>
        <div>
          <p>Best documentation for frontend</p>
        </div>
    </div>
     </div>
  </div>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/shablons/footer.php';?> <!-- footer -->
</body>
</html>