<?php include '_doctype.php'; ?>
<head>
    <?php include '_head.php'; ?>
    <?php include '_scripts_head.php'; ?>
    <meta charset="UTF-8">
    <title>Rock and Code - Front in Aracaju</title>
</head>
<body>
	<?php include '_chromeframe.php'; ?>
    <div class="wrapper" style="opacity: 0">
        <audio src="assets/audio/audio.mp3" id="intro-sound"></audio>
        <div class="fixed-menu" style="display: none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo-fia"><img src="assets/images/frontinaracaju.png" alt="logo front in aracaju"></div>
                        <div class="menu-social">
                            <nav class="main-menu hidden-xs">
                                <ul>
                                    <li class="item-menu-fixed"><a onClick="$('html,body').animate({scrollTop: $('.intro-site').offset().top - 120}, 1500);" class="white shadow f-20 pointer">Intro</a></li>
                                    <li class="item-menu-fixed"><a onClick="$('html,body').animate({scrollTop: $('.atracoes').offset().top - 70}, 1500);" class="white shadow f-20 pointer">Atrações</a></li>
                                    <li class="item-menu-fixed"><a onClick="$('html,body').animate({scrollTop: $('.local-evento').offset().top - 70}, 1500);" class="white shadow f-20 pointer">Local</a></li>
                                    <li class="item-menu-fixed"><a onClick="$('html,body').animate({scrollTop: $('.ingresso').offset().top - 70}, 1500);" class="white shadow f-20 pointer">Inscrições</a></li>
                                    <li class="item-menu-fixed"><a href="/programacao" class="white shadow f-20 pointer">Programação</a></li>
                                    <li class="item-menu-fixed item-last"><a onClick="$('html,body').animate({scrollTop: $('.sobre').offset().top - 70}, 1500);"  class="white shadow f-20 pointer">Sobre</a></li>
                                </ul>
                            </nav>
                            <ul class="redes-fixed hidden-sm hidden-xs">
                                <li class="item-redes-fixed"><a href="https://www.facebook.com/frontinaracaju" target="_blank"><img src="assets/images/icon_fixed_face.png" alt="ícone facebook"></a></li>
                                <li class="item-redes-fixed"><a href="https://twitter.com/frontinaracaju" target="_blank"><img src="assets/images/icon_fixed_twitter.png" alt="ícone twitter"></a></li>
                                <li class="item-redes-fixed"><a href="https://github.com/Frontinaracaju/rockandcode" target="_blank"><img src="assets/images/icon_fixed_github.png" alt="ícone github"></a></li>
                                <li class="item-redes-fixed item-last"><a href="mailto:contato@frontinaracaju.com.br" target="_blank"><img src="assets/images/icon_fixed_email.png" alt="ícone contato"></a></li>
                            </ul>
                            <a class="button-inscreva-fixed button-green f-14 radius hidden-sm" href="http://www.frontinaracaju.com.br/certificado" target="_blank">Meu Certificado</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="intro-site" itemscope itemtype="http://schema.org/Event">
          <header>
             <div class="container">
                <div class="row">
                   <div class="col-sm-12">
                      <div class="chamada-away">
                         <a href="https://www.youtube.com/watch?v=u0gWY8-llY4">
                            <img class="img-away" src="assets/images/thumb_away.png" alt="icone away">
                            <div class="info-away">
                               <span class="first-line shadow white f-16">Já assistiu</span><br>
                               <span class="second-line shadow white f-16">ao convite do</span><br>
                               <span class="last-line shadow yellow f-28">Away?</span>
                           </div>
                       </a>
                   </div>
                   <nav class="menu-topo">
                    <button  id="js-extended-menu" class="bt-menu-extended" type="button" title="Menu">
                        <span class="bar-menu-icon"></span>
                        <span class="bar-menu-icon"></span>
                        <span class="bar-menu-icon"></span>
                    </button>
                    <ul></ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 info-left hidden-xs">
                <div class="info-data" style="display:none;">
                    <span class="data white shadow f-48">02</span><br>
                    <span class="mes yellow shadow f-28">Agosto</span><br>
                    <span class="ano cream shadow f-20">2014</span>
                    <span itemprop="name" content="Rock and Code"/>
                </div>
            </div>
            <div class="col-sm-4 info-left visible-xs">
                <div class="info-data" itemprop="startDate" content="2014-08-02T08:00">
                    <span class="data white shadow f-36">02</span>
                    <span class="mes yellow shadow f-36">Agosto</span>
                    <span class="ano cream shadow f-36">2014</span>
                </div>
            </div>

            <div class="col-sm-4  center-logo">
                <h1 class="logo"><a href=""><img src="assets/images/rockandcode.png" alt="Logo Rock and Code"></a></h1>
            </div>
            <div class="col-sm-4  info-right">
                <div class="info-local-valor" style="display:none;" itemscope itemtype="http://schema.org/Offer">
                    <span class="local white shadow f-48">AABB</span><br>
                    <span class="cidade cream shadow f-28">Aracaju/SE</span><br>
                    <!-- <span class="valor yellow shadow f-20" itemprop="price">R$: 125,00</span> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 chamada-intro hidden-xs">
                <h2 class="txt-chamada rotate">
                    <span class="first-line white shadow f-34">Obrigado pela participação</span><br>
                    <span class="second-line white shadow f-40">Aguardamos vocês em <span class="yellow">2015</span></span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 button-info-promo" itemscope itemtype="http://schema.org/Offer">
                <a class="button-inscreva-topo button-green f-40 radius" itemprop="url" href="http://www.frontinaracaju.com.br/certificado" target="_blank" style="display:none;">Meu Certificado</a>
                <span class="info-promo-topo white shadow f-12"><span class="yellow">Contemplando -</span> 10 horas de atividades</span>
            </div>
        </div>
    </div>
