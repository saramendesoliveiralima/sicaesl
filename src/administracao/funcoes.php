<?php
/**
 * Função que cria uma mensagem
 * @param string tipo de mensagem (erro, sucesso)
 * @param string texto da mensagem
 */
function criarMensagem($tipo, $texto){
    //Cria array de mensagem e retorna
    return array('tipo'=> $tipo,'texto' => $texto);
}
/**
 * Função que inclui mensagens na sessão e redireciona página
 * @param array mensagens a serem incluídas na sessão
 * @param string local para redirecionamento
 */
function redirecionarComMensagens($mensagens, $local){
    //Inclui mensagens na sessao
    $_SESSION['mensagens'] = $mensagens;
    //Retorna para local passado
    header("location: {$local}");
}
?>