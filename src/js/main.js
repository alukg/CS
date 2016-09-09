$(function(){
    $('.navbar .navbar-collapse').on('show.bs.collapse', function(e) {
        $('.navbar .navbar-collapse').not(this).collapse('hide');
    });
});

$('input[type=text][name=username]').tooltip({
    placement: "right",
    trigger: "focus"
});

$('input[type=password][name=password]').tooltip({
    placement: "right",
    trigger: "focus"
});