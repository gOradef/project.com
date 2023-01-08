<header class="main_header" id="">
    <h1 class="pj_name">Сайт - резюме</h1>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../ico.css">
  </header>
  <nav class="navbar">
    <a href="#" class='toggle-button'>
      <span class='bar'></span>
      <span class='bar'></span>
      <span class='bar'></span>
    </a>
    <div class='navbar-links'>
      <ul>
        <li><a <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="active"   <?php   }  ?> href="index.php"class="nav_sel">main page</a></li>
        <li><a <?php if($_SERVER['SCRIPT_NAME']=="/experience.php") { ?>  class="active"   <?php   }  ?> href="experience.php" class="nav_sel">experience</a></li>
        <li><a <?php if($_SERVER['SCRIPT_NAME']=="/skills.php") { ?>  class="active"   <?php   }  ?> href="skills.php" class="nav_sel">skills</a></li>
      <!-- <a <?php if($_SERVER['SCRIPT_NAME']=="/recomendations.php") { ?>  class="active"   <?php   }  ?> href="recomendations.php" class="nav_sel">recomendations</a> -->
        <li><a <?php if($_SERVER['SCRIPT_NAME']=="/contacts.php") { ?>  class="active"   <?php   }  ?> href="contacts.php" class="nav_sel">contacts</a></li>
      </ul>
    </div>  
    </nav>
<script src="scrip.js"></script>
