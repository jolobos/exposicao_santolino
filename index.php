<?php
include('conexao_mysql.php');

if(isset($_POST['nome_al'])){
    $nome_alz = $_POST['nome_al'];
    $stmtz = $pdo->query("SELECT * FROM alunos WHERE nome LIKE '%".$nome_alz."%'");
    $nome_aluz = $stmtz->fetchALL(PDO::FETCH_ASSOC);
    echo  '<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	  <script type="text/javascript">
            $(window).load(function() {
                $("#exemplomodal23").modal("show");
            });
            </script>   
	  <div class="modal fade modal-lg" id="exemplomodal23">
            <div class="modal-dialog">
              <div class="modal-content">';
           echo '<div class="modal-header bg-info">
          <h3 class="modal-title">Selecione o aluno desejado na lista abaixo:</h3>
      </div>
      <div class="modal-body bg-light">';
           if(strlen($_POST['nome_al']) >= 3){
           echo '<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Nome</th>
      <th scope="col">Turma</th>
      <th scope="col">Turno</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>';
    $achados = 0;
    foreach($nome_aluz as $z){
      $achados ++;
      if($z['turno'] == 'm'){$periodoz = 'manhã';}else{$periodoz = 'tarde';}
    echo '<tr>
      <th scope="row">'.$achados.'</th>
      <td>'.$z['nome'].'</td>
      <td>'.$z['turma'].'</td>
      <td>'.$periodoz.'</td>
      <td><a class="btn btn-primary" href="?escolhido='.$z['id_aluno'].'">Selecionar</a></td>
    </tr>';
    }
    echo '</tbody>
</table>';
           }else{
               echo '<h2 align="center" class="alert alert-danger">É necessario que a busca tenha mais de 3 letras.</h2>';
               echo '<h3>Por favor,</h3>';
               echo '<h3>feche o aviso e pesquise novamente. Obrigado!</h3>';
           }
      echo '</div>
      <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>';
        
        }
if(isset($_GET['turma'])){
    $turma_alz = $_GET['turma'];
    $stmtz = $pdo->query("SELECT * FROM alunos WHERE turma = ".$turma_alz."");
    $turma_aluz = $stmtz->fetchALL(PDO::FETCH_ASSOC);
    echo  '<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	  <script type="text/javascript">
            $(window).load(function() {
                $("#exemplomodal23").modal("show");
            });
            </script>   
	  <div class="modal fade modal-lg" id="exemplomodal23">
            <div class="modal-dialog">
              <div class="modal-content">';
           echo '<div class="modal-header bg-info">
          <h3 class="modal-title">Selecione o aluno desejado na lista abaixo:</h3>
      </div>
      <div class="modal-body bg-light">';
           
           echo '<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Nome</th>
      <th scope="col">Turma</th>
      <th scope="col">Turno</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>';
    $achados = 0;
    foreach($turma_aluz as $z){
      $achados ++;
      if($z['turno'] == 'm'){$periodoz = 'manhã';}else{$periodoz = 'tarde';}
    echo '<tr>
      <th scope="row">'.$achados.'</th>
      <td>'.$z['nome'].'</td>
      <td>'.$z['turma'].'</td>
      <td>'.$periodoz.'</td>
      <td><a class="btn btn-primary" href="?escolhido='.$z['id_aluno'].'">Selecionar</a></td>
    </tr>';
    }
    echo '</tbody>
</table>';
           
      echo '</div>
      <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>';
        
        }
if(isset($_GET['escolhido'])){
    $escolhido = $_GET['escolhido'];
    $stmtze = $pdo->query("SELECT * FROM alunos WHERE id_aluno = ".$escolhido."");
    $d_escolhido = $stmtze->fetch(PDO::FETCH_ASSOC);
    if($d_escolhido['fluid'] != 0){
        $slide_escolhido_fluid = $d_escolhido['fluid'];
    }else{
        $slide_escolhido_fluid = 0;
    }
    if($d_escolhido['splash'] != 0){
        $slide_escolhido_splash = $d_escolhido['splash'];
    }else{
        $slide_escolhido_splash = 0;
    }
    echo  '<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	  <script type="text/javascript">
            $(window).load(function() {
                $("#exemplomodal23").modal("show");
            });
            </script>   
	  <div class="modal fade modal-lg" id="exemplomodal23">
            <div class="modal-dialog">
              <div class="modal-content">';
           echo '<div class="modal-header bg-info">
          <h3 class="modal-title">Resultado do aluno selecionado:</h3>
      </div>
      <div class="modal-body bg-light">';
           
           echo '<div id="carouselExample2" class="carousel slide carousel-fade" >
        <div class="carousel-inner">
          <div class="carousel-item active" style="text-align: center;">
              <h1 align="center" >'.$d_escolhido['nome'].'</h1>
              <img src="img/turma_'.$d_escolhido['turma'].'/fluid/'.$slide_escolhido_fluid.'.png" style="height: 500px; width: auto;">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-dark">TITULO DA OBRA</h3>
                <h1 class="text-dark">'.$d_escolhido['desc_fluid'].'</h1>
              </div>
          
          </div>
          <div class="carousel-item" style="text-align: center;">
              <h1 align="center">'.$d_escolhido['nome'].'</h1>
              <img src="img/turma_'.$d_escolhido['turma'].'/splash/'.$slide_escolhido_splash.'.png" style="height: 500px; width: auto;">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-dark">TITULO DA OBRA</h3>
                <h1 class="text-dark">'.$d_escolhido['desc_splash'].'</h1>
              </div>
          
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
          <span class="btn btn-dark carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
          <span class="btn btn-dark carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>';
           
      echo '</div>
      <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>';
        
        }



