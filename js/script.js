jQuery.noConflict();
(function($) {
    $(function() {


        /*** Ajax-fetching posts ***/

        $('#pagination').on('click', 'a', function(e){
            e.preventDefault();
            $(this).addClass('loading').html('<span>Загрузка</span>');
            $.ajax({
                type: "GET",
                url: $(this).attr('href') + '#loop',
                dataType: "html",
                success: function(out){
                    result = $(out).find('#loop .post');
                    nextlink = $(out).find('#pagination a').attr('href');
                    $('#loop').append(result.fadeIn(300));
                    $('#pagination a').removeClass('loading').html('<span>Показать еще</span>');
                    if (nextlink != undefined) {
                        $('#pagination a').attr('href', nextlink);
                    } else {
                        $('#pagination').remove();
                    }
                    if ( $.cookie('mode') == 'grid' ) {
                        grid_update();
                    } else {
                        list_update();
                    }
                }
            });
        });

        $('#pagination2').on('click', 'a', function(e){
            e.preventDefault();
            $(this).addClass('loading').html('<span>Загрузка</span>');
            $.ajax({
                type: "GET",
                url: $(this).attr('href') + '#loop2',
                dataType: "html",
                success: function(out){
                    result = $(out).find('#loop2 .post');
                    nextlink = $(out).find('#pagination2 a').attr('href');
                    $('#loop2').append(result.fadeIn(300));
                    $('#pagination2 a').removeClass('loading').html('<span>Показать еще</span>');
                    if (nextlink != undefined) {
                        $('#pagination2 a').attr('href', nextlink);
                    } else {
                        $('#pagination2').remove();
                    }
                    if ( $.cookie('mode') == 'grid' ) {
                        grid_update();
                    } else {
                        list_update();
                    }
                }
            });
        });

        $('#pagination3').on('click', 'a', function(e){
            e.preventDefault();
            $(this).addClass('loading').html('<span>Загрузка</span>');
            $.ajax({
                type: "GET",
                url: $(this).attr('href') + '#loop3',
                dataType: "html",
                success: function(out){
                    result = $(out).find('#loop3 .post');
                    nextlink = $(out).find('#pagination3 a').attr('href');
                    $('#loop3').append(result.fadeIn(300));
                    $('#pagination3 a').removeClass('loading').html('<span>Показать еще</span>');
                    if (nextlink != undefined) {
                        $('#pagination3 a').attr('href', nextlink);
                    } else {
                        $('#pagination3').remove();
                    }
                    if ( $.cookie('mode') == 'grid' ) {
                        grid_update();
                    } else {
                        list_update();
                    }
                }
            });
        });


    })
})(jQuery)