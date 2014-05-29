/*!
 * Front In aracaju 2014
 *
 * @author Jefersson Nathan <none@none.none>
 */
$(document).ready(function() {

    // Used to modify rendered elements visibility to `visible`
    var modifyVisibilityToVisible = {"visibility": "visible"};

    // Put it on inline css...
    $('.chamada-intro .first-line').css({"visibility": "hidden"});
    $('.chamada-intro .second-line').css({"visibility": "hidden"});

    // Created to not display hard screen to user :)
    $('.wrapper').animate({opacity: 1}, 1000);

    setTimeout(function(){
        $('.chamada-intro .first-line').addClass('fadeInLeft animated').css(modifyVisibilityToVisible);
        $('.chamada-intro .second-line').addClass('fadeInRight animated').css(modifyVisibilityToVisible);
    }, 900);

    $('.logo').addClass('tada animated');

    setTimeout(function(){
        $('.info-data').addClass('animated fadeInRight').show();
        $('.info-local-valor').addClass('animated fadeInLeft').show();
    }, 300);


/*------ Script Placeholder ------*/
    if (!Modernizr.input.placeholder) {

        $('[placeholder]').focus(function() {
          var input = $(this);
          if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
          }
        }).blur(function() {
          var input = $(this);
          if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
          }
        }).blur();
        $('[placeholder]').parents('form').submit(function() {
          $(this).find('[placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
            }
          })
        });
    }


});