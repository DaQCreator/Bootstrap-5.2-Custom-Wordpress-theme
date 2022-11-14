(function($){

  $(document).ready(function(){

    $('.default_sidebar > ul').addClass('list-group list-group-flush glass-bgc');
    $('.default_sidebar > ul > li').addClass('list-group-item');
    $('.default_sidebar > ul > li > a').addClass('text-decoration-none text-dark');

    $('.footer_widget > ul').addClass('list-unstyled');
    $('.footer_widget > ul > li > a').addClass('text-decoration-none text-dark');

    $('.main-header img').addClass('rounded');

    $('#comments #reply-title').addClass('fs-5 fw-600 text-dark');
    $('#commentform > p').addClass('m-0');
    $('#commentform #comment, #commentform #author, #commentform #email, #commentform #url').addClass('form-control form-control-sm mb-3');
    $('#commentform #submit').addClass('btn btn-sucess bg-custom-main text-white rounded');

    $('.comment-form-cookies-consent').addClass('mb-3');
    
    $('.section-three h2').addClass('fs-4 fw-600');

    $('.features h3').addClass('fs-5 fw-600 mt-3');
    $('.features h3 a').addClass('text-decoration-none text-custom-main');

  });

})(jQuery);