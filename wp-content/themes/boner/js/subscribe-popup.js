$(document).ready(function(){
    //set cookie on popup form
    //alert('working');

    if (!$.cookie('the_cookie')){
        $('.mc_popup').css('display','block');
        var date = new Date();
        date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
        $.cookie('alert', true, { expires: date });
    }

    $.cookie('the_cookie', 'the_value', { expires: 1, path: '/' });
});