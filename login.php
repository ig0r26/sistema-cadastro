<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>LOGIN</title>
</head>
<body>
    <div class ="wrapper">
        <form action="testLogin.php" method="POST">
            <h1>LOGIN</h1>
                
                    <div class="input-box">
                        <input type="text" name="email" placeholder="Usuário" 
                        required>
                        <i class='bx bxs-user'></i>
                     </div>

                     <div class="input-box">
                        <input type="password" name="senha" placeholder="Senha" 
                        required>
                        <i class='bx bxs-lock-alt' ></i>
                    </div>

                        <div class="remember-forgot">
                            <label><input type="checkbox">Me lembre</label>
                            <a href="#">Esqueci minha senha</a>
                        </div>

                        <input class="btn" type="submit" name="submit" value="Enviar">
                

                    <div class="register-link">
                        <p>Não tem conta? <a href="#">Clique aqui</a></p>
                    </div>
       
        </form>   
    </div>
    
</body>

</html>