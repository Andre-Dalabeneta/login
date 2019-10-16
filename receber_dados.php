<?php
//Conexão com o banco de dados
require_once 'configBD.php';

function verificar_entrada($entrada)
{
    //Filtrando a entrada
    $saida = htmlspecialchars($entrada);
    $saida = stripslashes($saida);
    $saida = trim($saida);
    return $saida; //retorna a saída limpa
}

//Teste se existe a ação

if (isset($_POST['action'])) {
    //Teste se ação é igual a cadastro
    if ($_POST['action'] == 'cadastro') {
        #echo "\n<p>cadastro</p>";
        #echo "\n<pre>";
        #print_r($_POST);
        #echo "\n<pre>";
        $nomeCompleto = verificar_entrada($_POST['nomeCompleto']);
        $nomeDoUsuario = verificar_entrada($_POST['nomeDoUsuario']);
        $emailUsuario = verificar_entrada($_POST['emailUsuario']);
        $senhaDoUsuario = verificar_entrada($_POST['senhaDoUsuario']);
        $senhaUsuarioConfirmar = verificar_entrada($_POST['senhaUsuarioConfirmar']);

        $dataCriado = date("Y-m-d"); //Data atual no formato de Banco de dados

        //codificando as senhas
        $senhaCodificada = sha1($senhaDoUsuario);
        $senhaConfirmarCod = sha1($senhaUsuarioConfirmar);
        //Teste de captura de dados
        //echo "<p>Nome completo: $nomeCompleto</p>";
        //echo "<p>Nome de usuário: $nomeDoUsuario</p>";
        //echo "<p>E-mail: $emailUsuario</p>";
        //echo "<p>Senha codificada: $senhaCodificada</p>";
        //echo "<p>Data de criação: $dataCriado</p>";
        if($senhaCodificada != $senhaConfirmarCod){
            echo "<p class='text-danger'>Senhas não conferem.</p>";
            exit();
        }else{
            $sql = $connect->prepare("SELECT nomeDoUsuario, emailUsuario 
            FROM usuario WHERE nomeDoUsuario = ? OR emailUsuario = ?");
            $sql->bind_param("ss", $nomeDoUsuario, $emailUsuario);
            $sql->execute();
            $resultado = $sql->get_result();
            $linha = $resultado->fetch_arr(MYSQLI_ASSOC);

            if($linha['nomeDoUsuario'] == $nomeDoUsuario){
                echo "<p class='text-danger'>Usuário indisponível</p>";
            }elseif($linha['emailUsuario'] ==$emailUsuario){
                echo "<p class='text-danger'>E-mail indisponível</p>";
            }else{
                $sql = $connect->prepare("INSERT into usuario(nomeDoUsuario, 
                emailUsuario, senhaDoUsuario, dataCriado)values(?, ?, ?, ?, ?)");
                $sql->bind_param("sssss", $nomeDoUsuario, $nomeCompleto, 
                $emailUsuario, $senhaCodificada, $dataCriado);
                if($sql->execute()){
                    echo "<p class='text-success'>Usuário cadastrado</p>";
                }else{
                    echo "<p class='text-danger'>Usuário não cadastrado</p>";
                    echo "<p class='tex-danger'>Algo deu errado</p>";
                }
            }

        }

    } else if ($_POST['action'] == 'login') {
        //Senão, teste se ação é login
        echo "\n<p>login</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n<pre>";
    } else if ($_POST['action'] == 'senha') {
        //Senão, teste se ação é recuperar senha
        echo "\n<p>senha</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n<pre>";
    } else {
        header("location:index.php");
    }
} else {
    //Redirecionando para index.php, negando o acesso
    //a esses arquivo diretaamente
    header("location:index.php");
}
