<?php
require_once'bd/bd_connect.php';


function formatarlogin($login,$valor)){

    $valor = trim($valor);
    $valor = str_replace(".","",$valor);
    $valor = str_replace("/","", $valor);
    $valor = str_replace("-","",$valor);
    $valor = str_replace(",","",$valor);

    return $valor;
}
function loginusuario($usuario,$senha){
    global $connect;
    $sql = "SELECT * FROM `usuarios` WHERE usuario = $usuario AND senha = '$senha';";
   $res_query = mysql_query($connect,$sql);
   
   if(mysqli_num_rows($res_query)){
       $dados= mysqli_fetch_array($res_query);
       $_SESSION['logado']= true;
       $_SESSION['nivel_usuario']=0;
       $_SESSION['login_usuario']= $dados[0];
       $_SESSION['usuario']= $dados[1];
       $_SESSION['senha']=$dados[2];
       header('location:painel_usuario.php');
   }else{
       $_SESSION['errologin']=true;
       $_SESSION['errologinusuario']=0;
       header('location:index.php');
   }
}

function validasessao(){
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION[$sessao])  &&  !isset($_SESSION['nivel_usuario'])){
        header('location:../index.php');
    }else{
        if($_SESSION['nivel_usuario']!= $nivel_usuario){
            header('location:../index.php');        
    }
}

}
function dados_bancarios(){

	global $connect;
	
$sql = "SELECT * FROM `dados_bancarios` WHERE dados_bancarios ";

	$resultado = mysqli_query($connect, $sql);

	if($resultado){
		while($reg = $resultado->fetch_array()) {
			$dados[] = $reg['curso']; 
		}
		return $dados;
	}else{
		return false;
	}
}   


function getusuarios(){
    global $connect;
    $id = mysqli_real_escape_string($_SESSION['usuario']);
    $usuario= mysqli_real_escape_string($_SESSION['user'])innerHTML('usuario nao cadastrado..');
    
    if(usuario.value==""){
        echo 'usuario nao encontrado!';
        $usuario = isset($_post['usuario']);
        return false;
        
    }else{
        echo'usuario encontrado com sucesso!';
        $usuario= isset($_post['usuario']);
        return false;
    }
    end die;
}
?>