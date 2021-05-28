<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="/node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="./public/css/glide.core.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sky</title>
</head>
<body>
    <!-- Header -->
    <div class="headerContainer">
        <div class="logoContainter">
            <img src="./public/img/logo.svg" alt="">
        </div>
        <!-- Form Header -->
        <div class="formContainer">
            <p>Para mais informações, preencha o formulário abaixo</p>
            <form action="" id="form-banner">

                <input type="name" name="Nome" class="form-control" id="name" placeholder="Nome*" required>
                <input type="phone" class="form-control phone" name="Telefone" placeholder="Telefone*" required>
                <input type="email" name="Email" class="form-control" placeholder="E-mail*" required>
                <input type="hidden" name="Tipo" class="form-control" value="lateral" required>
                <button type="submit" id="btn-form1" onclick=""></button>

            </form>
            <div class="radioButton">
                <input type="radio" name="" id="checkbox" required>
                <p>Li e aceito o termo e a </p>
                <span> Politica de Privacidade.*</span>
            </div>
        </div>
    </div>
    <!-- Container de informações -->
    <div class="informationContainer">
        <div class="studio">
            <img src="./public/img/Grupo 341.svg" alt="">
            <p>Studios<br> com vista privilegiada</p>
        </div>
        <div class="studio">
            <img src="./public/img/quadrado.svg" alt="">
            <p> 25 a 31m²s<br>studios</p>
        </div>
        <div class="studio">
            <img src="./public/img/Grupo 342.svg" alt="">
            <p>Área de lazer <br> com 2 opções de piscina</p>
        </div>
        <div class="studio">
            <img src="./public/img/Grupo 343.svg" alt="">
            <p>A 5 min.<br>  do metrô Clínicas</p>
        </div>
    </div>
    <!-- Immobiles Highlights -->
    <section class="immobile-highlights">
        <div class="highlights-container">
            <div class="highlightsImage-container">
                <div class="img1">
                    <img src="./public/img/highlights1.svg" alt="">
                </div>
                <div class="img2">
                    <img src="./public/img/highligths2.svg" alt="">
                </div>
            </div>
            <div class="highlightsText-container">
                <h2>SKY Pinheiros</h2>
                <p class="text-1">Imponente como deveria ser.</p>
                <p>
                    Viva o ponto alto de São Paulo. Um ponto de referência onde você se<br>
                    conecta com toda a cidade. Pinheiros tem mobilidade, variedade de<br>
                    comércio e lazer. São Studios de alto padrão de 25m² a 31 m², com<br>
                    diversas opções de lazer. 
                </p>

                <div class="highlightsMap-container">
                    <img src="./public/img/Grupo 67.svg" alt="">
                    <p>Rua Arruda Alvim, nº180, Pinheiros - SP</p>
                </div>

                <div class="mapButton">
                    <a href="#">Ver no mapa -></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Slider de Imóveis -->
    <section class="immobiles-slider">
        <div class="container">
            <div class="slider-content">
                <h2><span>Um</span> toque de<br> sofisticação</h2>
                <p>Cada detalhe é uma<br> nova experiência.</p>
                <div class="button-container" data-glide-el="controls">
                    <button data-glide-dir="<<" class="btn btn1"></button>
                    <button data-glide-dir=">>" class="btn btn2"></button>
                </div>
            </div>
            <div class="sliderContainer">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                      <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="slider-images">
                              <img src="./public/img/slider1.svg" alt="">
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="slider-images">
                                <img src="./public/img/slider2.svg" alt="">
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="slider-images">
                                <img src="./public/img/slider2.svg" alt="">
                            </div>
                        </li>
                      </ul>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    
    <!-- Area de Lazer -->
    <section class="recreationSection">
        <div class="recreationArea">
            <div class="recreationSelect">
                <div class="d-flex justify-content align-items wrap mt">
                    <div class="recreationContainer recreationContainer">
                        <div class="imageContainer1"></div>
                        <p>Texto de lazer</p>
                    </div>
                    <div class="recreationContainer recreationContainer2">
                        <div class="imageContainer2 active"></div>
                        <p>Texto de lazer</p>
                    </div>
                    <div class="recreationContainer recreationContainer3 mt">
                        <div class="imageContainer3"></div>
                        <p>Texto de lazer</p>
                    </div>
                    <div class="recreationContainer recreationContainer4 mt">
                        <div class="imageContainer4"></div>
                        <p>Texto de lazer</p>
                    </div>
                    <div class="recreationContainer recreationContainer5 mt">
                        <div class="imageContainer5"></div>
                        <p>Texto de lazer</p>
                    </div>
                    <div class="recreationContainer recreationContainer6 mt">
                        <div class="imageContainer6"></div>
                        <p>Texto de lazer</p>
                    </div>
                    <div class="recreationContainer recreationContainer7 mt">
                        <div class="imageContainer7"></div>
                        <p>Texto de lazer</p>
                    </div>
                    <div class="recreationContainer recreationContainer8 mt">
                        <div class="imageContainer8"></div>
                        <p>Texto de lazer</p>
                    </div>
                    <div class="recreationContainer recreationContainer9 mt">
                        <div class="imageContainer9"></div>
                        <p>Texto de lazer</p>
                    </div>
                </div>
            </div>
            <div class="recreationText">
                <h2> Área de Lazer</h2>
                <span>Tudo pensado para o dia a dia.</span>
                <p>
                    O Sky Pinheiros oferece uma área de lazer repleta de<br>
                    opções para você aproveitar da melhor maneira e com<br>
                    muito conforto. Sinta-se em um clube com piscina,<br>
                    salão de jogos, espaço gourmet e muito mais.<br>
                    Conheça o Sky e viva o ponto mais alto de São Paulo.
                </p>

                <div class="more">
                    <a href="#">Ver mais -></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Plantas do Empreendimento -->
    <section class="enterprise-planSection">
        <div class="enterprise-plan">
            <div class="enterprise-planText">
                <h1>Plantas do Empreendimento</h1>
                <span>Studios completos para todo tipo de estilos.</span>
                
                <h2>Studios - 25m² a 31m² -> </h2>  
            </div>
            <div class="enterprise-planImage">
                <img src="./public/img/zoom.png" alt="">
            </div>
        </div>
    </section>

    <!-- Area Realização -->

    <section class="realizationSection">
        <div class="realization">
            <h2>Relização por</h2>
            <div class="realizationImages">
                <img src="./public/img/7bImoveis.png" alt="">
                <img src="./public/img/AAM.png" alt="">
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="contato-realizado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <br>
                    <div class="text-center">
                        Obrigado!
                        <br>Em Breve Entraremos em Contato!
                    </div>
                    <br>
                </div>

            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footerContainer">
            <img src="./public/img/logo.svg" alt="logo sky pinheiros">
            <div class="addressContainer">
                <p>Rua Arruda Alvim, nº180,<br> Pinheiros - SP<br>
                    CEP: 05410-020
                </p>
            </div>
            <div class="formFooterContainer">
                <form action="" id="form-contato">
                    <div class="formDiv1">
                        <input type="text" name="Nome" class="form-control" id="name" placeholder="Nome*" required>
                        <input type="email" name="Email" class="form-control" placeholder="E-mail*" required>
                        <input type="text" class="form-control phone" name="Telefone" placeholder="Telefone*" required>
                        <input type="hidden" name="Tipo" class="form-control" value="lateral" required>
                    </div>
                   <div class="formDiv2">
                        <input type="text" placeholder="Mensagem" name="texto" id="text">
                        <div class="formSubmit">
                            <div class="radioButton">
                                <input type="radio" name="" id="checkbox" required>
                                <p>Li e aceito o termo e a <span> Politica de Privacidade.*</span></p>                      
                            </div>
                            <input type="submit" id="btn-form-contato"">
                        </div>
                   </div>
                  
                </form>
            </div>
        </div>
    </footer>
    <script src="./public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="./assets/dist/js/libary/jquery/jquery.min.js"></script>
    <script src="./assets/dist/js/libary/bootstrap/bootstrap.min.js"></script>



    <script>
        const config = {
            type: 'carousel',
            perView: 2,
            gap: 22,
            autoplay: 3000 | true
        }
        new Glide('.glide', config).mount()
    </script>

    <?php require_once 'import-tags/importJs.php'; ?>
    <?php require_once 'import-tags/importJsIntegration.php'; ?>

</body>
</html>