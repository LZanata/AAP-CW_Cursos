<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../images/logotipocw.png" />
    <!--Google Fontes Inicio-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!--Google Fontes FIM-->
    <!--BOOTSTRAPS inicio-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!--BOOTSRAPS FIM-->
    <title>CW Home</title>
  </head>
  <body>
    <style>
      /* Estilo Geral*/
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        background-color: #000;
        height: 100vh;
      }

      .interface {
        max-width: 1280px;
        margin: 0 auto;
      }

      .flex {
        display: flex;
      }

      h2.titulo {
        color: white;
        font-size: 34px;
        text-align: center;
      }
      h2.titulo span {
        color: blue;
      }

      /* Estilo do cabeçalho*/

      header {
        padding: 40px 4%;
      }

      header > .interface {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      header a {
        color: #b3b3b3;
        text-decoration: none;
        display: inline-block;
        transition: 0.2s;
      }

      header a:hover {
        color: #fff;
        transform: scale(1.2);
      }

      .menu-items {
        list-style-type: none;
      }

      .main-container {
        display: inline-block;
        padding: 0 40px;
      }

      .btn-alunos button {
        padding: 10px 40px;
        font-size: 18px;
        font-weight: 600;
        background-color: #6baffc;
        border: 0;
        border-radius: 30px;
        cursor: pointer;
      }

      .btn-alunos button:hover {
        box-shadow: 0px 0px 8px #0d2eeb;
      }

      .menu-toggle {
        display: none;
        flex-direction: column;
        justify-content: space-around;
        width: 30px;
        height: 30px;
        cursor: pointer;
        margin: 1rem;
      }

      .menu-toggle span {
        display: block;
        width: 100%;
        height: 6px;
        background: #ffffff;
        border-radius: 2px;
        transition: all 0.3s ease-in-out;
        margin: 2px;
      }

      /* Estilo do topo do site*/

      section.topo-do-site {
        padding: 40px 4%;
      }

      section.topo-do-site .flex {
        align-items: center;
        justify-content: center;
        gap: 70px;
      }

      .topo-do-site h1 {
        color: #fff;
        font-size: 30px;
        line-height: 40px;
      }

      .topo-do-site .txt-topo-site p {
        color: #fff;
        margin: 40px 0;
      }

      header .btn-alunos button {
        padding: 10px 40px;
        font-size: 18px;
        font-weight: 600;
        background-color: #6baffc;
        border: 0;
        border-radius: 30px;
        cursor: pointer;
      }
      header .btn-alunos button:hover {
        box-shadow: 0px 0px 8px #0d2eeb;
      }

      .topo-do-site .img-topo-site img {
        position: relative;
        animation: flutuar 2s ease-in-out infinite alternate;
      }

      @keyframes flutuar {
        0% {
          top: 0;
        }
        100% {
          top: 30px;
        }
      }
      /* Estilo das especialidades*/

      section.especialidades {
        padding: 40px 4%;
      }
      section.especialidades .flex {
        gap: 60px;
      }

      .especialidades .especialidades-box {
        color: white;
        padding: 40px;
        border-radius: 20px;
        margin-top: 45px;
        transition: 0.2s;
      }

      .especialidades .especialidades-box:hover {
        transform: scale(1.05);
        box-shadow: 0 0 8px white;
      }

      .especialidades .especialidades-box i {
        font-size: 66px;
        color: blue;
      }
      .especialidades .especialidades-box h3 {
        font-size: 28px;
        margin: 15px 0;
      }

      /* ESTILO DO SOBRE */

      section.sobre {
        padding: 40px 4%;
      }

      section.sobre .flex {
        align-items: center;
        gap: 60px;
      }

      .sobre .txt-sobre {
        color: white;
      }

      .sobre .txt-sobre h2 {
        font-size: 40px;
        line-height: 40px;
        margin-bottom: 30px;
      }

      .sobre .txt-sobre h2 span {
        color: blue;
        display: block;
      }

      .sobre .txt-sobre p {
        margin: 20px 0;
        text-align: justify;
      }

      .sobre .txt-sobre .btn-social button {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: none;
        background-color: blue;
        font-size: 30px;
        cursor: pointer;
        margin: 0 4px;
        transition: 0.2s;
      }

      .btn-social button:hover {
        box-shadow: 0px 0px 8px #0d2eeb;
        transform: scale(1.05);
      }

      @media (max-width: 660px) {
        /* Estilo do cabeçalho*/

        .btn-alunos {
          order: 3; /* Coloca o botão depois do menu */
        }

        .menu-container {
          display: flex;
          align-content: center;
        }

        .logo {
          order: 2; /* Coloca o logo depois do menu */
        }

        .menu-desktop {
          order: 1; /* Coloca o menu antes do logo */
          width: 4rem;
          height: 4rem;
          left: 5rem;
          top: 5rem;
        }

        .menu-items {
          display: none;
          flex-direction: column;
          background: #b3b3b3;
          padding: 2rem;
        }

        .menu-toggle {
          display: block;
          transition: 0.2s;
        }

        .menu-toggle:hover {
          color: #fff;
          transform: scale(1.2);
        }

        .menu-items {
          display: none;
          flex-direction: column;
          position: absolute;
          background: #000;
          width: 100%;
          top: 9rem;
          border-radius: 2px;
          font-weight: 600;
        }

        .menu-items.show {
          display: flex;
          background: #eeeeeee3;
          width: 7.5rem;
          height: 12rem;
          padding: 0rem;
        }

        .menu-items.show a {
          color: #000;
        }

        .main-container {
          margin-left: 0.2rem;
          padding-left: 1rem;
        }

        .main-content a {
          font-size: 20px;
          margin: 0.5rem 0;
        }

        /*Estilo do Topo do Site*/

        section.topo-do-site .flex {
          flex-direction: column;
        }

        /* ESTILO DO SOBRE */

        section.sobre .flex {
          flex-direction: column-reverse;
        }
      }

      @media (max-width: 460px) {
        /* Estilo do cabeçalho*/
        .btn-alunos a button {
          padding: 10px 10px;
        }

        /* Estilo do topo do site*/
        .img-topo-site img {
          width: 20rem;
        }

        /* ESTILO DO SOBRE */
        .img-sobre img {
          width: 20rem;
        }
      }

      @media (max-width: 400px) {
        /* Estilo Geral*/
        h2.titulo {
          font-size: 32px;
        }
        /* Estilo do cabeçalho*/
        .btn-alunos a button {
          font-size: 15px;
        }

        /* Estilo do topo do site*/
        .img-topo-site img {
          width: 15rem;
        }

        /* ESTILO DO SOBRE */
        .img-sobre img {
          width: 15rem;
        }
      }
    </style>
    <header>
      <div class="interface">
        <div class="logo">
          <a href="#">
            <img src="../images/logotipodacw.png" alt="Logo da CW Cursos" />
          </a>
        </div>
        <!--logo-->

        <nav class="menu-desktop">
          <div class="menu-container">
            <div class="menu-toggle" id="menuToggle">
              <span></span>
              <span></span>
              <span></span>
            </div>

            <div class="menu-items" id="menuItems">
              <div class="main-container">
                <div class="main-content">
                  <a href="../TelaInicial/index.php"> Início </a>
                </div>
              </div>

              <div class="main-container">
                <div class="main-content">
                  <a href="abacursos/abacursos.php">Cursos</a>
                </div>
              </div>

              <div class="main-container">
                <div class="main-content">
                  <a href="abasobre.php">Sobre</a>
                </div>
              </div>

              <div class="main-container">
                <div class="main-content">
                  <a href="#">Ajuda</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!--menu de navegação-->

        <div class="btn-alunos">
          <a href="areadoaluno.php">
            <button>Área do Aluno</button>
          </a>
        </div>
        <!--área do aluno-->
      </div>
      <!--interface-->
    </header>

    <main>
      <section class="topo-do-site">
        <div class="interface">
          <div class="flex">
            <div class="txt-topo-site">
              <h1>
                Desperte seu potencial: Explore novos horizontes com nossos
                cursos online de excelência!
              </h1>
              <p>
                Transformamos conhecimento em oportunidades tangíveis. Com uma
                variedade de cursos online, capacitamos você para o sucesso na
                área de Marketing Digital. Descubra o poder da aprendizagem
                flexível e personalizada.
              </p>

              <div class="btn-alunos">
                <a href="abacursos.html">
                  <button>Acesse os cursos</button>
                </a>
              </div>
            </div>
            <!--txt-topo-site-->
            <div class="img-topo-site">
              <img src="../images/imagemsistema01.png" />
            </div>
            <!--img-topo-site-->
          </div>
          <!--flex-->
        </div>
        <!--interface do topo do site-->
      </section>
      <!--topo do site-->

      <section class="especialidades">
        <div class="interface">
          <h2 class="titulo">NOSSAS <span>ESPECIALIDADES.</span></h2>
          <div class="felx">
            <div class="especialidades-box">
              <i class="bi bi-code-square"></i>
              <h3>Cursos de MKD</h3>
              <p>
                Estudar marketing digital é uma escolha estratégica para quem
                busca se destacar em um mercado competitivo, pois oferece
                conhecimentos fundamentais para entender e influenciar o
                comportamento do consumidor online, impulsionando resultados
                tangíveis para empresas e marcas.
              </p>
            </div>
            <!--especialidades-box-->

            <div class="especialidades-box">
              <i class="bi bi-cart"></i>
              <h3>Sobre os Cursos</h3>
              <p>
                A CW oferece cursos online de marketing digital, cobrindo desde
                conceitos básicos até estratégias avançadas, como SEO, mídias
                sociais, publicidade online e análise de dados. Os alunos
                recebem instrução prática e suporte especializado para aplicar
                suas habilidades de forma eficaz.
              </p>
            </div>
            <!--especialidades-box-->

            <div class="especialidades-box">
              <i class="bi bi-hand-index-fill"></i>
              <h3>Sobre a CW</h3>
              <p>
                Na CW, estamos comprometidos com o sucesso de nossos alunos,
                oferecendo suporte personalizado e recursos interativos para
                garantir uma experiência de aprendizado enriquecedora e eficaz.
                Junte-se a nós e embarque na jornada para dominar o marketing
                digital. Clique para saber mais.
              </p>
            </div>
            <!--especialidades-box-->
          </div>
          <!--flex-->
        </div>
        <!--interface/especialidades-->
      </section>
      <!--especialidades-->

      <section class="sobre">
        <div class="interface">
          <div class="flex">
            <div class="img-sobre">
              <img src="../images/mktimage.jpg" alt="" />
            </div>
            <!--img-sobre-->

            <div class="txt-sobre">
              <h2>SAIBA MAIS SOBRE <span> O MKT DIGITAL.</span></h2>
              <p>
                Marketing digital é a promoção de produtos, serviços ou marcas
                através de canais online como redes sociais, sites, e-mails e
                motores de busca. Isso envolve estratégias como conteúdo
                relevante, SEO para melhorar a visibilidade online, anúncios
                pagos, e-mail marketing e interações em mídias sociais. A
                vantagem reside na capacidade de segmentação e mensuração em
                tempo real, permitindo alcançar e engajar o público-alvo de
                forma mais eficaz.
              </p>
              <p>
                No mundo digital atual, dominar o marketing online é essencial.
                A internet democratizou o acesso ao conhecimento nessa área,
                tornando-o crucial para carreiras e empreendimentos. Habilidades
                em marketing digital são valorizadas no mercado de trabalho e
                oferecem vantagens significativas para empreendedores. Contudo,
                é importante manter-se atualizado, pois o cenário digital está
                em constante evolução. Em resumo, o marketing digital não é
                apenas uma habilidade, mas sim uma necessidade para se destacar
                no mundo online atual.
              </p>
              <div class="btn-social">
                <a href="#"
                  ><button><i class="bi bi-instagram"></i></button
                ></a>
                <a href="#"
                  ><button><i class="bi bi-twitter-x"></i></button
                ></a>
                <a href="#"
                  ><button><i class="bi bi-facebook"></i></button
                ></a>
              </div>
              <!--btn-social-->
            </div>
            <!--txt-sobre-->
          </div>
          <!--flex-->
        </div>
        <!--interface-->
      </section>
      <!--sobre-->
    </main>
    <script>
      const menuToggle = document.getElementById("menuToggle");
      const menuItems = document.getElementById("menuItems");

      menuToggle.addEventListener("click", () => {
        menuItems.classList.toggle("show");
      });
    </script>
    <!--Script para ativar o dropdown do menu de navegação-->
  </body>
</html>
