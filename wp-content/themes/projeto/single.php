<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Required meta tags -->
        <title>Rojo Publicidade</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" sizes="212x212" href="<?php bloginfo('template_url') ?>/assets/img/logo_novo.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name=description
            content="A webEvent é uma solução inteligente para seus eventos e webinars corporativos. Promova a interação e engajamento dos participantes.">
        <meta name=robots content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
        <link rel=canonical href=https://webevent.com.br />
        <meta property=og:locale content=pt_BR>
        <meta property=og:type content=website>
        <meta property=og:title content="Eventos corporativos: Organize seu evento digital">
        <meta property=og:description
            content="A webEvent é uma solução inteligente para seus eventos e webinars corporativos. Promova a interação e engajamento dos participantes.">
        <meta property=og:url content=https://webevent.com.br />
        <meta property=og:site_name content="_webEvent">
        <meta name=twitter:card content=summary_large_image>
        <meta name=twitter:description
            content="A webEvent é uma solução inteligente para seus eventos e webinars corporativos. Promova a interação e engajamento dos participantes.">
        <meta name="keywords"
            content="transmissão ao vivo, evento online, eventos corporativos, plataforma webinar, eventos digitais" />
        <meta name=twitter:title content="Eventos corporativos: Organize seu evento digital">
        <meta property=og:image content=https://webevent.com.br/preview.jpg>
        <meta property=og:image:type content=image/jpeg>
        <meta property=og:image:width content=800>
        <meta property=og:image:height content=600>


        <!-- Bootstrap -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.typekit.net/htb3iwp.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/slick-1.8.1/slick/slick.css" />

        <!-- CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/application.css">
        
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/ajustes.css">
        <!-- Google Tag Manager -->
        
        <!-- End Google Tag Manager -->
    </head>

    <body id="to">
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,400italic' rel='stylesheet' type='text/css'>

        

        <section id="blog-header" class="js-scroll-step">
            <img data-aos="fade" data-aos-offset="0" data-aos-duration="3000" data-aos-delay="200" style="position: absolute; width: 100%;height:100vh" src="<?php the_field('imagem_header') ?>" alt="">
            <div class="container">
                <div class="col-md-8 header_left">
                    <a href="<?php bloginfo('url');?>#A"><img style="filter:saturate(2.3);" data-aos="fade-down" data-aos-offset="0" data-aos-duration="3000" data-aos-delay="3000" class="logo_principal" src="<?php bloginfo('template_url') ?>/assets/img/logo_novo.png" alt=""> </a>
                    <div class="sociais">
                        <h1 data-aos="fade-down" data-aos-offset="0" data-aos-duration="2000" data-aos-delay="1500"><?php the_field('titulo_header') ?></h1>
                    </div>
                </div>
            </div>
        </section>

        <section style="height: auto;" id="blog-contents" class="js-scroll-step">
            <div class="container blog-content">
                <div class="col-md-9">
                    <p><?php the_field('conteudo_blog') ?></p>

                    <div class="row justify-content-between pt-5 red-pill">
                        <h4>#taketheredpill</h4>
                        <input type="button" value="Voltar" onclick="history.go(-1)">
                    </div>
                </div>
            
            </div>
        </section>
        

        <section style="height:auto; padding:28px 0;" id="E" class="js-scroll-step">
            <div style="height: 40%;" class="container">
            <div class="titulo_footer">
                <h1>Como podemos <br>te ajudar?</h1>
            </div>
        </div>
                <div class="container footer">
                    
                    <div class="col-md-3 itens">
                        <a href="#">Trabalhe Conosco</a>
                        <a href="#">Política de privacidade</a>
                        <a href="#">Mídia Kit</a>    
                    </div>
                    <div class="col-md-3 itens">
                        <a href="#">Notícias e Artigos</a>
                        <a href="#">Newsletter</a>
                        <a href="#">Digital Solvers</a>
                    </div>
                    <img class="map" src="<?php bloginfo('template_url') ?>/assets/img/bg_footer_mobile.jpg" alt="">
                    <div class="col-md-5 itens">
                        
                        <p>Rua Henri Dunant, 873 Santo Amaro São Paulo</p>

                           <p>contato@rojopublicidade.com</p> 
                            
                            <p>(11) 2500-5967 (11) 98158-9826</p>
                    </div>
                </div>
                <div class="rodape">
                    <div class="container">
                    <p>Rojo Publicidade, uma empresa do grupo Digital Solvers</p>
                </div>
                </div>
            
        </section>

        <!--<button class="Scroll-to-top">Scroll To Top</button>-->

    
    <!-- Janela de Formulário enviado -->
    <!--<div class="popup flexMode">
        <div>
            <img style="margin-bottom: 15px; cursor: pointer; width: 20px;" src="<?php bloginfo('template_url') ?>/assets/img/1.png" class="closepop"><br>
            <img src="<?php bloginfo('template_url') ?>/assets/img/obrigado.jpg" style="width: 100%; max-width: 350px; height: auto;" data-dismiss="modal"
                aria-label="Close" alt="">
        </div>
    </div>
    <a class="flutua_demo" href="#demos">Agende sua Demonstração</a>
    <style>
        .popup {
            position: fixed;
            z-index: 0 !important;
            background: rgba(0, 0, 0, 0.5);
            height: 100vh;
            width: 100%;
            top: -110vh;
            opacity: 0;
            padding: 15px;
        }

        .showpop {
            top: 0px;
            opacity: 1;
        }
    </style>-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/slick-1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/skrollr-master/dist/skrollr.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/parallax.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/canvas-video-player.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/assets/js/three.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/assets/js/panolens.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
    
        $(document).ready(function () {
            $('.popup').click(function () {
                $('.popup').removeClass('showpop');
            });
            $('.closepop').click(function () {
                $('.popup').removeClass('showpop');
            });
        });
    </script>

    <script type="text/javascript">
        skrollr.init({
            forceHeight: false
        });
    </script>
    <script>

        $('.depoimentos_pessoas').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.servicos-2').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <script>

        var totalItems = $('.carousel-item').length;
        var currentIndex = $('div.active').index() + 1;
        var descricao;
        $('.num').html('' + currentIndex + '/' + totalItems + '');

        $('#carouselExampleIndicators').carousel({
        interval: 2000
        });

        $( document ).ready(function() {
            descricao = $('.dots .active').data('descriton');
            $('#descricao').html(descricao);
            
        });


        $('#carouselExampleIndicators').bind('slid', function() {
        currentIndex = $('#carouselExampleIndicators .carousel-inner .carousel-item div.active').index();
        descricao = $('.dots .carousel-indicators .case-'+currentIndex).data('descriton');
        
        $('.link').attr('href', $('.dots .case-'+currentIndex).data('url'));
        $('#descricao').html(descricao);
        
        console.log($('.link').attr('href'));
        });
    </script>
    <script>
        var distance1 = $('.bg-overlay1').offset().top - 550, $window = $(window);
        $window.scroll(function () {
            if ($window.scrollTop() >= distance1) {
                var scrollTop = $(this).scrollTop();
                $('.bg-overlay1').css({
                    opacity: function () {
                        var elementHeight = $(this).height(),
                            opacity = ((1 - ((elementHeight + distance1) - scrollTop) / elementHeight) * 0.8) + 0.2;
                        return opacity;
                    }
                });
            }
        });
        var distance2 = $('.bg-overlay2').offset().top - 550, $window = $(window);
        $window.scroll(function () {
            if ($window.scrollTop() >= distance2) {
                var scrollTop = $(this).scrollTop();
                $('.bg-overlay2').css({
                    opacity: function () {
                        var elementHeight = $(this).height(),
                            opacity = ((1 - ((elementHeight + distance2) - scrollTop) / elementHeight) * 0.8) + 0.2;
                        return opacity;
                    }
                });
            }
        });
        var distance3 = $('.bg-overlay3').offset().top - 550, $window = $(window);
        $window.scroll(function () {
            if ($window.scrollTop() >= distance3) {
                var scrollTop = $(this).scrollTop();
                $('.bg-overlay3').css({
                    opacity: function () {
                        var elementHeight = $(this).height(),
                            opacity = ((1 - ((elementHeight + distance3) - scrollTop) / elementHeight) * 0.8) + 0.2;
                        return opacity;
                    }
                });
            }
        });
        $(document).scroll(function () {
            var y = $(this).scrollTop();
            if (y > 500) {
                $('.up').removeClass('nao');
            } else {
                $('.up').addClass('nao');
            }
        });
    </script>



    <script>
        var isIOS = /iPad|iPhone|iPod/.test(navigator.platform);
        if (isIOS) {
            var canvasVideo = new CanvasVideoPlayer({
                videoSelector: '.video',
                canvasSelector: '.canvas',
                timelineSelector: false,
                autoplay: true,
                makeLoop: true,
                pauseOnClick: false,
                audio: false
            });
        } else {
            document.querySelectorAll('.canvas')[0].style.display = 'none';
        }
    </script>
    <!--<script>
        const panoImage = document.querySelector('.pano-image');
        const panoAgence = '<?php bloginfo('template_url') ?>/assets/img/Equirectangular.jpg';

        const panorama = new PANOLENS.ImagePanorama(panoAgence);
        const viewer = new PANOLENS.Viewer({
            container: panoImage
        });

        viewer.add(panorama);

    </script>-->

    </body>

</html>





