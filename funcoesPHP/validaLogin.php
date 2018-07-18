<?php 
    $validacao = 0;
    $nome = $_POST['userid'];
    $senha = $_POST['pswrd'];
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
    foreach($usuarios['usuarios'] as $value){
      if($nome === $value['nome'] && $senha === $value['senha']){
        $validacao = 1;
      }
    }

  if($validacao === 1){
    header('Location:page2.php');
    exit;
  }else{ ?>   
    <script>alert ('Usuário ou senha incorreto')</script>
   <?php }
?>