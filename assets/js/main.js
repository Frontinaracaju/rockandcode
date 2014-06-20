/*!
 * Front In aracaju 2014
 *
 * @author Jefersson Nathan <jeferssonn@alfamaweb.com.br>
 * @type {callback} DOMLoadedイベントでトリガ
 */
;!$(document).ready(function() {

    function ScrollStart() {
        $(document).trigger('scroll');
    }

    /* Twitter fallback */
    $.get('http://www.alfama.web0800.com.br/', function(data){
        tweets = JSON.parse(data);

        loop = 1;
        for (var i in tweets) {
            console.log(loop);
            $('.item-falam:nth-child(' + loop + ') .txt-item-falam').html(tweets[i].text);
            $('.item-falam:nth-child(' + loop + ') .info-item-falam').find('.nome-avatar').html(tweets[i].user.name);
            $('.item-falam:nth-child(' + loop + ') .info-item-falam').find('.usuario-avatar').html('@' + tweets[i].user.screen_name);
            $('.item-falam:nth-child(' + loop + ') .info-item-falam').find('.avatar img').attr('src', tweets[i].user.profile_image_url);
            loop += 1;
        }
    });


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

        var transitions = ['rollIn', 'swing', 'tada', 'roolIn', 'fadeInUp', 'ZoomIn'];
        index = Math.floor(Math.random() * (transitions.length - 1) + 1);
        console.log(index);

        var elementWithInformation = $(this).parents('.item-palestrante');
        var image = elementWithInformation.find('img');

        $('body').prepend('<div id="overlay" class="animated ' + transitions[index] + '"></div>');

        // div speaker on overlay
        var content   = '<div class="col-md-5 col-sm-6 item-palestrante hidden-xs animated zoomIn" style="visibility: visible">';
            content  += '<div class="avatar-palestrante"><img src="' + image.attr('src') + '"></div>';
            content  += '<div class="info-palestrante">';
            content  += '<h4 class="title-palestrante white shadow f-26 txt-center">' + elementWithInformation.attr('data-name') + '</h4>';
            content  += '<h5 class="trabalho-palestrante yellow shadow f-16 txt-center">' + elementWithInformation.attr('data-employer') + '</h5>';
            content  += '</div>';
            content  += '</div>';

        $('body').append('<div id="main-menu" class="selected-speaker"> ' + content + '<h2 class="yellow shadow f-34 title-speaker animated fadeInLeft">' + elementWithInformation.attr('data-name') + '</h2><p class="description-speaker f-16 shadow white animated fadeInRight">' + elementWithInformation.attr('data-description') + '</p></div>');

        position = ($(window).height() - $('#main-menu').height()) / 2;
        $('#main-menu').css({top: position});

        /* Add event to obeserver */
        $('#overlay').on('click', function() {

            $('#main-menu *').each(function(){
                $(this).removeClass('fadeIn').addClass('animated zoomOut');
            });

            /* Put the overlay on trash */
            setTimeout(function(){
                $('#overlay').addClass('rollOut');
            }, 500);

            /* Remove elements from DOM */
            setTimeout(function(){
                $('#overlay').remove();
                $('#main-menu').remove();
            }, 1000);
        });
    });

    $('#js-extended-menu').on('click', function(){
        /* create overlay to menu background support */
        $('body').prepend('<div id="overlay" class="animated rollIn"></div>');

        /* Add event to obeserver */
        $('#overlay').on('click', function() {

            $('#main-menu li').each(function(){
                $(this).removeClass('fadeIn').addClass('animated zoomOut');
            });

            /* Put the overlay on trash */
            setTimeout(function(){
                $('#overlay').addClass('rollOut');
            }, 500);

            /* Remove elements from DOM */
            setTimeout(function(){
                $('#overlay').remove();
                $('#main-menu').remove();
            }, 1000);
        });


        setTimeout(function() {
            $('body').prepend('<ul id="main-menu"></ul>');

            /* Links of menu */
            var menuLinks = [
               /* Label , link, In Effect, Out effect */
               ['Atrações', '$(\'html,body\').animate({scrollTop: $(\'.atracoes\').offset().top - 70}, 1500);', 'fadeInRight'],
               ['Local', '$(\'html,body\').animate({scrollTop: $(\'.local-evento\').offset().top - 70}, 1500);', 'fadeInRight'],
               ['Inscrições', '$(\'html,body\').animate({scrollTop: $(\'.ingresso\').offset().top - 70}, 1500);', 'fadeInRight'],
               ['Sobre', '$(\'html,body\').animate({scrollTop: $(\'.sobre\').offset().top - 70}, 1500);', 'fadeInRight']
            ];

            timeEffect = 150;

            $('#main-menu').css({visibility: 'hidden'});

            function displayItem(label, time, effect, link) {
                setTimeout(function(){
                    $('#main-menu').append('<li class="animated txt-center '+ effect +'"><a onclick="$(\'#overlay\').trigger(\'click\'); setTimeout(function(){ ' + link + ' }, 800);" class="white shadow item-menu pointer">' + label + '</a></li>');

                    if('Sobre' == label) {
                        position = ($(window).height() - $('#main-menu').height()) / 2;
                        $('#main-menu').css({top: position});
                        $('#main-menu').css(modifyVisibilityToVisible);
                    }

                }, time);
            }

            for (var i in menuLinks) {
                displayItem(menuLinks[i][0], timeEffect * i, menuLinks[i][2], menuLinks[i][1]);
            };
        }, 500);
    });

    function markMenuItem(markItem) {
        $('.item-menu-fixed').removeClass('current-item');
        $('.item-menu-fixed:nth-child(' + markItem + ')').addClass('current-item');
    };

    /* Scroll */
    $(window).scroll(function() {

        /* Hide and show topbar */
        if ($(window).scrollTop() > $('.atracoes').position().top - 100) {
            $('.fixed-menu').removeClass('fadeOutUp').addClass('animated fadeInDown').show();
        } else {
            $('.fixed-menu').removeClass('fadeInDown').addClass('animated fadeOutUp');
        }

        /* `Atrações` animation */
        if ($(window).scrollTop() > $('.intro-atracoes').position().top - 300) {
            markMenuItem(2);
            $('.intro-atracoes').addClass('animated fadeIn').css(modifyVisibilityToVisible);
            $('.img-intro-atacoes').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);

            setTimeout(function(){
                $('.info-intro-atracoes .first-line').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
                $('.info-intro-atracoes .second-line').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
            }, 200);

            setTimeout(function(){ $('.info-intro-atracoes .desc-section').addClass('animated fadeInDown-rotate').css(modifyVisibilityToVisible); }, 300);
            setTimeout(function(){ $('.splash-apresentador').addClass('animated fadeInDown').css(modifyVisibilityToVisible); }, 300);
            setTimeout(function(){ $('.title-apresentador').addClass('animated zoomIn').css(modifyVisibilityToVisible); }, 400);

            /* Show presentation presenter */
            setTimeout(function(){ $('.apresentador').addClass('animated fadeInRight').css(modifyVisibilityToVisible).delay(500); }, 500);

            velocity = 100;
            animationSpeakers = 100;
            divRow = ['#first-line-speakers', '#second-line-speakers'];
            itemPerLine = [1, 2, 3, 4];


            /* Show items one by time with delay */
            function displayItem(item, cssClass) {
                setTimeout(function(){
                    item.addClass(cssClass).css(modifyVisibilityToVisible);
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
            markMenuItem(3);
            $('.local-evento').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
            setTimeout(function() {$('.img-intro-local').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);}, 1200);

            setTimeout(function(){
                $('.info-intro-local .first-line').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
                $('.info-intro-local .second-line').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
                $('.info-intro-local .desc-section').addClass('animated fadeInDown-rotate').css(modifyVisibilityToVisible);
            }, 900);
        }

         /* Slide Local */
         if ($(window).scrollTop() > $('.content-local').position().top - 300) {
            $('.slider-local').addClass('animated fadeIn').css(modifyVisibilityToVisible);
         }

         /* Info local description */
         if ($(window).scrollTop() > $('.content-local').position().top + 50) {
            $('.info-local').addClass('animated fadeIn').css(modifyVisibilityToVisible);
         }

         if ($(window).scrollTop() > $('.intro-ingresso').position().top - 200) {
            markMenuItem(4);
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
        if ($(window).scrollTop() > $('.apoiadores').position().top - 300) {
            $('.patrocinadores.apoiadores .title-patrocinadores').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            $('.patrocinadores.apoiadores .patrocinador').addClass('animated flipInY').css(modifyVisibilityToVisible);
        }

        /* About */
        if ($(window).scrollTop() > $('.intro-sobre').position().top - 400) {
            markMenuItem(5);
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
        if ($(window).scrollTop() > $('.novidades').position().top - 400) {
            setTimeout(function() {
                $('.novidades').addClass('animated fadeInRight').css(modifyVisibilityToVisible);
            }, 400);
        }
    });
});