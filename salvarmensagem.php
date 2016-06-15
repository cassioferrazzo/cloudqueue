<?php
include_once("Conexao.class.php");

try {
  $db = new Conexao();
  $sql = "INSERT INTO tb_mensagens VALUES (DEFAULT, :nome, :email, :mensagem)";
  $statmet = $db->prepare($sql);
  $statmet->bindValue(":nome", $_POST['nome'], PDO::PARAM_STR);
  $statmet->bindValue(":mensagem", $_POST['mensagem'], PDO::PARAM_STR);
  $statmet->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
  if(!$statmet->execute()){
      die("Não foi possível salvar sua mensagem.");
  }
} catch (Exception $e) {
  die($e->getMessage());
}
