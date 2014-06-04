/*!
 * Front In aracaju 2014
 *
 * @author Jefersson Nathan <none@none.none>
 */
;!$(document).ready(function() {

    // Used to modify rendered elements visibility to `visible`
    modifyVisibilityToVisible = {"visibility": "visible"};

    // Created to not display hard screen to user :)
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

    // Add informations
    $('.bt-ver-mais').css({cursor: "pointer"}).on('click', function(){
        // $(this).parents('.row-palestrantes').after(
        //     '<section
        //     class="explanation"
        //     style="width: 100%; left: 0;position: absolute;background: #969393">
        //     [[NOME]]
        //     </section>'
        // );
    });


    $('#js-extended-menu').on('click', function(){
        // create overlay to menu background support
        $('body').prepend('<div id="overlay" class="animated rollIn"></div>');

        // Add event to obeserver
        $('#overlay').on('click', function() {

            $('#main-menu li').each(function(){
                $(this).removeClass('fadeIn').addClass('animated zoomOut');
            })

            // Put the overlay on trash
            setTimeout(function(){
                $('#overlay').addClass('rollOut');
            }, 500);

            // Remove elements from DOM
            setTimeout(function(){
                $('#overlay').remove();
                $('#main-menu').remove();
            }, 1000);
        })


        setTimeout(function() {
            $('body').prepend('<ul id="main-menu"></ul>');

            // Links of menu
            var menuLinks = [
                // label , link, In Effect, Out effect
               ['Home',  '#Link1', 'fadeInRight'],
               ['Home2', '#Link2', 'fadeInRight'],
               ['Home3', '#Link2', 'fadeInRight'],
               ['Home4', '#Link2', 'fadeInRight'],
               ['Home5', '#Link2', 'fadeInRight'],
               ['Home6', '#Link2', 'fadeInRight']
            ];

            timeEffect = 150;

            for (var i in menuLinks) {
                displayItem(menuLinks[i][0], timeEffect * i, menuLinks[i][2]);
            };

        }, 500);

        function displayItem(label, time, effect) {
            setTimeout(function(){
                $('#main-menu').append('<li class="animated '+ effect +'">' + label + '</li>');
            }, time);
        }

    });

    // Scroll
    $(window).scroll(function() {
        // Atrações animation
        if ($(window).scrollTop() > $('.intro-atracoes').position().top - 300) {
            $('.img-intro-atacoes').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);
            setTimeout(function(){ $('.info-intro-atracoes .first-line').addClass('animated fadeInLeft').css(modifyVisibilityToVisible);}, 500);
            setTimeout(function(){ $('.info-intro-atracoes .second-line').addClass('animated fadeInRight').css(modifyVisibilityToVisible); }, 800);
            setTimeout(function(){ $('.info-intro-atracoes .desc-section').addClass('animated fadeInDown-rotate').css(modifyVisibilityToVisible); }, 1000);
            setTimeout(function(){ $('.title-apresentador').addClass('animated swing-rotate'); }, 1500);
            // Show presentation presenter
            setTimeout(function(){ $('.apresentador').addClass('animated flipInY').css(modifyVisibilityToVisible).delay(500); }, 1900);

            animationSpeakers = 2300;
            velocity = 170;

            setTimeout(function(){
                $('#first-line-speakers .item-palestrante:nth-child(1)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            setTimeout(function(){
                $('#first-line-speakers .item-palestrante:nth-child(2)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            setTimeout(function(){
                $('#first-line-speakers .item-palestrante:nth-child(3)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            setTimeout(function(){
                $('#first-line-speakers .item-palestrante:nth-child(4)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            setTimeout(function(){
                $('#first-line-speakers .item-palestrante:nth-child(5)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            /* Secound line */
            setTimeout(function(){
                $('#second-line-speakers .item-palestrante:nth-child(1)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            setTimeout(function(){
                $('#second-line-speakers .item-palestrante:nth-child(2)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            setTimeout(function(){
                $('#second-line-speakers .item-palestrante:nth-child(3)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            setTimeout(function(){
                $('#second-line-speakers .item-palestrante:nth-child(4)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);

            setTimeout(function(){
                $('#second-line-speakers .item-palestrante:nth-child(5)').addClass('animated flipInY').css(modifyVisibilityToVisible);
            }, animationSpeakers += velocity);
        }
    });
    // $('.intro-atracoes *, .info-intro-atracoes *, .item-palestrante *, .item-palestrante, .apresentador').css(modifyVisibilityToVisible);
    // Apply animation for speakers

    // document.getElementsByTagName('audio')[0].play();

/*------ Script Placeholder ------*/
    // if (!Modernizr.input.placeholder) {

    //     $('[placeholder]').focus(function() {
    //       var input = $(this);
    //       if (input.val() == input.attr('placeholder')) {
    //         input.val('');
    //         input.removeClass('placeholder');
    //       }
    //     }).blur(function() {
    //       var input = $(this);
    //       if (input.val() == '' || input.val() == input.attr('placeholder')) {
    //         input.addClass('placeholder');
    //         input.val(input.attr('placeholder'));
    //       }
    //     }).blur();
    //     $('[placeholder]').parents('form').submit(function() {
    //       $(this).find('[placeholder]').each(function() {
    //         var input = $(this);
    //         if (input.val() == input.attr('placeholder')) {
    //           input.val('');
    //         }
    //       })
    //     });
    // }


});