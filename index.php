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
        <div class="box-contact">
            <h3>Contato</h3>
            <a href="https://wa.me/<?php echo $contato["whatsapp"] ?>" target="_black" ><?php echo $contato["whatsapp"] ?></a>
            <a href="<?php echo $contato["github"] ?>" target="_black" ><?php echo $contato["github"] ?></a>
        </div>
        
        <div class="box-expir">
          <h3>Experiência</h3>
          <?php foreach($experiencia as $exp): ?>
            <div class="box-exp">
              <p><strong>Empresa: </strong><?php echo $exp['empresa'] ?></p>
              <p><strong>Cargo: </strong><?php echo $exp['cargo'] ?></p>
              <p><strong>Inicio: </strong><?php echo $exp['inicio'] ?></p>
              <p><strong>Termino: </strong><?php echo $exp['termino'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </body>
</html>