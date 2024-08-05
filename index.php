<?php include 'dados.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Curriculo <?php echo $nome ?></title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1><?php echo $nome ?></h1>
        <div class="box-info">
          <strong><?php echo $formacao ?></strong>
          <p>Idade: <?php echo $idade ?></p>
        </div>
      </div>
      <div class="content">
        <h3>Contato</h3>
        <div class="box-contact">
            <a href="https://wa.me/<?php echo $contato["whatsapp"] ?>" target="_black" ><?php echo $contato["whatsapp"] ?></a>
            <a href="<?php echo $contato["github"] ?>" target="_black" ><?php echo $contato["github"] ?></a>
        </div>
        <div class="box-expir">
          
        </div>
      </div>
    </div>
  </body>
</html>