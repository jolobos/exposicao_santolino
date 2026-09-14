<?php
include('conexao_mysql.php');

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

echo $pri." - ".$sec." - ".$ter;

$stmt = $pdo->query('SELECT * FROM alunos WHERE id_aluno = '.$pri);
$nome_al = $stmt->fetch(PDO::FETCH_ASSOC);
$nome1 = $nome_al['nome'];
$turma1 = $nome_al['turma'];
$periodo1 ='';
if($nome_al['turno'] == 'm'){$periodo1 = 'manhã';}else{$periodo1 = 'tarde';}

$stmt = $pdo->query('SELECT * FROM alunos WHERE id_aluno = '.$pri);
$nome_al2 = $stmt->fetch(PDO::FETCH_ASSOC);
$nome12 = $nome_al2['nome'];
$turma12 = $nome_al2['turma'];
$periodo12 ='';
if($nome_al2['turno'] == 'm'){$periodo12 = 'manhã';}else{$periodo12 = 'tarde';}

$stmt = $pdo->query('SELECT * FROM alunos WHERE id_aluno = '.$pri);
$nome_al3 = $stmt->fetch(PDO::FETCH_ASSOC);
$nome13 = $nome_al3['nome'];
$turma13 = $nome_al3['turma'];
$periodo13 ='';
if($nome_al3['turno'] == 'm')
{$periodo13 = 'manhã';}else{$periodo13 = 'tarde';}

$slide1 = '';
$slide2 = '';
$slide3 = '';
$stmt = $pdo->query('SELECT id_pintura FROM pintura WHERE id_aluno = '.$pri);
if($stmt != ''){
$pintura1 = $stmt->fetch(PDO::FETCH_ASSOC);
$slide1 = $pintura1['id_pintura'];
}else{
    $slide1 = 0;
}

$stmt2 = $pdo->query('SELECT id_pintura FROM pintura WHERE id_aluno = '.$sec);
if($stmt2 != ''){
$pintura2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$slide2 = $pintura2['id_pintura'];
}else{
    $slide2 = 0;
}
$stmt3 = $pdo->query('SELECT id_pintura FROM pintura WHERE id_aluno = '.$ter);
if($stmt3 != ''){
$pintura3 = $stmt3->fetch(PDO::FETCH_ASSOC);
$slide3 = $pintura3['id_pintura'];
}else{
    $slide3 = 0;
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
            <li><a class="dropdown-item" href="turma_11.php">Turma 11</a></li>
            <li><a class="dropdown-item" href="turma_12.php">Turma 12</a></li>
            <li><a class="dropdown-item" href="turma_13.php">Turma 13</a></li>
            <li><a class="dropdown-item" href="turma_14.php">Turma 14</a></li>
            <li><a class="dropdown-item" href="turma_15.php">Turma 15</a></li>
            <li><a class="dropdown-item" href="turma_16.php">Turma 16</a></li>
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
          <div class="carousel-item active">
              <h1 align="center">Josias Santos de Azevedo</h1>
              <img src="img/turma'.$turma1.'/fluid/'.$slide1.'.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
              <h1 align="center">Josias Santos de Azevedo</h1>
              <img src="img/turma'.$turma12.'/fluid/'.$slide2.'.png" class="d-block w-100 h-50">
          </div>
          <div class="carousel-item">
              <h1 align="center">Josias Santos de Azevedo</h1>
              <img src="img/turma'.$turma13.'/fluid/'.$slide3.'.png" class="d-block w-100 h-50">
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
        <form method="POST" action="busca_aluno.php">
      <div class="modal-body">
        <label for="exampleInputEmail1" class="form-label">Nome:</label>
        <input type="text" class="form-control" placeholder="Digite o nome do aluno..."> 
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
 