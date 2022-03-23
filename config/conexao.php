<?php
try{

  // 'DEFINE' cria uma constante. Nos parênteses ficam o nome da constante e o que ela armazena, respectivamente.
    DEFINE('HOST','localhost');
    DEFINE('BD','bd_Agenda');
    DEFINE('USER','root');
    DEFINE('PASS','bdjmf');

    $conect = new PDO ('mysql:host='.HOST .';dbname='.BD,USER,PASS);
    $conect -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e){
    echo "<strong>Erro</strong>".$e->getMessage();

  }
?>