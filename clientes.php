<?php 
    
    if(isset($_POST['submit']))
      {
        // print_r($_POST['nome']);
        //print_r('<br>');
        //print_r($_POST['cep']);
        //print_r('<br>');
        //print_r($_POST['endereco']);
        // print_r('<br>');
       // print_r($_POST['ponto_ref']);
       // print_r('<br>');
        //print_r($_POST['telefone']);
        //print_r('<br>');
        //print_r($_POST['idade']);
        //print_r('<br>');
        //print_r($_POST['candidat']);
        //print_r('<br>');
        //print_r($_POST['midia']);
        //print_r('<br>');

        include_once('config.php');

        $nome = $_POST['nome'];
        $cep =  $_POST['cep'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $complemento =  $_POST['complemento'];
        $pontoref = $_POST['ponto_ref'];
        $telefone = $_POST['telefone'];
        $idade =    $_POST['idade'];
        $candidat = $_POST['candidat'];
        $midia =    $_POST['midia'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,cep,endereco,bairro,complemento,ponto_ref,telefone,idade,candidat,midia)
        VALUES ( '$nome','$cep', '$endereco','$bairro','$complemento','$pontoref','$telefone','$idade','$candidat','$midia')");
    }


?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/clientes.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>MATERIAL CAMPANHA</title>
</head>
<body>
    <div class ="wrapper">
       <form id="form" action="clientes.php" method="POST">
            <h1>MATERIAL CAMPANHA</h1>
            <div class="input-box">
                <input type="text" name="nome" placeholder="NOME" 
                required>
              
                </div>

                <div class="input-box">
                    <input type="text" name="cep" id="cep" placeholder="CEP" 
                    required>
                    
                    </div>

                    <div class="input-box">
                        <input type="text" name="endereco" id="endereco" placeholder="ENDEREÇO" 
                        required>
                        
                        </div>

                        <div class="input-box">
                            <input type="text" name="bairro" id="bairro" placeholder="BAIRRO" 
                            required>
                            
                            </div>

                    <div class="input-box">
                        <input type="text" name="complemento" placeholder="COMPLEMENTO" 
                        required>
                        
                        </div>
                        
                    <div class="input-box">
                        <input type="text" name="ponto_ref" placeholder="PONTO DE REFERÊNCIA">
                        
                        </div>

                        
                    <div class="input-box">
                        <input type="text" name="telefone" placeholder="TELEFONE" 
                        required>
                        
                        </div>

                        
                    <div class="input-box">
                        <input type="text" name="idade" placeholder="IDADE" 
                        required>
                        
                        </div>

                    <div class="remember-forgot">
                        <label>Apoia a candidatura?
                            <input type="checkbox" id="candidat" value="apoia" name="candidat">Sim</label>
                        <label><input type="checkbox" id="candidat" value="napoia" name="candidat">Não</label>
                    </div>

                    <div class="remember-forgot">
                        <label>Tipo de mídia
                            <input type="checkbox" name="midia" id="digital" value="digital" >Digital</label>
                        <label><input type="checkbox" name="midia" id="fisica" value="fisica">Física</label>
                        
                    </div>

                    <button type="submit" name="submit" class="btn">Enviar</button>

                    
        </form>   
    </div>
    
</body>
    <script src="clientes.js"></script>

</html>