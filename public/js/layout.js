    $(function(){
        setTimeout(function(){
            $(".main-header").slideUp('slow');
        },2000);
    })
    function show_other_nav(show_nav,hide_nav){
        $("."+show_nav).show();
        $("."+hide_nav).hide();
    }