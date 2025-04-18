<?php
session_start(); // Inicia a sessão
include_once('config.php'); // Inclui o arquivo de configuração

// Verifica se o formulário foi submetido
if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o e-mail termina com "@cwprof.com"
    if (!preg_match("/@cwprof\.com$/", $email)) {
        echo "<script>alert('E-mail inválido. Use um e-mail com o domínio @cwprof.com.');</script>";
        exit();
    }

    // Prepara a consulta para verificar o usuário, o e-mail e o tipo "professor"
    $loginQuery = "SELECT * FROM usuarios WHERE usuario = ? AND email = ? AND tipo = 'professor'";
    $stmt = $conexao->prepare($loginQuery);
    $stmt->bind_param("ss", $usuario, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o usuário foi encontrado
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifica se a senha está correta
        if (password_verify($senha, $user['senha'])) {
            $_SESSION['usuario'] = $user['usuario'];
            header('Location: Painel professor/index.html'); // Redireciona para o painel do professor
            exit();
        } else {
            echo "<script>alert('Senha incorreta!');</script>";
        }
    } else {
        echo "<script>alert('Usuário, e-mail ou tipo de conta incorretos!');</script>";
    }

    // Fecha a conexão
    $stmt->close();
    $conexao->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign-in</title> 
</head>
<body>
    <style>
        /* Importa a fonte Roboto do Google Fonts */
        @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

        /* Reseta as margens e padding, define a fonte padrão */
        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        /* Estilo para o corpo da página */
        body {
            background-image: url(images/cwlogin.png); /* Imagem de fundo */
            background-repeat: no-repeat; /* Não repetir a imagem */
            background-size: cover; /* Cobre toda a área */
            background-attachment: fixed; /* Fixa a imagem no fundo */
        }

        /* Container principal */
        .container {
            display: flex; /* Flexbox */
            justify-content: center; /* Centraliza horizontalmente */
            width: 100%; /* Largura total */
            margin-top: 100px; /* Margem superior */
        }

        /* Cartão de login */
        .card {
            background-color: #ffffff80; /* Fundo branco semitransparente */
            padding: 30px; /* Espaçamento interno */
            border-radius: 4%; /* Bordas arredondadas */
            box-shadow: 3px 3px 1px 0px #00000060; /* Sombra */
        }

        /* Estilo para o título */
        h1 {
            text-align: center; /* Centraliza o texto */
            margin-bottom: 20px; /* Margem inferior */
            color: #272262; /* Cor do texto */
        }

        /* Estilo para os inputs dentro do label-float */
        .label-float input {
            width: 100%; /* Largura total */
            padding: 5px 5px; /* Espaçamento interno */
            display: inline-block; /* Exibição em linha */
            border: 0; /* Remove borda */
            border-bottom: 2px solid #272262; /* Borda inferior */
            background-color: transparent; /* Fundo transparente */
            outline: none; /* Remove outline */
            min-width: 180px; /* Largura mínima */
            font-size: 16px; /* Tamanho da fonte */
            transition: all .3s ease-out; /* Transição suave */
            border-radius: 0; /* Remove bordas arredondadas */
        }

        /* Container para os inputs e labels flutuantes */
        .label-float {
            position: relative; /* Posicionamento relativo */
            padding-top: 13px; /* Espaçamento superior */
            margin-top: 5%; /* Margem superior */
            margin-bottom: 5%; /* Margem inferior */
        }

        /* Estilo para os inputs focados */
        .label-float input:focus {
            border-bottom: 4px solid #4038a0; /* Borda inferior quando focado */
        }

        /* Estilo para os labels */
        .label-float label {
            color: #272262; /* Cor do texto */
            pointer-events: none; /* Desabilita eventos do mouse */
            position: absolute; /* Posicionamento absoluto */
            top: 0; /* Alinha ao topo */
            left: 0; /* Alinha à esquerda */
            margin-top: 13px; /* Margem superior */
            transition: all .3s ease-out; /* Transição suave */
        }

        /* Estilo para labels quando o input está focado ou preenchido */
        .label-float input:focus + label,
        .label-float input:valid + label {
            font-size: 13px; /* Tamanho da fonte */
            margin-top: 0; /* Remove margem superior */
            color: #4038a0; /* Cor do texto */
        }

        /* Estilo para o botão de submit */
        .inputSubmit {
            background-color: transparent; /* Fundo transparente */
            border-color: #272262; /* Cor da borda */
            color: #272262; /* Cor do texto */
            padding: 7px; /* Espaçamento interno */
            font-weight: bold; /* Texto em negrito */
            font-size: 12pt; /* Tamanho da fonte */
            margin-top: 20px; /* Margem superior */
            border-radius: 4px; /* Bordas arredondadas */
            cursor: pointer; /* Cursor de ponteiro */
            outline: none; /* Remove outline */
            transition: all .4s ease-out; /* Transição suave */
        }

        /* Estilo para o botão de submit quando o mouse está sobre ele */
        .inputSubmit:hover {
            background-color: #272262; /* Fundo azul */
            color: #fff; /* Cor do texto */
        }

        /* Container para centralizar conteúdo */
        .justify-center {
            display: flex; /* Flexbox */
            justify-content: center; /* Centraliza horizontalmente */
        }

        /* Estilo para a linha horizontal */
        hr {
            margin-top: 10%; /* Margem superior */
            margin-bottom: 10%; /* Margem inferior */
            width: 60%; /* Largura */
        }

        /* Estilo para parágrafos */
        p {
            color: #272262; /* Cor do texto */
            font-size: 14pt; /* Tamanho da fonte */
            text-align: center; /* Centraliza o texto */
        }

        /* Estilo para links */
        a {
            color: #7a3077; /* Cor do texto */
            font-weight: bold; /* Texto em negrito */
            text-decoration: none; /* Remove sublinhado */
            transition: all .3s ease-out; /* Transição suave */
        }

        /* Estilo para links quando o mouse está sobre eles */
        a:hover {
            color: #272262; /* Cor do texto */
        }
    </style>
    
    
    <!-- Container principal -->
    <div class="container">
        <div class="card">
            <h1>Entrar como Professor</h1> <!-- Título do formulário -->
            <form action="loginProf.php" method="POST"> <!-- Formulário de login -->
                <div id="msgError"></div> <!-- Mensagem de erro -->
                
                <!-- Campo de usuário com label flutuante -->
                <div class="label-float">
                    <input type="text" name="usuario" id="usuario" placeholder=" " required /> 
                    <label id="userLabel" for="usuario">Usuario do Professor</label>
                </div>
                
                <div class="label-float">
                    <input type="email" name="email" required placeholder=" " />
                    <label for="email">E-mail</label>
                </div>
                
                <!-- Campo de senha com label flutuante -->
                <div class="label-float">     
                    <input type="password" name="senha" id="senha" placeholder=" " required /> 
                    <label id="senhaLabel" for="senha">Senha</label>
                    <i class="fa fa-eye" aria-hidden="true"></i> <!-- Ícone de olho -->
                </div>
                
                <!-- Botão de submit centralizado -->
                <div class="justify-center">
                    <input class="inputSubmit" type="submit" name="submit" value="Entrar">
                </div>
            </form>
            
            <!-- Link para a página de cadastro -->
            <p>Não mandou o forms pra <br>cadastro? <a href="inscricoesProfessores/forms.html">Clique aqui</a></p>
        </div>
    </div>
</body>
</html>

