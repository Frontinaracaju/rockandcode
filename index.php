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
        <!-- <audio src="assets/audio/audio.mp3" id="intro-sound" autoplay="autoplay"></audio> -->
    	<div class="intro-site">
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
                            </div>
                        </div>
                        <div class="col-sm-4 info-left visible-xs">
                            <div class="info-data" >
                                <span class="data white shadow f-36">02</span>
                                <span class="mes yellow shadow f-36">Agosto</span>
                                <span class="ano cream shadow f-36">2014</span>
                            </div>
                        </div>

                        <div class="col-sm-4  center-logo">
                            <h1 class="logo"><a href=""><img src="assets/images/rockandcode.png" alt="Logo Rock and Code"></a></h1>
                        </div>
                        <div class="col-sm-4  info-right">
                            <div class="info-local-valor" style="display:none;">
                                <span class="local white shadow f-48">AABB</span><br>
                                <span class="cidade cream shadow f-28">Aracaju/SE</span><br>
                                <span class="valor yellow shadow f-20">R$: 125,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 chamada-intro hidden-xs">
                            <h2 class="txt-chamada rotate">
                                <span class="first-line white shadow f-34">E você vai ficar de fora desse evento</span><br>
                                <span class="second-line white shadow f-40">repleto de <span class="yellow">código</span> e <span class="yellow">rock n’ roll?</span></span>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 button-info-promo">
                            <a class="button-inscreva-topo button-green f-40 radius" href="#" style="display:none;">Inscreva-se já!</a>
                            <span class="info-promo-topo white shadow f-12"><span class="yellow">Camisa Grátis</span> - 100 primeiros inscritos</span>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <section class="atracoes">
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
                                    <div class="apresentador">
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
                        <div class="col-md-3 col-sm-6 item-palestrante almir" data-name="Almir Filho" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nemo, numquam molestiae omnis assumenda quas amet impedit dicta labore ut repudiandae et voluptatum maiores. Saepe aspernatur eveniet enim minima quibusdam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, perferendis, explicabo, in magni laudantium mollitia quisquam error nostrum commodi dolor veniam recusandae">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_almir.png" alt="Foto do palestrante Almir"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-26 txt-center">Almir Filho</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center yellow shadow f-16 txt-center">Globo.com</h5>
                                <div class="bt-ver-mais f-20 f-20">+</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 item-palestrante suissa" data-name="Suissa" data-description="Lorem ipsum e tals">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_suissa.png" alt="Foto do palestrante Suissa"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-26 txt-center">Jean Carlo Suissa</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Suissa Corp</h5>
                                <div class="bt-ver-mais f-20">+</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 item-palestrante gustavo" data-name="Gustavo Costa" data-description="Lorem ipsum e tals">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_gustavo.png" alt="Foto do palestrante Gustavo"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-26 txt-center">Gustavo Costa</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Globo.com</h5>
                                <div class="bt-ver-mais f-20">+</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 item-palestrante emer" data-name="Jean Carlos Emer" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, animi, ex iste eos nihil vel eligendi sapiente sint magni nostrum quas veniam libero est. Explicabo libero laudantium quisquam blanditiis necessitatibus!">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_emer.png" alt="Foto do palestrante Jean Carlo Emer"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-26 txt-center">Jean Carlo Emer</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Code Miner</h5>
                                <div class="bt-ver-mais f-20">+</div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-palestrantes" id="second-line-speakers">
                        <div class="col-md-3 col-sm-6 item-palestrante jaydson">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_jaydson.png" alt="Foto do palestrante Jaydson"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-26 txt-center">Jaydson Gomes</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Terra Networks</h5>
                                <div class="bt-ver-mais f-20">+</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 item-palestrante davidson">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_davidson.png" alt="Foto do palestrante Davidson"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-26 txt-center">Davidson Fellipe</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Globo.com</h5>
                                <div class="bt-ver-mais f-20">+</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 item-palestrante vanessa">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_vanessa.png" alt="Foto do palestrante Vanessa"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-26 txt-center">Vanessa Tonini</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">W3c Brasil</h5>
                                <div class="bt-ver-mais f-20">+</div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 item-palestrante fabio">
                            <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_fabio.png" alt="Foto do palestrante Fabio"></div>
                            <div class="info-palestrante">
                                <h4 class="title-palestrante white shadow f-26 txt-center">Fábio Magnoni</h4>
                                <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Mozilla</h5>
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

                                <div class="col-xs-6 item-lightning davidson">
                                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_aguarde.png" alt="Foto do palestrante à decidir"></div>
                                    <div class="info-palestrante">
                                        <h4 class="title-palestrante white shadow f-20 txt-center">Davidson Fellipe</h4>
                                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Globo.com</h5>
                                        <div class="bt-ver-mais f-16">+</div>
                                    </div>
                                </div>

                                <div class="col-xs-6 item-lightning davidson">
                                    <div class="avatar-palestrante"><img src="assets/images/avatares/avatar_aguarde.png" alt="Foto do palestrante à decidir"></div>
                                    <div class="info-palestrante">
                                        <h4 class="title-palestrante white shadow f-20 txt-center">Davidson Fellipe</h4>
                                        <h5 class="trabalho-palestrante yellow shadow f-16 txt-center">Globo.com</h5>
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
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
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
                                <a id="prev" class="button-slider arrow-prev f-40 hidden-xs" href="javascript:void();"><</a>
                                <div class="lista-imagens-local">
                                    <img src="assets/images/slider-local/img-1.jpg" class="img-slider-local">
                                </div>
                                <a id="next" class="button-slider arrow-next f-40 hidden-xs" href="javascript:void();">></a>
                            </div>
                            <div class="info-local">
                                <div class="title-local f-34 txt-center">AABB- Aracaju/SE</div>
                                <div class="info-local f-16 white txt-center">A Associação Atlética Banco do Brasil Aracaju - AABB AJU - está situada na Rod. José Sarney s/n - Praia do Robalo, Aracaju (SE) - Numa área de lazer completa com 02 (dois) campos de futebol society oficial, 01 (um) mini-campo, 02 (duas) quadras poliesportivas, 01 (uma) quadra de tênis, 01 (uma) piscina adulto, 01 (uma)
