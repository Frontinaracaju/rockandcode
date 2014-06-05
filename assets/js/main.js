/*!
 * Front In aracaju 2014
 *
 * @author Jefersson Nathan <jeferssonn@alfamaweb.com.br>
 */
;!$(document).ready(function() {

    // Trigger scroll action for mobile devices
    // in a mobile environment the event scroll is not triggered
    // in we have them that to launch the event manually.
    function ScrollStart() {
        $(document).trigger('scroll');
    }

    /* register function on observer */
    document.addEventListener("touchmove", ScrollStart, false);

    /* Used to modify rendered elements visibility to `visible` */
    modifyVisibilityToVisible = {"visibility": "visible"};

    /* Created to not display hard screen to user :) */
    $('.wrapper').animate({opacity: 1}, 1000);

    setTimeout(function(){
        $('.chamada-intro .first-line').addClass('fadeInLeft animated').css(modifyVisibilityToVisible);
        $('.chamada-intro .second-line').addClass('fadeInRight animated').css(modifyVisibilityToVisible);
    }, 900);

    setTimeout(function() {
        $('.logo').addClass('tada animated');
    }, 1000);

    setTimeout(function(){
        $('.info-data').addClass('animated fadeInRight').show();
        $('.info-local-valor').addClass('animated fadeInLeft').show();
    }, 370);

    setTimeout(function(){
        $('.button-inscreva-topo').addClass('animated bounceIn').css(modifyVisibilityToVisible).show();
    }, 1300);

    setTimeout(function(){
        $('.info-promo-topo').addClass('animated fadeInUp').css(modifyVisibilityToVisible);
    }, 2000);

    /* Add informations */
    $('.bt-ver-mais').css({cursor: "pointer"}).on('click', function(){
        $(this).parents('.row-palestrantes').after(
            '<section class="explanation"style="width: 100%; left: 0;position: absolute;background: #969393"> [[NOME]] </section>'
        );
    });


    $('#js-extended-menu').on('click', function(){
        /* create overlay to menu background support */
        $('body').prepend('<div id="overlay" class="animated rollIn"></div>');

        /* Add event to obeserver */
        $('#overlay').on('click', function() {

            $('#main-menu li').each(function(){
                $(this).removeClass('fadeIn').addClass('animated zoomOut');
            })

            /* Put the overlay on trash */
            setTimeout(function(){
                $('#overlay').addClass('rollOut');
            }, 500);

            /* Remove elements from DOM */
            setTimeout(function(){
                $('#overlay').remove();
                $('#main-menu').remove();
            }, 1000);
        })


        setTimeout(function() {
            $('body').prepend('<ul id="main-menu"></ul>');

            /* Links of menu */
            var menuLinks = [
                /* Label , link, In Effect, Out effect */
               ['Home',  '#Link1', 'fadeInRight'],
               ['Home2', '#Link2', 'fadeInRight'],
               ['Home3', '#Link2', 'fadeInRight'],
               ['Home4', '#Link2', 'fadeInRight'],
               ['Home5', '#Link2', 'fadeInRight'],
               ['Home6', '#Link2', 'fadeInRight']
            ];

            timeEffect = 150;


            function displayItem(label, time, effect) {
                setTimeout(function(){
                    $('#main-menu').append('<li class="animated '+ effect +'">' + label + '</li>');
                }, time);
            }

            for (var i in menuLinks) {
                displayItem(menuLinks[i][0], timeEffect * i, menuLinks[i][2]);
            };

        }, 500);
    });

    /* Scroll */
    $(window).scroll(function() {
        /* `Atrações` animation */
        if ($(window).scrollTop() > $('.intro-atracoes').position().top - 300) {
            $('.intro-atracoes').addClass('animated fadeIn').css(modifyVisibilityToVisible);
            $('.img-intro-atacoes').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);

            setTimeout(function(){
                $('.info-intro-atracoes .first-line').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
                $('.info-intro-atracoes .second-line').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
            }, 200);

            setTimeout(function(){ $('.info-intro-atracoes .desc-section').addClass('animated fadeInDown-rotate').css(modifyVisibilityToVisible); }, 300);
            setTimeout(function(){ $('.title-apresentador').addClass('animated zoomIn'); }, 400);

            /* Show presentation presenter */
            setTimeout(function(){ $('.apresentador').addClass('animated fadeInRight').css(modifyVisibilityToVisible).delay(500); }, 500);

            velocity = 100;
            animationSpeakers = 100;
            divRow = ['#first-line-speakers', '#second-line-speakers'];
            itemPerLine = [1, 2, 3, 4];


            /* Show items one by time with delay */
            function displayItem(item, cssClass) {
                setTimeout(function(){
                    item.addClass(cssClass).css(modifyVisibilityToVisible)
                }, animationSpeakers += velocity);
            }

            for (var i in divRow) {
                for (var j in itemPerLine) {
                    displayItem($(divRow[i] + ' .item-palestrante:nth-child(' + itemPerLine[j] + ')'), 'animated flipInY');
                }
            }
        }


        /* Scroll to `Lightning Talks`*/
        if ($(window).scrollTop() > $('.talks-guitar').position().top - 600){
            /* Show guitar container */
            $('.talks-guitar').addClass('animated fadeIn').css(modifyVisibilityToVisible);
            $('.title-talks').addClass('animated fadeInRight');
            $('.info-intro-talks').addClass('animated fadeInLeft');
            $('.item-lightning').addClass('animated flipInY').css(modifyVisibilityToVisible);
        }

        /* Patrocinadores */
        if($(window).scrollTop() > $('.patrocinadores.platinum').position().top - 400) {
            $('.patrocinadores.platinum .title-patrocinadores').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            $('.patrocinadores.platinum .patrocinador').addClass('animated flipInY').css(modifyVisibilityToVisible);
        }

        /* Location */
        if ($(window).scrollTop() > $('.local-evento').position().top - 400) {
            $('.local-evento').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
            setTimeout(function() {$('.img-intro-local').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);}, 1200);

            setTimeout(function(){
                $('.info-intro-local .first-line').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
                $('.info-intro-local .second-line').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
                $('.info-intro-local .desc-section').addClass('animated fadeInDown-rotate').css(modifyVisibilityToVisible);
            }, 900);
        }

         /* Slide Local */
         if ($(window).scrollTop() > $('.slider-local').position().top + 2500) {
            $('.slider-local').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
         }

         /* Info local description */
         if ($(window).scrollTop() > $('.info-local').position().top + 2600) {
            $('.info-local').addClass('animated fadeIn').css(modifyVisibilityToVisible);
         }

         if ($(window).scrollTop() > $('.intro-ingresso').position().top - 200) {
            $('.intro-ingresso').addClass('animated fadeInRight').css(modifyVisibilityToVisible);

            setTimeout(function() {$('.img-intro-ingresso').addClass('animated tada').css(modifyVisibilityToVisible);}, 800);

            setTimeout(function(){
                $('.info-intro-ingresso .first-line').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
                $('.info-intro-ingresso .second-line').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
                $('.info-intro-ingresso .desc-section').addClass('animated fadeInDown-rotate').css(modifyVisibilityToVisible);
            }, 300);

            setTimeout(function(){
                $('.info-ingresso').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            }, 200);

            setTimeout(function(){
                $('.button-info-ingresso').addClass('animated bounceIn').css(modifyVisibilityToVisible);
            }, 600);
        }

         /* Patrocinio ouro */
        if ($(window).scrollTop() > $('.patrocinadores.ouro').position().top - 600) {
            $('.patrocinadores.ouro .title-patrocinadores').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            $('.patrocinadores.ouro .patrocinador').addClass('animated flipInY').css(modifyVisibilityToVisible);
        }

         /* Patrocinio prata */
        if ($(window).scrollTop() > $('.patrocinadores.prata').position().top - 400) {
            $('.patrocinadores.prata .title-patrocinadores').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            $('.patrocinadores.prata .patrocinador').addClass('animated flipInY').css(modifyVisibilityToVisible);
        }

         /* Patrocinio platinum */
        if ($(window).scrollTop() > $('.patrocinadores.platinum').position().top - 400) {
            $('.patrocinadores.platinum .title-patrocinadores').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            $('.patrocinadores.platinum .patrocinador').addClass('animated flipInY').css(modifyVisibilityToVisible);
        }

         /* Patrocinio bronze */
        if ($(window).scrollTop() > $('.patrocinadores.bronze').position().top - 300) {
            $('.patrocinadores.bronze .title-patrocinadores').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            $('.patrocinadores.bronze .patrocinador').addClass('animated flipInY').css(modifyVisibilityToVisible);
        }

         /* Patrocinio apoiadores */
        if ($(window).scrollTop() > $('.patrocinadores.apoiadores').position().top + 6200) {
            $('.patrocinadores.apoiadores .title-patrocinadores').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            $('.patrocinadores.apoiadores .patrocinador').addClass('animated flipInY').css(modifyVisibilityToVisible);
        }

        /* About */
        if ($(window).scrollTop() > $('.intro-sobre').position().top - 400) {
            $('.intro-sobre').addClass('animated fadeInRight').css(modifyVisibilityToVisible);

            setTimeout(function() {$('.img-intro-sobre').addClass('animated flipInY').css(modifyVisibilityToVisible);}, 800);

            setTimeout(function(){
                $('.info-intro-sobre .first-line').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
                $('.info-intro-sobre .second-line').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
                $('.info-intro-sobre .desc-section').addClass('animated fadeInDown-rotate').css(modifyVisibilityToVisible);
            }, 300);
        }

        /* Info About */
        if ($(window).scrollTop() > $('.intro-sobre').position().top - 50) {
            setTimeout(function() {
                $('.info-sobre').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, 400);
        }

        /* Novidades */
        if ($(window).scrollTop() > $('.novidades').position().top - 300) {
            setTimeout(function() {
                $('.novidades').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
            }, 400);
        }

        /*  */
        if ($(window).scrollTop() > $('.o-que-falam').position().top - 300) {
            // '.o-que-falam'
        }
    });
});