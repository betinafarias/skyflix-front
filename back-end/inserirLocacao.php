<?php
  include "connect_Mysql.php";
  $id_filme = $_POST["id_filme"];
  $id_usuario = $_POST["id_usuario"];
  $dia = date("Y-m-d");

  $query =mysql_query(" INSERT INTO locacao (_idLocacao,_idUsuario,dateLocacao)
                        VALUES('$id_filme','$id_usuario','$dia')");


  if($query == TRUE) {
    echo "Dados inseridos no banco de dados";
  } else {
    echo "Erro ao inserir dados no banco!";
  }

?>


