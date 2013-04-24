$(document).ready(function() {
	
$('.select-check :checkbox').click( function(){
if ($(this).is(':checked')) {$(this).parents('.select-check').addClass('selected');}
else {$(this).parents('.select-check').removeClass('selected');}
});

$('.social-dropdown.facebook').click( function(){
$('.facebook-login-dropdown').slideToggle();
});

$('.social-dropdown.twitter').click( function(){
$('.twitter-login-dropdown').slideToggle();
});


$('.social-dropdown.linkedin').click( function(){
$('.linkedin-login-dropdown').slideToggle();
});
});