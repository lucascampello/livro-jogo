<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background: linear-gradient(135deg, #f8fafc, #eef2ff);
        min-height: 100vh;
      }
    </style>
</head>
  <?php
    $dados = array();
    if(!empty($_GET['n_dados']))
    {
        for($vezes = 0; $vezes < $_GET['vezes']; $vezes++) {
            for($cont = 0; $cont < $_GET['n_dados']; $cont++)
                $dados[$vezes] += rand(1,6);

            echo '<p class="btn btn-dark mx-2">'.$dados[$vezes].'</p>';    
        }
    }
?>
<body>
    <form method="GET">
        <label>Quantos Dados: </label>
        <select name="n_dados">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <label>Quantas Vezes: </label>
        <select name="vezes">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <input type="submit" value="Rolar Dados">
    </form>
</body>
</html>