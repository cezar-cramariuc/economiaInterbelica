<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Economia interbelică</title>
    <link href="stil/stil.css" rel="stylesheet" />
  </head>

  <body>
    <div id="pagina">
      <header>
        <h1>Economia interbelică</h1>
      </header>
      <aside id="asideStanga">
        <div id="subiecte">
          <h1>Subiecte</h1>
        </div>
        <ul>
          <li><a href="index.html?p=acasa" id="acasa">Acasă</a></li>
          <li><a href="index.html?p=bataliaGranelor">Bătălia grânelor</a></li>
        </ul>
      </aside>
      <main>
        <?php
    if(isset($_POST['p'])){
      $p = $_POST['p'];
    }
      elseif($_GET['p']){
$p=$_GET['p'];
      }
    else{
      $p=NULL;
    }
    
    switch ($p) {
      case 'acasa':
        $pagina = "acasa.php";
        
        break;
    
      case 'bataliaGranelor':
        $pagina = "bataliaGranelor.php";
        break;
      
      default:
       $pagina = "acasa.php";
        break;
    }
    include ('./module/' . $pagina); 
    ?>
      </main>
      <aside id=" asideDreapta"></aside>
      <footer></footer>
    </div>
  </body>
</html>
