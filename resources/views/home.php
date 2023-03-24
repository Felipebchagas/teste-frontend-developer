<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URL_ASSET?>images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URL_ASSET ?>css/main.css">
    <title><?php echo APP_NAME ?></title>
</head>

<body>
    <main>
        <div class="headeline">
            <div class="headline__container">
                <header>
                    <div class="logo">
                        <img src="<?php echo URL_ASSET ?>images/logo.png" alt="logo">
                    </div>
                    <div class="phone">
                        <a href="https://api.whatsapp.com/send?phone=5511954429605&amp;text=" target="_blank" class="">(11) 9 9999-9999</a>
                    </div>
                    <div class="alert"></div>
                </header>
                <div class="headline__content-wrapper">
                    <div class="content-text">
                        <h1>Adoramos fazer você se sentir mais <span>confortável</span> em sua casa.</h1>
                        <p>
                            Da marcenaria ao design de interiores, desenvolvemos Projetos completos de casas, empresas ou espaços comerciais. Destacamo-nos porque aliamos estética e funcionalidade.
                        </p>
                    </div>
                    <div class="contact">
                        <div class="contact__form">
                            <form action="" method="POST" id="contact-form">
                                <h4>Envie-nos uma mensagem</h4>
                                <div class="input-groups">
                                    <div class="input-group">
                                        <input type="text" name="name" id="reg-name" placeholder="Nome">
                                        <div class="msg-handler"></div>
                                    </div>
                                    <div class="input-group">
                                        <input type="email" name="email" id="reg-email" placeholder="Seu melhor E-mail">
                                        <div class="msg-handler"></div>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" name="phone" id="reg-phone" placeholder="DDD + Telefone">
                                        <div class="msg-handler"></div>
                                    </div>
                                    <div class="input-group">
                                        <textarea id="message-sub" name="message" id="" cols="40" rows="8" placeholder="Como podemos te ajudar?"></textarea>
                                        <div class="msg-handler"></div>
                                    </div>
                                    <div class="input-group__button">
                                        <button id="submit-btn">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="s-about">
            <div class="s-about__container">
                <div class="s-about__wrapper">
                    <div class="s-about-pic">
                        <img src="<?php echo URL_ASSET ?>images/about-pic1.jpg" alt="">
                    </div>
                    <div class="s-about__content">
                        <div class="s-about__content-wrapper">
                            <div class="about__content-subtitle">
                                <span>Quem Somos</span>
                            </div>
                            <div class="about__content-title">
                                <h2>Criamos belos interiores de casas.</h2>
                            </div>
                            <div class="about__content-description">
                                <p>Não sabe qual seu estilo? A gente te ajuda a descobrir. Aqui você encontra o profissional certo para fazer o seu projeto sair do papel e se tornar realidade.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s-services">
            <div class="s-services__container">
                <div class="s-services-heading">
                    <div class="heading-subtitle">
                        <div class="heading-subtitle__inside">
                            <span>o que você preferir</span>
                        </div>
                    </div>
                    <div class="heading-title">
                        <h2>O que nós fazemos</h2>
                    </div>
                </div>
                <div class="s-services__service-list">
                    <div class="service-list__cards">
                        <div class="service-card">
                            <div>
                                <img src="<?php echo URL_ASSET ?>images/esboco.png" alt="">
                            </div>
                            <div class="service-card__content">
                                <div class="service-name">
                                    <h4>Planejamento</h4>
                                </div>
                                <div class="service-description">
                                    <p>Desenhamos e projetamos de forma criativa o seu espaço com soluções adaptadas à funcionalidade, bem-estar e estética dos ambientes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-card">
                            <div>
                                <img src="<?php echo URL_ASSET ?>images/staircase.png" alt="">
                            </div>
                            <div class="service-card__content">
                                <div class="service-name">
                                    <h4>Interior</h4>
                                </div>
                                <div class="service-description">
                                    <p>Executamos o projeto 3D do seu espaço recorrendo às mais recentes tecnologias de desenho tridimensional, para lhe dar uma visão realista do resultado final do projeto. </p>
                                </div>
                            </div>
                        </div>
                        <div class="service-card">
                            <div>
                                <img src="<?php echo URL_ASSET ?>images/window.png" alt="">
                            </div>
                            <div class="service-card__content">
                                <div class="service-name">
                                    <h4>Exterior</h4>
                                </div>
                                <div class="service-description">
                                    <p>Projetamos a arquitectura de casas, espaços comerciais, empresariais e turísticos. Gerimos e acompanhamos as várias fases de execução do projeto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-list__cards">
                        <div class="service-card">
                            <div>
                                <img src="<?php echo URL_ASSET ?>images/seater-sofa.png" alt="">
                            </div>
                            <div class="service-card__content">
                                <div class="service-name">
                                    <h4>Mobília</h4>
                                </div>
                                <div class="service-description">
                                    <p>Produzimos peças exclusivas produzidas com todo o rigor à sua dimensão e estilo pretendido, recorrendo à sabedoria dos mais reconhecidos mestres marceneiros.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-card">
                            <div>
                                <img src="<?php echo URL_ASSET ?>images/plant.png" alt="">
                            </div>
                            <div class="service-card__content">
                                <div class="service-name">
                                    <h4>Decoração</h4>
                                </div>
                                <div class="service-description">
                                    <p>Prestamos serviços especializados de confeção têxtil, estofos, aplicação de papel de parede, iluminação, pintura..</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-card">
                            <div>
                                <img src="<?php echo URL_ASSET ?>images/star.png" alt="">
                            </div>
                            <div class="service-card__content">
                                <div class="service-name">
                                    <h4>Exclusividade</h4>
                                </div>
                                <div class="service-description">
                                    <p>Para cada projeto usamos um design único e acabamento exclusivo para deixar a decoração da casa com um estilo luxuoso.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-services__start-project">
                    <button id="start-project">Iniciar Projeto</button>
                </div>
            </div>

        </section>
        <section class="s-faq">
            <div class="s-faq__container">
                <div class="s-faq__wrapper">
                    <div class="s-faq__title">
                        <h2>Perguntas Frequentes</h2>
                    </div>
                    <div class="s-faq__questions">
                        <div class="question">
                            <div class="question-title">
                                <h3>O que inclui o projeto de designer de interiores?</h3>
                            </div>
                            <div class="question-content">
                                <p>
                                    <span>O seu projeto poderá incluir...</span>
                                    <ul>
                                        <li> Reunião com Designer de Interiores</li>
                                        <li>Apresentação de Moodboard</li>
                                        <li>Organização do espaço em planta</li>
                                        <li>Lista de artigos</li>
                                        <li>Visita ao local</li>
                                        <li>Confeção têxtil</li>
                                        <li>Estofagem</li>
                                        <li>Mobiliário por medida</li>
                                        <li>Pintura</li>
                                        <li>Imagens 3D</li>
                                        <li>Revisão do projeto</li>
                                        <li>Apresentação do orçamento</li>                          
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-title">
                                <h3>Como fazer um projeto de decoração?</h3>
                            </div>
                            <div class="question-content">
                                <p>
                                    Um projeto de design de interiores ou, na sua falta, um projeto de decoração de interiores precisa em partes iguais de uma visão criativa – 
                                    o que chamamos de inspiração – e de uma boa dose de realismo, este último imposto em grande parte pelo orçamento, mas também pelos recursos arquitetónicos e 
                                    funcionais. Durante o processo de projeto de design de interiores, são tomadas muitas decisões e encontrar a alternativa certa é extremamente difícil, 
                                    mas o facto de se recorrer a um designer de interiores/decorador de interiores facilita o mesmo.
                                </p>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-title">
                                <h3>Quanto custa um serviço de decoração de interiores?</h3>
                            </div>
                            <div class="question-content">
                                <p>
                                    Se procura um designer de interiores ou decorador de interiores, verá que os preços variam, dependendo do designer e do projeto. 
                                    Na era dos tutoriais DIY na internet e das revelações caseiras de 30 minutos, é comum acreditar que o custo de um serviço de decoração de interiores 
                                    é relativamente barato e que qualquer um poderá executá-lo. Contudo, um projeto de decoração funcional e adequado aos objetivos do cliente não é 
                                    uma tarefa simples. Saiba mais sobre os nossos <span id="deco-serv-span">serviços de decoração</span>.
                                </p>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-title">
                                <h3>O que é um projeto de decoração 3D?</h3>
                            </div>
                            <div class="question-content">
                                <p>
                                    Pretende mudar a decoração da sua casa ou escritório, mas primeiro quer ver como ficará? É possível através de um projeto de decoração 3D que realizamos na InteriorDesign.
                                    Desta forma, poderá simular todas as modificações que deseja, para alcançar o design com que tanto sonhou. Uma das grandes vantagens deste tipo de projeto é 
                                    que pode fazer tantos ajustes quanto alterações antes de dar sinal verde.
                                </p>
                            </div>
                        </div>
                        <div class="question">
                            <div class="question-title">
                                <h3>Porquê contratar um designer de interiores?</h3>
                            </div>
                            <div class="question-content">
                                <p>
                                    Quando se trata de remodelar um espaço é necessário ter em conta diversos fatores além da beleza estética. 
                                    Um especialista em Design de Interiores consegue tirar partido de todo o espaço disponível e estruturá-lo da melhor forma possível, 
                                    de acordo com os gostos, objetivos e orçamento do cliente. A organização do movimento é um ponto de partida, 
                                    e a divisão do espaço pode ser realizada através das paredes, móveis e até objetos. Ao mesmo tempo, 
                                    o designer de interiores está atento às condições de conforto (térmico, luminoso ou até acústico), bem como à ergonomia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s-contact">
            <div class="s-contact__container">
                <div class="left-card">
                    <h2>Vamos definir um plano de projeto adaptado às suas necessidades?</h2>
                    <p>Tire as suas dúvidas e apresente-nos as suas ideias, vamos oferecer as soluções. Deixe uma mensagem e marque uma reunião presencial no nosso showroom ou se preferir pelos canais digitais.</p>
                </div>
                <div class="right-card">
                    <div class="call-to-action">
                        <p>Quer de fazer um projeto de interiores, remodelar uma divisão ou usufruir de um serviço de decoração específico?</p>
                        <button id="leave-msg">Deixe sua mensagem</button>
                        <span>Estamos disponíveis para esclarecer todas as suas dúvidas.</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__container">
            <p>InteriorDesign CO &copy Todos os Direitos Reservados - <?php echo date('Y') ?> </p>
            <span>CNPJ 99.999.999 - 0009-99</span>
            <a href="#" target="_blank" rel="">Termos de uso</a>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="<?php echo URL_ASSET?>/js/main.js"></script>
</body>

</html>