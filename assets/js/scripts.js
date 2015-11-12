
jQuery(document).ready(function() {

    $('.page-container form').submit(function(){
        var username = $(this).find('.username').val();
        var password = $(this).find('.password').val();
		var firstname = $(this).find('.firstname').val();
	    var lastname = $(this).find('.lastname').val();
	    var email = $(this).find('.email').val();
        if(username.length < 5 ||username.length > 20 || username == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '27px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.username').focus();
            });
            return false;
        }
        if(password.length < 6 ||password.length > 20 || password == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '96px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.password').focus();
            });
            return false;
        }
		 if(firstname.length < 2 ||firstname.length > 15 || firstname == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '165px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.firstname').focus();
            });
            return false;
        }
		if(lastname.length < 2 ||lastname.length > 15 || lastname == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '234px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.lastname').focus();
            });
            return false;
        }
		if(email.length < 9 ||email.length > 30 || email == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '303px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.email').focus();
            });
            return false;
        }
    });

    $('.page-container form .username, .page-container form .password, .page-container form .firstname, .page-container form .lastname, .page-container form .email').keyup(function(){
        $(this).parent().find('.error').fadeOut('fast');
    });

});
