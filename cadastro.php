<doctype html>
    
   <html lang="pt-br">
       <head>
      <meta charset="utf-8">
<title>cadastro finalizado</title>

<meta property ="ogg:title" content ="cadastro realizado com sucesso!">
<meta property="ogg:description"content="cadastro de todos os usuarios usados pelo serviço do site!">
<meta property="ogg:url" content="https://repairfogoes.com.br/">
<meta property="ogg:type" content="website">
<link rel="preconnect" href="https://a3.pubguru.net" crossorigin="">
<link rel="dns-prefetch" href="https://a3.pubguru.net">
<script src ="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2022020201.js?31064717"></script>

</head>
<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('127.0.0.1','u927112872_agb77','');
$db = mysql_select_db('u927112872_sTJuD');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.php';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.php';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.php'</script>";
        }
      }
    }
?>

</html>