piscina infantil, Belíssimo salão de festas, salão de jog   os,churasqueiras coletivas e individuais, 02 (dois) restaurantes, chalés confortáveis ao seu inteiro dispor e muito calor humano...</div>
                                <div class="buttons-local">
                                    <a class="button-info button-yellow radius f-20">Mais Informações</a>
                                    <a class="button-mapa button-yellow radius f-20">Como Chegar</a>
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
                                    <div class="col-sm-2 col-xs-6 patrocinador patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
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
                                <div class="info-incluso f-16">Camisa promocional para os 100 primeiros inscritos, almoço grátis e encerramento Rock and Code  inclusos no valor da inscrição.</div>
                                <div class="info-desconto f-14">*Caso tenha interesse em comprar mais de 4 ingressos, entre em contato pelo e-mail <a href="mailto:contato@frontinaracaju.com.br" class="email-fia">contato@frontinaracaju.com.br</a>  para solicitar o seu desconto .</div>
                            </div>
                            <div class="button-info-ingresso">
                                <a class="button-inscreva-ingresso button-green f-40 radius" href="#">Inscreva-se já!</a>
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
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
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
                                <p class="first-line txt-sobre white shadow f-16">Chegando em sua 2ª edição o Front In Aracaju terá uma novidade em seu formato, a fim de promover o desenvolvimento de novas tecnologias voltadas a criação de aplicações Web, websites ou aplicativos para smartphones.</p>
                                <p class="second-line txt-sobre yellow shadow f-16">O Front In Aracaju é um evento de integração tecnológica inédita no estado deSergipe, baseado nesta proposta o espaço foi estrategicamente selecionado sendo esse mais um diferencial do evento. O mesmo será realizado na Associação Atlética Banco do Brasil- AABB, localizado na Rod. José Sarney à 500 metros do mar, um local amplo e arejado com vista privilegiada, proporcionando um ambiente aconchegante e natural dispondo de bares e restaurantes em contato direto com a natureza.</p>
                                <p class="third-line txt-sobre white shadow f-16">Será o primeiro evento de Front-end do Brasil com formato talk show. Propondo interatividade musical com a apresentação de uma banda pop/rock durante o decorrer do evento com o intuito de diversificar, divertir e proporcionar aos participantes aquisição de conhecimento tecnológico e diversão.</p>
                                <p class="forth-line txt-sobre cream shadow f-16">Palestrantes profissionais do cenário local e nacional envolvidos no evento terão oportunidade de compartilhar e trocar as mais diversas experiências com o público presente.</p>
                                <p class="last-line txt-sobre white shadow f-16">Com foco de reunir a comunidade Brasileira de desenvolvedores Web, o Front in Aracaju abordará temas sobre tecnologias Front-end / Back-end.</p>
                            </div>
                            <a class="button-fotos-anterior button-yellow f-26 radius" href="#">Fotos da Edição 2013</a>
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
                            <div class="lista-patrocinadores">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-6  patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6  patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6  patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6  patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    <div class="col-sm-2 col-xs-6  patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="o-que-falam">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-title-falam"><h3 class="title-falam f-26 txt-center">O que a galera tem falado do Rock and Code</h3></div>
                        <div class="desc-falam white f-16 white shadow txt-center">Apareça aqui também utilizando <span class="yellow">#rockandcode</span> ou <span class="yellow">#frontinaracaju</span>.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="com-md-12">
                        <div class="lista-avatares">
                            <div class="item-falam">
                                <div class="txt-item-falam f-12">Ingressos comprados para o <a href="#" class="hashtag">#frontinaracaju</a>. <a href="#" class="link">http://frontinaracaju.com.br</a></div>
                                <div class="info-item-falam">
                                    <div class="avatar"><img src="assets/images/avatar_falam.png" alt="avatar usuario" class="img-avatar"></div>
                                    <div class="title-nome-falam">
                                        <h4 class="nome-avatar white shadow f-20 ">Ítalo Waxman</h4>
                                        <h5 class="usuario-avatar yellow shadow f-14 ">@italowaxman</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="item-falam hidden-sm hidden-xs">
                                <div class="txt-item-falam f-12">Ingressos comprados para o <a href="#" class="hashtag">#frontinaracaju</a>. <a href="#" class="link">http://frontinaracaju.com.br</a></div>
                                <div class="info-item-falam">
                                    <div class="avatar"><img src="assets/images/avatar_falam.png" alt="avatar usuario" class="img-avatar"></div>
                                    <div class="title-nome-falam">
                                        <h4 class="nome-avatar white shadow f-20 ">Ítalo Waxman</h4>
                                        <h5 class="usuario-avatar yellow shadow f-14 ">@italowaxman</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="item-falam hidden-xs">
                                <div class="txt-item-falam f-12">Ingressos comprados para o <a href="#" class="hashtag">#frontinaracaju</a>. <a href="#" class="link">http://frontinaracaju.com.br</a></div>
                                <div class="info-item-falam">
                                    <div class="avatar"><img src="assets/images/avatar_falam.png" alt="avatar usuario" class="img-avatar"></div>
                                    <div class="title-nome-falam">
                                        <h4 class="nome-avatar white shadow f-20 ">Ítalo Waxman</h4>
                                        <h5 class="usuario-avatar yellow shadow f-14 ">@italowaxman</h5>
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
                                <div class="lista-patrocinadores">
                                    <div class="row">
                                        <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                        <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                        <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                        <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                        <div class="col-sm-2 col-xs-6 patrocinador"><a href="#"><img src="assets/images/logo-patrocinio.png" alt="logo w3c" class="logo-patrocinio"></a></div>
                                    </div>
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
                            <a class="button-equipe button-yellow radius f-12 hidden-xs">Conheça a equipe completa</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="info-italo">
                                <h4 class="title-organizador yellow shadow f-26">Ítalo Waxman</h4>
                                <h5 class="funcao-organizador white shadow f-12">Designer / Front-end</h5>
                                <div class="redes-organizador">
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
                                <div class="redes-organizador">
                                    <div class="email icon-rede"><a href="mailto:italowaxman@gmail.com" title="E-mail"><img src="assets/images/icon_redes_mail.png" alt="icone e-mail" class="icon-mail"></a></div>
                                    <div class="twitter icon-rede"><a href="https://twitter.com/italowaxman" title="Twitter"><img src="assets/images/icon_redes_twitter.png" alt="icone twitter" class="icon-twitter"></a></div>
                                    <div class="facebook icon-rede"><a href="https://www.facebook.com/italowaxman" title="Facebook"><img src="assets/images/icon_redes_facebook.png" alt="icone facebook" class="icon-face"></a></div>
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
