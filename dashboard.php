<?php

while($aux = mysqli_fetch_assoc($sql)){
  $estado = "";
  if( $aux["status"] == 1 ){
    $estado = "green";
  }elseif($aux["status"] == NULL ){
    $estado = "grey";
  }else{
    $estado = "red";
  }

<html>
  <head>
    <title>CLICKER - Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
      .<?php echo "c_".$aux["ID"]; ?> {
        display: block;
        background: <?php echo $estado;?>;
        border-radius: 100%;
        height: 20px;
        width: 20px;
        margin: 0px;
        float:left;
      }
    </style>

  </head>
  <body>
  </header>
    <h4 align="center">CLICKER</h4>
    <nav>
      <a href="index.php">Inicio</a>
      <a href="cadastro.html">+ Novo Item</a>
    </nav>
  </header>
  <br/>

  <section>
  <figure class="<?php echo 'c_'.$aux["ID"]; ?>"></figure>
  <h3>
    <?php echo     $aux["nome"];?>
  </h3>
  <br/>

  <a href="exclui.php?id=<?php echo $aux["ID"]; ?>" class="set_del" onclick="return confirm('Voce quer deletar este item?');">
  <button type="button" class="btn_del">X</button></a>

  <?php
    if( $aux["modelo"] == "A"){
  ?>
  <a href="ger.php?id=<?php echo $aux["ID"]; ?>" class="set_ger">
  <button type="button">GERENCIAR</button></a>
  <br/>
  <br/>

  <?php
  }else{
  ?>

  <a href="actions.php?v=set_on&who=<?php echo $aux["id_device"]; ?>&id=<?php echo $aux["ID"]; ?>" class="set_on">
  <button type="button">LIGAR</button>
  </a>
  <a href="actions.php?v=set_off&who=<?php echo $aux["id_device"]; ?>&id=<?php echo $aux["ID"]; ?>" class="set_off">
  <button type="button">DESLIGAR</button>
  </a>

  <br/>
  <br/>
  <?php
  } }
  ?>
  </section>
  <br/>
  <br/>
</html>