$stmt = $pdo->query('SELECT * FROM alunos');
$nome_al = $stmt->fetchALL(PDO::FETCH_ASSOC);
//echo $nome_al['nome'];
$contador = 0;
foreach ($nome_al as $n){
     //echo $n['nome'];
     $contador++;
 }
 
 // Cria um array com números de 1 a 10
$numeros = range(1, $contador);

// Embaralha a ordem dos elementos aleatoriamente
shuffle($numeros);

// Pega os 3 primeiros números do array embaralhado
$selecionados = array_slice($numeros, 0, 3);

// Mostra o resultado
$pri = $selecionados[0];
$sec = $selecionados[1];
$ter = $selecionados[2];



$slide1 = '';
$slide2 = '';
$slide3 = '';

$nome1 = '';
$turma1 = '';
$periodo1 ='';
$desc1 = '';
        
$nome12 = '';
$turma12 = '';
$periodo12 ='';
$desc12 = '';
        
$nome13 = '';
$turma13 = '';
$periodo13 ='';
$desc13 = '';

foreach ($nome_al as $n){
     if($n['id_aluno'] == $pri){
         $slide1 = $n['fluid'];
         $nome1 = $n['nome'];
         $turma1 = $n['turma'];
         $desc1 = $n['desc_fluid'];
         if($n['turno'] == 'm'){$periodo1 = 'manhã';}else{$periodo1 = 'tarde';}
     }elseif($n['id_aluno'] == $sec){
         $slide2 = $n['fluid'];
         $nome12 = $n['nome'];
         $turma12 = $n['turma'];
         $desc12 = $n['desc_fluid'];
         if($n['turno'] == 'm'){$periodo12 = 'manhã';}else{$periodo12 = 'tarde';}
     }elseif($n['id_aluno'] == $ter){
         $slide3 = $n['fluid'];
         $nome13 = $n['nome'];
         $turma13 = $n['turma'];
         $desc13 = $n['desc_fluid'];
         if($n['turno'] == 'm'){$periodo13 = 'manhã';}else{$periodo13 = 'tarde';}
     }
 }

?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title></title>
        <meta http-equiv="refresh" content="60">
    </head>
    <body style="background-color:#00BFFF">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 40px; height: 40px"> 
         Santolino Gonçalves dos Santos 
      </a>
    
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Opções
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="?turma=11">Turma 11</a></li>
            <li><a class="dropdown-item" href="?turma=12">Turma 12</a></li>
            <li><a class="dropdown-item" href="?turma=13">Turma 13</a></li>
            <li><a class="dropdown-item" href="?turma=14">Turma 14</a></li>
            <li><a class="dropdown-item" href="?turma=15">Turma 15</a></li>
            <li><a class="dropdown-item" href="?turma=16">Turma 16</a></li>
            <li><a class="dropdown-item" href="https://david.li/paint/" target="_blank">Site Fluid Paint</a></li>
            <li><a class="dropdown-item" href="https://artsandculture.google.com/experiment/splash-canvas/vQFCtQB7FDnYkA?hl=pt-BR" target="_blank">Site Splash Canva</a></li>
          </ul>
        </li>
      </ul>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Pesquisa por nome do aluno
</button>
    </div>
      
      
  </div>
        </nav>
    <?php
        
        echo '<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="text-align: center;">
              <h1 align="center" >'.$nome1.'</h1>
              <h3 align="center" >Turma: '.$turma1.' Turno: '.$periodo1.'</h3>
              <img src="img/turma_'.$turma1.'/fluid/'.$slide1.'.png" style="height: 670px; width: auto;">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-dark">TITULO DA OBRA</h3>
                <h1 class="text-dark">'.$desc1.'</h1>
              </div> 
          </div>
          <div class="carousel-item" style="text-align: center;">
              <h1 align="center">'.$nome12.'</h1>
              <h3 align="center" >Turma: '.$turma12.' Turno: '.$periodo12.'</h3>
              <img src="img/turma_'.$turma12.'/fluid/'.$slide2.'.png" style="height: 670px; width: auto;">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-dark">TITULO DA OBRA</h3>
                <h1 class="text-dark">'.$desc12.'</h1>
              </div>
          </div>
          <div class="carousel-item" style="text-align: center;">
              <h1 align="center">'.$nome13.'</h1>
              <h3 align="center" >Turma: '.$turma13.' Turno: '.$periodo13.'</h3>
              <img src="img/turma_'.$turma13.'/fluid/'.$slide3.'.png" style="height: 670px; width: auto;">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-dark">TITULO DA OBRA</h3>
                <h1 class="text-dark">'.$desc13.'</h1>
              </div> 
              </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="btn btn-dark carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="btn btn-dark carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>';
                
?>                
    <!modal>
        <div class="modal" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Busca por nome do aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form method="POST" action="">
      <div class="modal-body">
        <label for="exampleInputEmail1" class="form-label">Nome:</label>
        <input type="text" name="nome_al" class="form-control" placeholder="Digite o nome do aluno..."> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Buscar</button>
      </div>
        </form>
    </div>
  </div>
</div>
    </body>
</html>
 