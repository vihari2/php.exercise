<!DOCTYPE html>
<html>
<head>
  <title>Teste PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1>Tabela de potências</h1>

 //[linhas] x [colunas] = matriz
 //array bidimensional (matriz)
 
 <?php

  function create_table_cell($i, $j) {
      return "<td>" . pow($i, $j) . "</td>";
  }

  function create_table_row($i, $n) {
      $cells = "";
      for ($j = 1; $j <= $n+1; $j++) {
          $cells .= create_table_cell($i, $j);
      }
      return "<tr>" . $cells . "</tr>";
  }

  function create_table($n) {
      $rows = "";
      for ($i = 1; $i <= $n; $i++) {
          $rows .= create_table_row($i, $n);
      }
      return "<table>" . $rows . "</table>";
  }

  function power_matrix($n) {
      echo create_table($n);
  }

  power_matrix(5);

?>
</div>
</body>
</html>


<!-- Esse código é um script escrito em PHP que gera uma tabela HTML que contém o resultado da potência de i elevado a j, onde i é a linha e j é a coluna da tabela. A função principal é power_matrix($n) que é chamada com o argumento de 5, que é passado como parâmetro para a função create_table($n) que gera uma tabela com as potências de 1 até $n. Dentro dessa função, há um loop que cria as linhas da tabela chamando a função create_table_row($i, $n) para cada valor de i. Essa função, por sua vez, cria as células da tabela chamando a função create_table_cell($i, $j) para cada valor de j. Ao final, a tabela é exibida na tela usando a função echo. -->