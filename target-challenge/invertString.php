<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inversor de Textos</title>
  <style>
    label,
    p {
      /* estilização utilizada por ser mais prática */
      display: block;
      padding: 10px;
    }
  </style>
</head>

<body>
  <form class="bg-body-tertiary border card mb-2 p-2" action="invertString.php" method="post" data-bs-theme="dark">
    <fieldset>
      <legend class="card-title">Inversor de Textos</legend>
      <label for="string">O texto inserido abaixo será invertido</label>
      <input type="text" id="string" name="string" placeholder="Insira seu texto">
      <button class="btn btn-primary" type="submit">Inverter</button>
    </fieldset>
  </form>
</body>

</html>
<?php
if (isset($_POST["string"])) {
  $str = $_POST["string"];
  $arr = str_split($str, 1);
  $aux_str = "";
  for ($i = count($arr); $i > 0; $i--) {
    $aux_str = "{$aux_str}{$arr[$i - 1]}";
  }

  echo "<div data-bs-theme=dark class=card ><p  class=h1 >Texto invertido:<br>{$aux_str}</p></div>";
}
?>