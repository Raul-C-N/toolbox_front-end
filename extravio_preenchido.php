<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <style>
    body {
        text-align: center;
        background-color: black;
        color: rgb(29, 255, 29);
    }
    </style>  
  <title>Extravio de Documento</title>
</head>
<body>
  
  <?php
  // define variáveis
  $nome = $_POST['name'];
  $genero = $_POST['gender'];
  ?>


    <h1>Extravio de Documento</h1>
    <p>O declarante, <?php echo $genero," ",$nome ?>
        
        , comparece ao presente Distrito Policial relatando que no local dos fatos teve seu documento extraviado.</p>
    <br>
    <p>Declarante orientado a comparecer ao poupatempo mais próximo de sua residência para emissão de segunda via do documento extraviado. O presente registro não substitui o documento original. BO para registro.</p>
    <br>
    <p>Sem mais.</p>
    <br>
    
    <b><a href="http://localhost">RETORNAR À PÁGINA PRINCIPAL</a></b>
</body>
</html>