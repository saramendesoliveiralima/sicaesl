<?php 
$mensagens = isset($_SESSION['mensagens'])?$_SESSION['mensagens']:null;
if ($mensagens) {
  foreach($mensagens as $mensagem)
    echo "<p class='{$mensagem['tipo']}'>{$mensagem['texto']}</p>";
}
unset($_SESSION['mensagens']);