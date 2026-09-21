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
      
      </div>';
                

?>
    </body>
</html>