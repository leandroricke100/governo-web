<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="style.css?v=<?= time() ?>" />
  <title>GovernoWeb</title>
  <link rel="stylesheet" href="./fontawesome/fontawesome-pro.css" />

  <link rel="shortcut icon" href="assets/cloud-47.svg">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/@simondmc/popup-js@1.4.3/popup.min.js"></script> -->

</head>

<body>
  <!-- POPUP -->
  <!-- <div id="popup" style="display: none;">
    <p class="leg-close">Fechará em 6 segundos...</p>
    <button type="button" onclick="closePopUp();"><i class="fas fa-times"></i></button>
    <div class="conteudo">
      <img src="/assets/popup/folder-forum.jpg" alt="Fórum Minas">
    </div>
  </div> -->

  <!-- CABEÇALHO -->
  <section id="hero">
    <header>
      <nav id="menu-mobile">
        <button onclick="menuMobile()" class="bloco-mobile">
          <div id="open">
            <i class="fal fa-bars"></i>
          </div>
        </button>
        <button onclick="fechar()" id="close" class="bloco-mobile" style="display: none;">
          <div>
            <i class="fas fa-times"></i>
          </div>
        </button>


      </nav>
      <img src="./assets/logo-governo.png" alt="logo governo web" />
      <nav class="menu">
        <ul class="menu-ul">

          <li><a href="#solucoes">Benefícios</a></li>
          <li><a href="#clientes">Clientes</a></li>
          <li><a href="#solucao">Soluções</a></li>
          <li><a href="#depoimentos">Depoimentos</a></li>
          <li><a class="whatsapp falar-com-atendente" href="https://api.whatsapp.com/send?phone=5531984649775&text=Ol%C3%A1,%20gostaria%20de%20solicitar%20um%20or%C3%A7amento!" target="_blank">
              <i class="far fa-user" style="margin-right: 5px"></i> Falar
              com Atendente</a></li>
        </ul>
      </nav>
    </header>

    <div class="conteudo">
      <div class="menu-lateral" id="menu-lateral" style="display: none;">
        <a href="#solucoes">Benefícios</a>
        <a href="#clientes">Clientes</a>
        <a href="#solucao">Soluções</a>
        <a href="#depoimentos">Depoimentos</a>
        <a id="falar-atendente" href="https://api.whatsapp.com/send?phone=5531984649775&text=Ol%C3%A1,%20gostaria%20de%20solicitar%20um%20or%C3%A7amento!" target="_blank">Falar com Atendente</a>
      </div>
      <div class="texto">
        <h1>
          Conheça as melhores e mais completas soluções para o Poder
          Público.
        </h1>
        <p>
          O <strong><span>GWLEGIS</strong></span> é um software completo de gerenciamento e gestão
          do processo legislativo, totalmente desenvolvido no conceito de
          cloud computing (dispensa investimentos com infra-estrutura
          interna), ou seja, um sistema web especialmente pensado para
          otimizar as rotinas administrativas de Câmaras Municipais.
        </p>


        <a id="saiba-mais" href="https://api.whatsapp.com/send?phone=5531984649775&text=Ol%C3%A1,%20gostaria%20de%20solicitar%20um%20or%C3%A7amento!" target="_blank">Saiba mais<i class="fas fa-angle-down" style="margin-left: 10px"></i></a>

      </div>
      <div class="img">
        <img src="./assets/img-tela.png" alt="foto da tela de login" />
      </div>
    </div>
  </section>

  <section id="solucoes" class="beneficios">
    <div class="conteudo">
      <h1><i class="fad fa-angle-right"></i> Benefícios do Sistema de constrole Legislativo</h1>
      <div class="container-beneficios">
        <div class="container-items">
          <img src="assets/sistema/Frame1.png" alt="logo-agilidade">
          <p>Agilidade na
            tramitação de
            documentos
            entre setores</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/Group 5.png" alt="logo-integracao">
          <p>Integração
            Prefeitura e
            Câmara</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/Group3.png" alt="logo-emissao">
          <p>Emissão de todos
            os documentos
            100% digital</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/Group4.png" alt="logo-pauta">
          <p>Geração
            automática da
            pauta da sessão</p>
        </div>

        <div class="container-items">
          <img src="assets/sistema/Group6.png" alt="logo-modelo-predefinido">
          <p>Utilização de
            modelos pré
            definidos de
            documentos</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/Group-6.png" alt="logo-controle-parlamentar">
          <p>Controle de
            gabinete do
            parlamentar</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/Group7.png" alt="logo-atualização-tempo-real">
          <p>Legislação
            atualizada em
            tempo real</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/Group8.png" alt="logo-gps">
          <p>GPS
            Legislativo</p>
        </div>

        <div class="container-items">
          <img src="assets/sistema/bot.png" alt="logo-gps">
          <p>Elaboração de documento com Inteligência Artificial</p>
        </div>
      </div>
    </div>
    <div class="conteudo">
      <h1><i class="fad fa-angle-right"></i> Benefícios do Painel Eletrônico de Votação</h1>
      <div class="container-beneficios">
        <div class="container-items">
          <img src="assets/sistema/1.png" alt="logo-produtividade">
          <p>Aumento da
            produtividade e
            maior agilidade</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/2.png" alt="logo-transparecia">
          <p>Total
            transparência
            e maior
            visibilidade</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/3.png" alt="logo-aproveitamento-plenario">
          <p>Melhor
            aproveitamento
            na utilização do
            plenário</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/4.png" alt="logo-modernização">
          <p>Modernização
            das sessões e
            eventos</p>
        </div>

        <div class="container-items">
          <img src="assets/sistema/5.png" alt="logo-controle-interno">
          <p>Controle
            integral e
            instantâneo dos
            eventos</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/6.png" alt="logo-tribuna">
          <p>Controle do
            tempo de
            tribuna</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/7.png" alt="logo-pauta">
          <p>Geração
            automática de
            boletins e pauta</p>
        </div>
        <div class="container-items">
          <img src="assets/sistema/8.png" alt="logo-parlamentar">
          <p>Terminal do
            parlamentar
            100% seguro</p>
        </div>
      </div>
    </div>
  </section>

  <section id="clientes" class="clientes">

    <h2><i class="fad fa-angle-right"></i> Conheça alguns de nossos clientes</h2>
    <div class="slider-clientes">
      <div class="slides-clientes">
        <div class="slide-clientes">
          <div class="bloco-cliente">
            <img id="pedradosvolantes" src="assets/pedradosvolantes.png" alt="logo-manga" style="width: 666px; margin-left: 13px;" />
            <img id="manga" src="assets/manga.png" alt="logo-manga" style="width: 426px;" />
            <img id="nanuque" src="assets/nanuque.png" alt="logo-nanuque" style="width: 466px; margin-left: 5px;" />
          </div>
        </div>

        <div class="slide-clientes">
          <div class="bloco-cliente">
            <img id="senadormendes" src="assets/senadormendes.png" alt="logo-senador-mendes" style="width: 713px; margin-left: -8px;" />
            <img id="saogeraldodobaxio" src="assets/saogeraldodobaxio.png" alt="logo-sao-geraldo-do-baixio" />
            <img id="alvoradademinas" src="assets/alvoradademinas.png" alt="logo-alvorada-de-minas" style="width: 600px; margin-left: -8px;" />
          </div>
        </div>


        <div class="slide-clientes">
          <div class="bloco-cliente">
            <img id="galileia" src="assets/galileia.png" alt="logo-galileia" style="width: 410px;margin-left: 21px;" />
            <img id="novabelem" src="assets/novabelem.png" alt="logo-novabelem" style="width: 509px;margin-left: 25px;" />
            <img id="itaobim" src="assets/itaobim.png" alt="logo-itaobim" style="width: 410px;margin-left: 21px;" />
          </div>
        </div>

        <div class="slide-clientes">
          <div class="bloco-cliente">
            <img id="centraldeminas" src="assets/centraldeminas.png" alt="logo-centraldeminas" style="width: 554px; margin-left: 3px;" />
            <img id="conselheiropena" src="assets/conselheiropena.png" alt="logo-conselheiropena" style="width: 601px;" />
            <img id="freiinocencio" src="assets/freiinocencio.png" alt="logo-freiinocencio" style="width: 562px;" />
          </div>
        </div>

      </div>
    </div>

  </section>

  <section id="solucao" class="sistemas">
    <div class="conteudo">

      <div class="container-sistemas">
        <h1>
          <i class="fal fa-clouds" style="margin-right: 8px;"></i>Soluções
        </h1>
        <div class="items">
          <div class="wrap">
            <p>
              <i class="fad fa-check" style="margin-right: 8px;"></i>Maior agilidade no processo de presença
              votação
            </p>
            <p>
              <i class="fad fa-check" style="margin-right: 8px;"></i>Total transparência nas atividades
              legislativas
            </p>
            <p>
              <i class="fad fa-check" style="margin-right: 8px;"></i>Otimização das atividades parlamentares
            </p>
            <p>
              <i class="fad fa-check" style="margin-right: 8px;"></i>Maior visibilidade dos trabalhos em plenário
            </p>
            <p>
              <i class="fad fa-check" style="margin-right: 8px;"></i>Emissão de documentos e relatórios em tempo
              real
            </p>
            <p>
              <i class="fad fa-check" style="margin-right: 8px;"></i>Viabilização do plenário para atividades
              extras
              parlamentares
            </p>
            <p>
              <i class="fad fa-check" style="margin-right: 8px;"></i>Modernização da casa legislativa
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="depoimentos" class="clientes">

    <h2><i class="fad fa-angle-right"></i> O que dizem sobre nós</h2>
    <div class="slider-depoimentos">

      <div class="slides-depoimentos">

        <div class="slide-depoimentos">
          <div class="bloco-img"><img src="assets/img-joao.jpeg" alt="foto-joao"></div>
          <div class="bloco">
            <div class="bloco-depoimento">
              <h3>João Henrique</h3>
              <span>Assessor de Comunicação - Câmara de Luz - MG</span>
              <p>Antes de contratarmos a Governoweb analisamos outras empresas, e acabamos optando por ela,
                devido a credibilidade no mercado nacional, a empresa estar sempre a frente, nos orientando em relação a
                Lei
                de acesso a informação
                fora que o site apresenta um interface bonita e moderna.</p>
            </div>
          </div>
        </div>
        <div class="slide-depoimentos">
          <div class="bloco-img"><img src="assets/nivaldo.jpeg" alt="foto-nivaldo"></div>
          <div class="bloco">
            <div class="bloco-depoimento">
              <h3>Nivaldo</h3>
              <span>Presidente da Câmara de Ponto dos Volantes - MG</span>
              <p>
                A principal melhoria com a implantação do sistema de controle legislativo foi a possibilidade de
                trabalharmos
                de forma 100% digital,
                <span id="papel">sem a utilização de papel</span>, gerando economia, celeridade do
                processo legislativo e transparência nos atos do poder
                legislativo, melhorando a comunicação interna entre os setores!
              </p>
            </div>
          </div>
        </div>
        <div class="slide-depoimentos">
          <div class="bloco-img"><img src="assets/rodrigo.jpeg" alt="foto-rodrigo"></div>
          <div class="bloco">
            <div class="bloco-depoimento">
              <h3>Rodrigo</h3>
              <span>Diretor Geral - Câmara de Ribeirão das Neves - MG</span>
              <p>
                O Diferencial do sistemas e a segurança da informação. A gente precisava ter um histórico de tudo que
                acontecia na Câmara, tudo que era apresentando pelo vereadores,
                exatamente para transmitir transparência do Legislativo. e aproximar a população a câmara municipal
                a Governoweb foi única empresa que apresentou esta segurança e estamos juntos na parceria a a mais de 4
                anos.
              </p>
            </div>
          </div>
        </div>
        <div class="slide-depoimentos">
          <div class="bloco-img"><img src="assets/marcus.jpeg" alt="foto-marcus"></div>
          <div class="bloco">
            <div class="bloco-depoimento">
              <h3>Marcus</h3>
              <span>Chefe do Departamento de Informática - Prefeitura de Inhaúma</span>
              <p>
                Parabenizo toda a Equipe da GovernoWeb, por serem extremamente atenciosos e profissionais,
                excelente atendimento, com respostas precisas e rápidas. Com certeza o atendimento é um diferencial
                deles.
              </p>
            </div>
          </div>
        </div>
        <div class="slide-depoimentos">
          <div class="bloco-img"><img src="assets/jimmy.jpeg" alt="foto-jimmy"></div>
          <div class="bloco">
            <div class="bloco-depoimento">
              <h3>Jimmy Dutra </h3>
              <span>Prefeito de Frei Inocêncio - MG</span>
              <p>
                Nosso site era confuso devido a grande quantidade de serviços feitos por diferentes empresas.
                Hoje nosso site é harmônico e não temos problemas para encontrar informações.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="btn-mudar">
      <button id="voltar"><i class="fas fa-chevron-circle-left"></i></button>
      <button id="proximo"><i class="fas fa-chevron-circle-right"></i></button>
    </div>
  </section>

  <footer>
    <div class="container-footer">
      <div class="title-atendimento">
        <p>Central de Atendimento</p>
      </div>
      <div id="itens-footer">
        <div class="empresa">
          <p id="gw"><strong>GovernoWeb</strong></p>

          <div class="rede-social">
            <p>Acompanhe-nos</p>
            <a href="https://www.instagram.com/governo_web/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
          <a id="btn-atendente" href="https://api.whatsapp.com/send?phone=5531984649775&text=Ol%C3%A1,%20gostaria%20de%20solicitar%20um%20or%C3%A7amento!" target="_blank">
            <i class="far fa-user" style="margin-right: 5px"></i> Falar
            com Atendente</a>
        </div>
        <div class=" atendimento">
          <div class="container-atendimento">
            <div class="horario">
              <span><a href="tel:+5531984649775"><i class="fas fa-phone" style="margin-right: 8px;"></i>(31)
                  98464-9775</a></span>
              <span><i class="fas fa-clock" style="margin-right: 8px;"></i>Seg a sex - 08:00 / 17:30</span>
            </div>
            <div class="endereco">
              <span><a href="mailto:email@provedor.com.br"><i class="fas fa-envelope" style="margin-right: 8px;"></i>contato@governoweb.com.br</a></span>
              <span class="rua"><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i>Rua Peçanha, 848 - Sl 06
                -
                Centro
                <br>Governador Valadares - MG</span>
            </div>
          </div>
        </div>
        <div class="menu-footer">
          <a href="#hero">- Início</a>
          <a href="#solucoes">- Benefícios</a>
          <a href="#clientes">- Clientes</a>
          <a href="#solucao">- Soluções</a>
          <a href="#depoimentos">- Depoimentos</a>
        </div>
      </div>

    </div>
    <div class="direitos">
      <span>© 2023 GWLEGIS - TODOS OS DIREITOS RESERVADOS</span>
      <span><i class="far fa-cloud-download-alt" style="margin-right: 5px;"></i> GOVERNOWEB</span>
    </div>
  </footer>

  <a href="#hero" class="botao-subir"><i class="fas fa-caret-up"></i></a>

  <a href="https://api.whatsapp.com/send?phone=5531984649775&text=Ol%C3%A1,%20Gostaria%20de%20fazer%20um%20agendamento!" class="btn-whatsapp" target="_blank" data-aos="zoom-in-up" data-aos-delay="400">
    <img src="assets/whatssapp.svg" alt="Botao whatssapp" />

  </a>
  <script src="jquery.min.js"></script>

  <script src="script.js?v=<?= time() ?>"></script>
</body>

</html>