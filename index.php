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
         if($n['turno'] == 'm'){$periodo1 = 'manhã';}else{$periodo1 = 'tarde';}
     }elseif($n['id_aluno'] == $ter){
         $slide3 = $n['fluid'];
         $nome13 = $n['nome'];
         $turma13 = $n['turma'];
         $desc13 = $n['desc_fluid'];
         if($n['turno'] == 'm'){$periodo1 = 'manhã';}else{$periodo1 = 'tarde';}
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
        <meta http-equiv="refresh" content="30">
    </head>
    <body style="background-color:#00BFFF">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 40px; height: 40px"> 
         Santolino Gonçalves dos Santos 
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
              <img src="img/turma_'.$turma1.'/fluid/'.$slide1.'.png" style="height: 700px; width: auto;">
          </div>
          <div class="carousel-item" style="text-align: center;">
              <h1 align="center">'.$nome12.'</h1>
              <img src="img/turma_'.$turma12.'/fluid/'.$slide2.'.png" style="height: 700px; width: auto;">
          </div>
          <div class="carousel-item" style="text-align: center;">
              <h1 align="center">'.$nome13.'</h1>
              <img src="img/turma_'.$turma13.'/fluid/'.$slide3.'.png" style="height: 700px; width: auto;">
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
 