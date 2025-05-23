<?php session_start(); ?>
<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="S.css" />
    <link rel="shortcut icon" type="image/x-icon" href="https://d2ffu0zq97rhm7.cloudfront.net/fallback/brand_image/default.png" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://d2ffu0zq97rhm7.cloudfront.net/fallback/cover_image/desktop-2.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            /* Espaçamento entre o cabeçalho e o contêiner */
            background: rgba(255, 255, 255, 0.9);
            /* Fundo branco com transparência das caixas de texto */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        h1,
        h2 {
            text-align: center;
            margin-bottom: 20px;
            /* Espaçamento abaixo dos títulos */
        }

        .question-input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #4CAF50;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .question-input:focus {
            border-color: #1E7E34;
            outline: none;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        .button:hover {
            background-color: #45a049;
        }

        .forum-post {
            background: rgba(249, 249, 249, 0.9);
            /* Fundo dos posts com transparência */
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .delete-button {
            background-color: #f44336;
            margin-top: 10px;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <header>
        <nav class='navbar navbar-default customer-nav customer-brand-nav' role='navigation'>
            <div class='container'>
                <div class='collapse navbar-collapse' id='navbar-collapse-1'>
                    <ul class='nav navbar-nav navbar-right control-account'>
                        <li class='customer-info user-menu'>
                            <div>
                                <div class='profile-img-container'>
                                    <div class='info'>
                                        <span class='hello-customer'>Olá,</span>
                                        <span class='customer-name'>Professor(a)</span>
                                    </div>
                                    <img class="customer-img" src="https://d2ffu0zq97rhm7.cloudfront.net/fallback/profile_image/nav_img_default.png" alt="Nav img default" />
                                    <div class='show-menu arrow-down'></div>
                                </div>
                            </div>
                            <div class='customer-wrapper'>
                                <div class='customer-menu-box'>
                                    <div class='arrow-menu-up'></div>
                                    <p class='customer-email'>emailprofessor@cw.com</p>
                                    <ul class='customer-actions'>
                                        <li><a href="perfil.html">Minha Conta</a></li>
                                        <li><a target="_blank" href="../Suporte/Suporte.html">Suporte</a></li>
                                        <li><a id="customer-dashboard-logout" rel="nofollow" data-method="delete" href="/sign_out">Sair</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <a id="sidebar-toggle-white" href="#"><span class='sr-only'>Toggle navigation</span></a>

        <nav class='navbar navbar-default brand-nav' role='navigation'>
            <div class='container'>
                <button class='navbar-toggle' data-target='#navbar-collapse-2' data-toggle='collapse' type='button'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbar-collapse-2'>
                    <ul class='nav navbar-nav navbar-left'></ul>
                </div>
            </div>
        </nav>

        <div class='new-customer-nav'>
            <div class='container'>
                <div class='mainnav mainnav-pt-BR' id='mainnav' role='navigation'>
                    <ul>
                        <li class='mainnav-item nav-li nav-li-js' id='mainnav-panel'>
                            <a class="mainnav-item-link" href="../Painel professor/forum.html">Fórum de Dúvidas</a>
                        </li>
                        <li class='mainnav-item nav-li nav-li-js' id='mainnav-my-courses'>
                            <a class="mainnav-item-link" href="../Painel professor/novocurso.html">Meus cursos</a>
                            <div class='nav-arrow nav-arrow-js'></div>
                            <div class='subnav nav-sub nav-sub-js'>
                                <ul class='subCMSListMenuUL' id='CMSListMenu3'>
                                    <li class='subCMSListMenuLI'><a class="subCMSListMenuLink" href="../Painel professor/index.html">Todos os cursos</a></li>
                                    <li class='subCMSListMenuLI'><a class="subCMSListMenuLink linkSecondColor" href="../Painel professor/provas.html">Provas</a></li>
                                    <li class='subCMSListMenuLI'><a class="subCMSListMenuLink linkSecondColor" href="/customer/brand/certificates">Notas de atividades</a></li>
                                    <li class='subCMSListMenuLI'>
                                        <a class="subCMSListMenuLink linkSecondColor" id="create-a-new-course" data-remote="true" href="../Painel professor/novocurso.html">
                                            <span aria-hidden='true' class='glyphicon glyphicon-plus'></span> Adicionar curso
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <h1>Bem-vindo ao Fórum de Dúvidas</h1>
        <h2>Faça sua Pergunta</h2>
        <input type="text" id="questionTitle" class="question-input" placeholder="Título da dúvida" required>
        <textarea id="questionContent" class="question-input" placeholder="Escreva sua dúvida..." rows="5" required></textarea>
        <button class="button" onclick="addQuestion()">Enviar Dúvida</button>
        <div id="forumPosts" style="margin-top: 20px;"></div>
    </div>

    <script>
        function addQuestion() {
            const title = document.getElementById('questionTitle').value;
            const content = document.getElementById('questionContent').value;

            if (title && content) {
                const post = {
                    title,
                    content
                };
                saveToLocalStorage(post);
                renderPosts();
                clearInputs();
            } else {
                alert("Por favor, preencha o título e o conteúdo.");
            }
        }

        function saveToLocalStorage(post) {
            const posts = JSON.parse(localStorage.getItem('forumPosts')) || [];
            posts.push(post);
            localStorage.setItem('forumPosts', JSON.stringify(posts));
        }

        function renderPosts() {
            const forumPosts = document.getElementById('forumPosts');
            forumPosts.innerHTML = '';
            const posts = JSON.parse(localStorage.getItem('forumPosts')) || [];
            posts.forEach((post, index) => {
                const postContainer = document.createElement('div');
                postContainer.classList.add('forum-post');

                const postTitle = document.createElement('h4');
                postTitle.textContent = post.title;

                const postContent = document.createElement('p');
                postContent.textContent = post.content;

                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Excluir';
                deleteButton.className = 'delete-button';
                deleteButton.onclick = () => deletePost(index);

                postContainer.appendChild(postTitle);
                postContainer.appendChild(postContent);
                postContainer.appendChild(deleteButton);
                forumPosts.appendChild(postContainer);
            });
        }

        function deletePost(index) {
            const posts = JSON.parse(localStorage.getItem('forumPosts')) || [];
            posts.splice(index, 1);
            localStorage.setItem('forumPosts', JSON.stringify(posts));
            renderPosts();
        }

        function clearInputs() {
            document.getElementById('questionTitle').value = '';
            document.getElementById('questionContent').value = '';
        }

        // Renderizar os posts ao carregar a página
        document.addEventListener('DOMContentLoaded', renderPosts);
    </script>
</body>

</html>