</header>
</section>
<section class="atracoes" rel="atracoes">
    <div class="intro-section intro-atracoes">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="img-intro-atacoes hidden-xs hidden-sm"><img src="assets/images/microfone_intro_atracoes.png"></div>
                    <div class="info-intro-section info-intro-atracoes">
                        <h2 class="title-section rotate">
                            <span class="first-line white shadow rotate f-60">Atrações do </span><br>
                            <span class="second-line yellow shadow f-60">Rock and Code</span>
                        </h2>
                        <h3 class="desc-section white rotate shadow f-20">Confira a lista dos palestrantes que estarão presentes nesse dia épico.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lista-atracoes">
        <div class="container container-apresentador">

            <div class="row row-apresentador">
                <div class="col-md-12">
                    <div class="splash-apresentador">
                        <div class="centering-apresentador">
                            <h3 class="title-apresentador rotate">
                                <span class="first-line white shadow f-34">Apresentador</span><br>
                                <span class="second-line yellow shadow f-34">do evento</span>
                            </h3>
                            <div class="apresentador" data-name="It's Show Time" data-description="Será um prazer ser o host dessa segunda edição do #FIA ao som de muito rock'n roll. Sou fundador da Caravana Web, Mozillian, Organizador do GDG Maceió e representante da BrazilJS Foundation em Alagoas.">
                                <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_juarez.png" alt="Foto do palestrante Juarez"></div>
                                <div class="info-palestrante">
                                    <h4 class="title-palestrante white shadow f-26 txt-center">Juarez Filho</h4>
                                    <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Caravana Web</h5>
                                    <div class="bt-ver-mais f-20">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-palestrantes" id="first-line-speakers">
                <div class="col-md-3 col-sm-6 item-palestrante almir" data-name="Web Audio Hero" data-description="Desvendaremos esta API de alto nível para processamento e sintetização de áudio em aplicações web: A API Web Audio – que nos permitirá quebrar o silêncio da web sem limitações.<br/><a href='https://speakerdeck.com/almirfilho/web-audio-hero' class='white f-26 slides target='_blank'>Slides da Palestra</a>">
                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_almir.png" alt="Foto do palestrante Almir"></div>
                    <div class="info-palestrante">
                        <h4 class="title-palestrante white shadow f-26 txt-center">Almir Filho</h4>
                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center yellow shadow f-16 txt-center">Globo.com</h5>
                        <div class="bt-ver-mais f-20">+</div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 item-palestrante suissa" data-name="Atomic Design" data-description="Aprenda essa nova metodologia para organizar seu CSS, onde ele não diz como escrever, mas sim como organizar. Obviamente com algumas pitadas de pré-processador e Física Quântica ;)<br/><a href='http://pt.slideshare.net/suissapg/atomic-design-28724858' class='white f-26 slides' target='_blank'>Slides da Palestra</a>">
                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_suissa.png" alt="Foto do palestrante Suissa"></div>
                    <div class="info-palestrante">
                        <h4 class="title-palestrante white shadow f-26 txt-center">Jean Carlo Suissa</h4>
                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Suissa Corp</h5>
                        <div class="bt-ver-mais f-20">+</div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 item-palestrante zeno" data-name="Tracking.js" data-description="Em função de problemas de saúde o Gustavo foi substituido pelo Zeno Rocha que falou sobre o Tracjing.js seu novo projeto na Liferay.<br/><a href='http://pt.slideshare.net/mairatma/tracking-js' class='white f-26 slides' target='_blank'>Slides da Palestra</a>">
                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_zeno.png" alt="Foto do palestrante Zeno"></div>
                    <div class="info-palestrante">
                        <h4 class="title-palestrante white shadow f-26 txt-center">Zeno Rocha</h4>
                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Liferay</h5>
                        <div class="bt-ver-mais f-20">+</div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 item-palestrante emer" data-name="Controle de fluxo com execução assíncrona" data-description="Analise callbacks, seus mitos e suas reais limitações. Referenciando as promises e generators. <br/><a href='https://speakerdeck.com/jcemer/controle-de-fluxo-com-execucao-assincrona' class='white f-26 slides' target='_blank'>Slides da Palestra</a>">
                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_emer.png" alt="Foto do palestrante Jean Carlo Emer"></div>
                    <div class="info-palestrante">
                        <h4 class="title-palestrante white shadow f-26 txt-center">Jean Carlo Emer</h4>
                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Grupo RBS</h5>
                        <div class="bt-ver-mais f-20">+</div>
                    </div>
                </div>
            </div>

            <div class="row row-palestrantes" id="second-line-speakers">
                <div class="col-md-3 col-sm-6 item-palestrante jaydson" data-name="...And ES6 For All" data-description="O JavaScript, assim como algumas boas bandas de Rock, foi subestimado por muito tempo. Nessa talk, abordaremos um pouco da história da linguagem, as principais novas features, benefícios e como usar a nova versão da ECMAScript, a.k.a, Harmony/ES6  hoje mesmo em produção! <br/><a href='https://speakerdeck.com/jaydson/and-es6-for-all' class='white f-26 slides' target='_blank'>Slides da Palestra</a>">
                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_jaydson.png" alt="Foto do palestrante Jaydson"></div>
                    <div class="info-palestrante">
                        <h4 class="title-palestrante white shadow f-26 txt-center">Jaydson Gomes</h4>
                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Terra Networks</h5>
                        <div class="bt-ver-mais f-20">+</div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 item-palestrante davidson" data-name="Guia do Front-end das galaxias" data-description="Como encarar os desafios da área de desenvolvimento front-end para web, esse campo que é cheio de grandes desafios, sejam eles voltados para dispositivos, browsers, resoluções... Então, quais frameworks, ferramentas e bibliotecas são relevantes para aprimorar sua forma de trabalho? Venha conhecer 42 dicas para trabalhar mais feliz.<br/><a href='http://pt.slideshare.net/davidsonfellipe/guia-do-front-end-das-galaxias' class='white f-26 slides' target='_blank'>Slides da Palestra</a>">
                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_davidson.png" alt="Foto do palestrante Davidson"></div>
                    <div class="info-palestrante">
                        <h4 class="title-palestrante white shadow f-26 txt-center">Davidson Fellipe</h4>
                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Globo.com</h5>
                        <div class="bt-ver-mais f-20">+</div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 item-palestrante felipe" data-name="Como nasce um framework front-end para mais de 70 milhões de usuários?" data-description="Vamos discutir organizacional e tecnicamente como se torna viável um projeto de tal magnitude, lições aprendidas, desafios superados e descobertas ao longo deste projeto, que visa atender diversos dispositivos e tipos de audiência diferente, focado em performance, mas também em qualidade e manutenabilidade.<br/><a href='https://speakerdeck.com/felipenmoura/como-desenvolver-um-framework-front-end-para-mais-de-70-milhoes-de-usuarios' class='white f-26 slides' target='_blank'>Slides da Palestra</a>">
                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_felipe.png" alt="Foto do palestrante Felipe"></div>
                    <div class="info-palestrante">
                        <h4 class="title-palestrante white shadow f-26 txt-center">Felipe Nascimento</h4>
                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Terra Networks</h5>
                        <div class="bt-ver-mais f-20">+</div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 item-palestrante reinaldo" data-name="Dez razões para você continuar desenvolvendo para a Web" data-description="Muitas vezes esquecemos o quanto a Web é importante e já faz parte da nossa vida. Essa palestra vai mostrar que a Web é muito mais do que um conjunto de elementos e porque precisamos continuar a luta para que ela seja livre e aberta.<br/><a href='http://pt.slideshare.net/reinaldoferraz/dez-motivos-para-voc-continuar-desenvolvendo-para-a-web' class='white f-26 slides'>Slides da Palestra</a>">
                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_reinaldo.png" alt="Foto do palestrante Reinaldo"></div>
                    <div class="info-palestrante">
                        <h4 class="title-palestrante white shadow f-26 txt-center">Reinaldo Ferraz</h4>
                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">W3c Brasil</h5>
                        <div class="bt-ver-mais f-20">+</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="talks-guitar">
        <div class="container">
            <div class="row">
                <div class="col-md-5 talks">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-talks rotate">
                                <h3 class="title-talks  yellow shadow f-34 txt-center">Lightning Talks</h3>
                                <h4 class="info-intro-talks white shadow f-16 txt-center">Palestras  pocket, porém com a<br> mesma energia e pegada.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-6 item-lightning igor" data-name="Google Analytics - Guia de Campo" data-description="Aprenda a mensurar a performance do seu site e entender seu Público com Google Analytics. Nesta palestra você encontra todos os meios para entender as necessidades dos usuários e traçar estratégias durante desenvolvimento.">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_igor.png" alt="Foto do palestrante Igor"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-20 txt-center">Igor Cruz</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Behold</h5>
                                <div class="bt-ver-mais f-16">+</div>
                            </div>
                        </div>

                        <div class="col-xs-6 item-lightning" data-name=" O Segredo das Chrome Extensions" data-description="Vamos entender o passo a passo do desenvolvimento de uma extensão, indo da definição da estrutura da aplicação até a publicação na Chrome Store.<br/><a href='http://www.slideshare.net/RodolfoDias1/desenvolvendo-chrome-extensions class='white f-26 slides'>Slides da Palestra</a>">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_rodolfo.png" alt="Foto do palestrante à decidir"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-20 txt-center">Rodolfo Dias</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">UFMG</h5>
                                <div class="bt-ver-mais f-16">+</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-7 guitar-parallax hidden-sm hidden-xs">
                    <div class="fia"></div>
                    <div class="javascript"></div>
                    <div class="guitar"></div>
                    <div class="html5"></div>
                    <div class="css3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="patrocinadores platinum">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-patrocinadores shadow white f-34">Patrocínio <span class="platina">Platinum</span></h3>
                    <div class="lista-patrocinadores">
                        <div class="row">
                            <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://www.w3c.br/Home/WebHome" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-w3c.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                            <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://www.nic.br/index.shtml" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-nic.png" alt="logo nic.br" class="logo-patrocinio"></a></div>
                            <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://www.cgi.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-cgi.png" alt="logo cgi.br" class="logo-patrocinio"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="local-evento">
    <div class="intro-section intro-local">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="img-intro-local hidden-xs hidden-sm"><img src="assets/images/celular_intro_local.png"></div>
                    <div class="info-intro-section info-intro-local">
                        <h2 class="title-section rotate">
                            <span class="first-line white shadow rotate f-60">Local do </span><br>
                            <span class="second-line yellow shadow f-60">Rock and Code</span>
                        </h2>
                        <h3 class="desc-section white rotate shadow f-20">Participe de um verdadeiro evento de Front-end para o mar.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-local">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-local">
                        <div class="lista-imagens-local">
                            <img src="assets/images/slider-local/img-1.jpg" class="img-slider-local">
                        </div>
                    </div>
                    <div class="info-local">
                        <div class="title-local f-34 txt-center">AABB- Aracaju/SE</div>
                        <div class="info-local f-16 white txt-center">A Associação Atlética Banco do Brasil Aracaju - AABB AJU - está situada na Rod. José Sarney s/n - Praia do Robalo, Aracaju (SE) - Numa área de lazer completa com 02 (dois) campos de futebol society oficial, 01 (um) mini-campo, 02 (duas) quadras poliesportivas, 01 (uma) quadra de tênis, 01 (uma) piscina adulto, 01 (uma)
                            piscina infantil, Belíssimo salão de festas, salão de jog   os,churasqueiras coletivas e individuais, 02 (dois) restaurantes, chalés confortáveis ao seu inteiro dispor e muito calor humano...</div>
                            <div class="buttons-local">
                                <a class="button-info button-yellow radius f-20" href="https://www.facebook.com/aabb.aracaju" target="_blank">Mais Informações</a>
                                <a class="button-mapa button-yellow radius f-20" href="https://goo.gl/maps/4imSc" target="_blank">Como Chegar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="patrocinadores ouro">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-patrocinadores shadow white f-34">Patrocínio <span class="yellow">Ouro</span></h3>
                        <div class="lista-patrocinadores">
                            <div class="row">
                                <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://www.sebrae.com.br/sites/PortalSebrae/ufs/se?codUf=27" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-sebrae.png" alt="logo sebrae" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://www.se.iel.org.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-iel.png" alt="logo iel" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://alfamaweb.com.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-alfama.png" alt="logo alfmaweb" class="logo-patrocinio"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ingresso">
        <div class="intro-section intro-ingresso">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="img-intro-ingresso hidden-xs hidden-sm"><img src="assets/images/rock_intro_ingresso.png"></div>
                        <div class="info-intro-section info-intro-ingresso">
                            <h2 class="title-section rotate">
                                <span class="first-line white shadow rotate f-60">Garanta já </span><br>
                                <span class="second-line yellow shadow f-60">o seu ingresso</span>
                            </h2>
                            <h3 class="desc-section white shadow rotate f-20">Conteúdo de primeira, grandes nomes nacionais e um networking monstro!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-ingresso">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ingresso-col">
                        <div class="desc-info-ingresso">
                            <div class="info-incluso f-16">Almoço grátis e encerramento Rock and Code inclusos no valor da  inscrição. Camisa promocional para os 100 primeiros inscritos.</div>
                            <div class="info-desconto f-14">*Caso tenha interesse em comprar mais de 4 ingressos, entre em contato pelo e-mail <a href="mailto:contato@frontinaracaju.com.br" class="email-fia">contato@frontinaracaju.com.br</a>  para solicitar o seu desconto .</div>
                        </div>
                        <div class="button-info-ingresso">
                            <a class="button-inscreva-ingresso button-green f-40 radius" href="http://www.eventick.com.br/rockandcode" target="_blank">Inscreva-se já!</a>
                            <h4 class="info-lote-ingresso yellow f-12 txt-center shadow">2º Lote de Ingressos  -  <span class="white">R$: 125,00<span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="patrocinadores prata">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-patrocinadores shadow white f-34">Patrocínio <span class="silver">Prata</span></h3>
                        <div class="lista-patrocinadores">
                            <div class="row">
                                <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://site.unit.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-unit.png" alt="logo unit" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://behold.com.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-behold.png" alt="logo behold" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-12 patrocinador"><a href="https://www.facebook.com/GoLifeCompany?fref=ts" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-golife.png" alt="logo golife" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-12 patrocinador"><a href="http://www.infox.com.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-infox.png" alt="logo infox" class="logo-patrocinio"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sobre">
     <div class="intro-section intro-sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="img-intro-sobre hidden-xs hidden-sm"><img src="assets/images/fia_intro_sobre.png"></div>
                    <div class="info-intro-section info-intro-sobre">
                        <h2 class="title-section rotate">
                            <span class="first-line white shadow rotate f-60">Sobre o </span><br>
                            <span class="second-line yellow shadow f-60">Front in Aracaju</span>
                        </h2>
                        <h3 class="desc-section white shadow rotate f-20">O maior evento de front-end para o mar do nordeste.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo-grande"><img src="assets/images/rockandcode_grande.png" alt="logo Rock and Code" class="logo-rockandcode"></a></div>
                    <div class="desc-sobre">
                        <p class="first-line txt-sobre white shadow f-16">Em sua 2a edição, o Front In Aracaju traz novidades em seu formato e promete, de uma forma inovadora, promover o desenvolvimento de novas tecnologias voltadas à
                            criação de aplicações Web, Websites ou aplicativos para smartphones.</p>
                            <p class="second-line txt-sobre yellow shadow f-16">Para compor o cenário, e reunir a Comunidade Brasileira de Desenvolvedores Web, palestrantes com reconhecimento nacional estão envolvidos no evento e prontos para trocarem experiências com o público sobre tecnologia, Front-end e Back-end.</p>
                            <p class="third-line txt-sobre white shadow f-16">O evento será o primeiro de Front-end do Brasil com formato talk show. Uma forma de possibilitar interatividade musical, com a apresentação de uma banda pop/rock durante o decorrer do evento, além de garantir a diversão e proporcionar aos participantes a aquisição de conhecimento tecnológico.</p>
                            <p class="forth-line txt-sobre cream shadow f-16">Um dos diferenciais do evento, além de uma integração tecnológica inédita no estado de Sergipe, é o local onde será realizado. A Associação Atlética Banco do Brasil – AABB, localizado a 500 metros do mar, é um local amplo, arejado e com uma vista privilegiada, propondo aos participantes do evento um ambiente aconchegante, natural, com contato direto com a natureza e com um dos melhores bares e restaurantes da cidade.</p>
                            <p class="last-line txt-sobre white shadow f-20">02 de Agosto será um dia repleto de código e rock n’ roll.<br> Front-end + Rock = Combinação Explosiva!</p>
                        </div>
                        <a class="button-fotos-anterior button-yellow f-26 radius" href="https://www.flickr.com/photos/101258305@N05/sets/72157635421414400/" target="_blank">Fotos da Edição 2013</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="novidades">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title-novidades rotate">
                            <span class="first-line yellow shadow f-60">Novidades da</span><br>
                            <span class="second-line white shadow f-34">Edição 2014</span>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 talk-show item-novidade">
                        <div class="img-novidade"><img src="assets/images/img_novidades_talk.png" alt="imagem talkshow" class="img-talk"></div>
                        <div class="info-novidade rotate">
                            <h4 class="title-novidade f-28 yellow shadow">Formato Talk Show</h4>
                            <h5 class="desc-novidade f-16 white shadow">Proposta inovadora onde os palestrantes serão entrevistados antes das palestras.</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 banda item-novidade">
                        <div class="img-novidade"><img src="assets/images/img_novidades_banda.png" alt="imagem banda" class="img-banda"></div>
                        <div class="info-novidade rotate">
                            <h4 class="title-novidade f-28 yellow shadow">Banda de Rock</h4>
                            <h5 class="desc-novidade f-16 white shadow">Teremos uma banda ao vivo presente durante todo o evento tocando os maiores clássico do Rock and Roll.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="patrocinadores bronze">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-patrocinadores shadow white f-34">Patrocínio <span class="brown">Bronze</span></h3>
                        <div class="lista-patrocinadores col-md-12">
                            <div class="row">
                                <div class="col-sm-2 col-xs-6  patrocinador"><a href="http://www.globo.com/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-globo.png" alt="logo globo.com" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6  patrocinador"><a href="http://www.xprocess.com.br/novo/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-xprocess.png" alt="logo xprocess" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6  patrocinador"><a href="http://www.sgnsolucoes.com.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-sgn.png" alt="logo sgn" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6  patrocinador"><a href="http://ideiaup.com/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-ideiaup.png" alt="logo ideiaup" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6  patrocinador"><a href="https://paggcerto.com.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-paggcerto.png" alt="logo paggcerto" class="logo-patrocinio"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="o-que-falam">
        <div class="row hidden-xs">
            <div class="col-md-12">
                <div class="bg-title-falam"><h3 class="title-falam f-26 txt-center">O que a galera tem falado do Rock and Code</h3></div>
                <div class="desc-falam white f-16 white shadow txt-center">Apareça aqui também utilizando <span class="yellow">@frontinaracaju</span>.</div>
            </div>
        </div>

        <div class="row hidden-xs">
            <div class="com-md-12">
                <div class="lista-avatares">
                    <div class="item-falam">
                        <div class="txt-item-falam f-12">Ingressos comprados para o <a href="#" class="hashtag">#frontinaracaju</a>. <a href="#" class="link">http://frontinaracaju.com.br</a></div>
                        <div class="info-item-falam">
                            <div class="avatar"><img src="assets/images/avatar_falam.png" alt="avatar usuario" class="img-avatar"></div>
                            <div class="title-nome-falam">
                                <h4 class="nome-avatar white shadow f-20 "></h4>
                                <h5 class="usuario-avatar yellow shadow f-14 "></h5>
                            </div>
                        </div>
                    </div>

                    <div class="item-falam hidden-sm hidden-xs">
                        <div class="txt-item-falam f-12">Ingressos comprados para o <a href="#" class="hashtag">#frontinaracaju</a>. <a href="#" class="link">http://frontinaracaju.com.br</a></div>
                        <div class="info-item-falam">
                            <div class="avatar"><img src="assets/images/avatar_falam.png" alt="avatar usuario" class="img-avatar"></div>
                            <div class="title-nome-falam">
                                <h4 class="nome-avatar white shadow f-20 "></h4>
                                <h5 class="usuario-avatar yellow shadow f-14 "></h5>
                            </div>
                        </div>
                    </div>

                    <div class="item-falam hidden-xs">
                        <div class="txt-item-falam f-12">Ingressos comprados para o <a href="#" class="hashtag">#frontinaracaju</a>. <a href="#" class="link">http://frontinaracaju.com.br</a></div>
                        <div class="info-item-falam">
                            <div class="avatar"><img src="assets/images/avatar_falam.png" alt="avatar usuario" class="img-avatar"></div>
                            <div class="title-nome-falam">
                                <h4 class="nome-avatar white shadow f-20 "></h4>
                                <h5 class="usuario-avatar yellow shadow f-14 "></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="patrocinadores apoiadores">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-patrocinadores shadow white f-34">Apoiadores do Evento</h3>
                        <div class="lista-patrocinadores col-md-12">
                            <div class="row">
                                <div class="col-sm-2 col-xs-6 patrocinador apoiador"><a href="https://www.facebook.com/groups/caravanaweb/?fref=ts" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-caravana.png" alt="logo caravanaweb" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6 patrocinador apoiador"><a href="http://braziljs.org/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-braziljs.png" alt="logo braziljs" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6 patrocinador apoiador"><a href="http://www.eventick.com.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-eventick.png" alt="logo eventick" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6 patrocinador apoiador"><a href="http://www.treinaweb.com.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-treinaweb.png" alt="logo treinaweb" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6 patrocinador apoiador"><a href="http://novatec.com.br/" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-novatec.png" alt="logo novatec" class="logo-patrocinio"></a></div>
                                <div class="col-sm-2 col-xs-6 patrocinador apoiador"><a href="https://www.facebook.com/CoveramaAracaju?fref=ts" target="_blank"><img src="assets/images/patrocinio/logo-patrocinio-coverama.png" alt="logo coverama" class="logo-patrocinio"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="fire-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-footer yellow shadow f-40 rotate">Quem Faz o Evento</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="info-italo">
                            <h4 class="title-organizador yellow shadow f-26">Ítalo Waxman</h4>
                            <h5 class="funcao-organizador white shadow f-12">Designer / Front-end</h5>
                            <div class="redes-organizador hidden-xs">
                                <div class="email icon-rede"><a href="mailto:italowaxman@gmail.com" title="E-mail"><img src="assets/images/icon_redes_mail.png" alt="icone e-mail" class="icon-mail"></a></div>
                                <div class="twitter icon-rede"><a href="https://twitter.com/italowaxman" title="Twitter"><img src="assets/images/icon_redes_twitter.png" alt="icone twitter" class="icon-twitter"></a></div>
                                <div class="facebook icon-rede"><a href="https://www.facebook.com/italowaxman" title="Facebook"><img src="assets/images/icon_redes_facebook.png" alt="icone facebook" class="icon-face"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="avatar-quemfaz"><img src="assets/images/avatares_footer.png" alt="avatar organização"></div>
                    </div>
                    <div class="col-xs-4">
                        <div class="info-julio">
                            <h4 class="title-organizador yellow shadow f-26">Júlio Cézar</h4>
                            <h5 class="funcao-organizador white shadow f-12">Front-end Developer</h5>
                            <div class="redes-organizador hidden-xs">
                                <div class="email icon-rede"><a href="mailto:cezinhajc@gmail.com" title="E-mail"><img src="assets/images/icon_redes_mail.png" alt="icone e-mail" class="icon-mail"></a></div>
                                <div class="twitter icon-rede"><a href="https://twitter.com/cezinhajc" title="Twitter"><img src="assets/images/icon_redes_twitter.png" alt="icone twitter" class="icon-twitter"></a></div>
                                <div class="facebook icon-rede"><a href="https://www.facebook.com/CEZINHAJC" title="Facebook"><img src="assets/images/icon_redes_facebook.png" alt="icone facebook" class="icon-face"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faixa-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 hidden-xs">
                        <div class="info-footer">
                            <div class="logo-footer"><img src="assets/images/rockandcode_footer.png" alt="logo rock and code" class="logo-fia-footer"></div>
                            <div class="copyright white f-12">Rock and Code  <span class="yellow">© Copyright 2014</span>  -  Todos os direitos reservados.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4">
                     <div class="desenvolvimento">
                        <div class="alfama f-12 yellow shadow">Desenvolvido por <a href="//www.alfamaweb.com.br" target="_blank"><img src="assets/images/logo_alfama_footer.png"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php include '_js_scripts.php'; ?>
<?php include '_analytics.php'; ?>
</body>
</html>