/*register*/
$(document).on('submit','.register_form',function()
{
	var name=$('#name').val(),
	email=$('#email').val(),
	password=$('#password').val(),
	cpassword=$('#cpassword').val(),
	error=false;
	$('.name-feedback').html('');
	$('.email-feedback').html('');
	$('.password-feedback').html('');
	$('.cpassword-feedback').html('');

	if(!name)
	{
		$('.name-feedback').html('<i class="fa fa-exclamation-circle"></i> Name is required');
		error=true;
	}
	else if(!/^[a-zA-Z\s]*$/.test(name))
	{
		$('.name-feedback').html('<i class="fa fa-exclamation-circle"></i> Only characters are allowed');
		error=true;
	}
	if(!email)
	{
		$('.email-feedback').html('<i class="fa fa-exclamation-circle"></i> email is required');
		error=true;
	}
	else if(!/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email))
	{
		$('.email-feedback').html('<i class="fa fa-exclamation-circle"></i> Invalid email address');
		error=true;
	}

	if(!password)
	{
		$('.password-feedback').html('<i class="fa fa-exclamation-circle"></i> password is required');
		error=true;
	}
	else if(password.length < 5)
	{
		$('.password-feedback').html('<i class="fa fa-exclamation-circle"></i> Password too short.Min length is 6 ');
		error=true;
	}
	if(!cpassword)
	{
		$('.cpassword-feedback').html('<i class="fa fa-exclamation-circle"></i> Confirm password is required');
		error=true;
	}
	else if(cpassword !==password)
	{
		$('.cpassword-feedback').html('<i class="fa fa-exclamation-circle"></i> Password do not match');
		error=true;
	}
	if(!error)
	{
		var form_data=new FormData(this);
		$.ajax(
        {
            url: "php/register.php",
            method:'post',
            dataType: "text",
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('.register_spinner').show();
                $('.register_text').text(' please wait...');
                $('#registerBtn').attr('disabled',true);
            },
            success:function(callback)
            {
              $('.register_spinner').hide();
              $('.register_text').text('register');
              $('#registerBtn').attr('disabled',false);
              eval(callback);
            },
            error:function()
            {
              $('.register_spinner').hide();
              $('.register_text').text('register');
              $('#registerBtn').attr('disabled',false);
              alert('something went wrong');
            }
        });
	}
	return false;
});




/*login*/
$(document).on('submit','.login_form',function()
{
	var lemail=$('#lemail').val(),
	lpassword=$('#lpassword').val();
	error=false;
	$('.lemail-feedback').html('');
	$('.lpassword-feedback').html('');

	if(!lemail)
	{
		$('.lemail-feedback').html('<i class="fa fa-exclamation-circle"></i> email is required');
		error=true;
	}
	if(!lpassword)
	{
		$('.lpassword-feedback').html('<i class="fa fa-exclamation-circle"></i> password is required');
		error=true;
	}
	
	if(!error)
	{
		var form_data=new FormData(this);
		$.ajax(
        {
            url: "php/login.php",
            method:'post',
            dataType: "text",
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('.login_spinner').show();
                $('.login_text').text(' please wait...');
                $('#loginBtn').attr('disabled',true);
            },
            success:function(callback)
            {
              $('.login_spinner').hide();
              $('.login_text').text('login');
              $('#loginBtn').attr('disabled',false);
              eval(callback);
            },
            error:function()
            {
              $('.login_spinner').hide();
              $('.login_text').text('login');
              $('#loginBtn').attr('disabled',false);
              alert('something went wrong');
            }
        });
	}
	return false;
});





/*forgotten password*/
$(document).on('submit','.forgotten_password_form',function()
{
	var femail=$('#femail').val();
	error=false;
	$('.femail-feedback').html('');

	if(!femail)
	{
		$('.femail-feedback').html('<i class="fa fa-exclamation-circle"></i> email is required');
		error=true;
	}
	
	if(!error)
	{
		var form_data=new FormData(this);
		$.ajax(
        {
            url: "php/forgotten_password.php",
            method:'post',
            dataType: "text",
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('.reset_spinner').show();
                $('.reset_text').text(' please wait...');
                $('#frgpswBtn').attr('disabled',true);
            },
            success:function(callback)
            {
              $('.reset_spinner').hide();
              $('.reset_text').text('submit');
              $('#frgpswBtn').attr('disabled',false);
              eval(callback);
            },
            error:function()
            {
              $('.reset_spinner').hide();
              $('.reset_text').text('submit');
              $('#frgpswBtn').attr('disabled',false);
              alert('something went wrong');
            }
        });
	}
	return false;
});



/*contact_form*/
$(document).on('submit','.contact_form',function()
{
	var cname=$('#cname').val(),
	cemail=$('#cemail').val();
	csubject=$('#csubject').val();
	cmessage=$('#cmessage').val();
	error=false;
	$('.cname-feedback').html('');
	$('.cemail-feedback').html('');
	$('.csubject-feedback').html('');
	$('.cmessage-feedback').html('');

	if(!cname)
	{
		$('.cname-feedback').html('<i class="fa fa-exclamation-circle"></i> name is required');
		error=true;
	}
	else if(!/^[a-zA-Z\s]*$/.test(cname))
	{
		$('.cname-feedback').html('<i class="fa fa-exclamation-circle"></i> Only characters are allowed');
		error=true;
	}

	if(!cemail)
	{
		$('.cemail-feedback').html('<i class="fa fa-exclamation-circle"></i> email is required');
		error=true;
	}
	else if(!/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(cemail))
	{
		$('.cemail-feedback').html('<i class="fa fa-exclamation-circle"></i> Invalid email address');
		error=true;
	}

	if(!csubject)
	{
		$('.csubject-feedback').html('<i class="fa fa-exclamation-circle"></i> subject is required');
		error=true;
	}

	if(!cmessage)
	{
		$('.cmessage-feedback').html('<i class="fa fa-exclamation-circle"></i> message is required');
		error=true;
	}
	else if(cmessage.length <10)
	{
		$('.cmessage-feedback').html('<i class="fa fa-exclamation-circle"></i> message length is 10. You are at '+cmessage.length);
		error=true;
	}
	
	if(!error)
	{
		var form_data=new FormData(this);
		$.ajax(
        {
            url: "php/contact.php",
            method:'post',
            dataType: "text",
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('.contact_spinner').show();
                $('.contact_text').text(' please wait...');
                $('#contactBtn').attr('disabled',true);
            },
            success:function(callback)
            {
              $('.contact_spinner').hide();
              $('.contact_text').text('send');
              $('#contactBtn').attr('disabled',false);
              eval(callback);
            },
            error:function()
            {
              $('.contact_spinner').hide();
              $('.contact_text').text('send');
              $('#contactBtn').attr('disabled',false);
              alert('something went wrong');
            }
        });
	}
	return false;
});




/*subscribe form*/
$(document).on('submit','.subscribe_form',function()
{
	var form_data=new FormData(this);
		$.ajax(
        {
            url: "php/subscribe.php",
            method:'post',
            dataType: "text",
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('.subscribe_spinner').show();
                $('.subscribe_text').text(' please wait...');
                $('#subscribeBtn').attr('disabled',true);
            },
            success:function(callback)
            {
              $('.subscribe_spinner').hide();
              $('.subscribe_text').text('send');
              $('#subscribeBtn').attr('disabled',false);
              console.log(callback);
              eval(callback);
            },
            error:function()
            {
              $('.subscribe_spinner').hide();
              $('.subscribe_text').text('send');
              $('#subscribeBtn').attr('disabled',false);
              alert('something went wrong');
            }
        });
	return false;
});


/*change profile*/
$(document).on('submit','.change_profile_form',function()
{
	$('.phone-feedback').html('');
	var form_data=new FormData(this);
	$.ajax(
    {
        url: "php/profile.php",
        method:'post',
        dataType: "text",
        data:form_data,
        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function()
        {
            $('.profile_spinner').show();
            $('.profile_text').text(' please wait...');
            $('#profileBtn').attr('disabled',true);
        },
        success:function(callback)
        {
          $('.profile_spinner').hide();
          $('.profile_text').text('change profile');
          $('#profileBtn').attr('disabled',false);
          eval(callback);
        },
        error:function()
        {
          $('.profile_spinner').hide();
          $('.profile_text').text('change profile');
          $('#profileBtn').attr('disabled',false);
          alert('something went wrong');
        }
    });
	return false;
});


/*change password*/
$(document).on('submit','.password_form',function()
{
	var password=$('#rpassword').val(),
	cpassword=$('#rpassword2').val();
	error=false;
	$('.resetpassword-feedback').html('');
	$('.resetpassword2-feedback').html('');

	if(!password)
	{
		$('.resetpassword-feedback').html('<i class="fa fa-exclamation-circle"></i> password is required');
		error=true;
	}
	else if(password.length < 5)
	{
		$('.resetpassword-feedback').html('<i class="fa fa-exclamation-circle"></i> Password too short.Min length is 6 ');
		error=true;
	}
	if(!cpassword)
	{
		$('.resetpassword2-feedback').html('<i class="fa fa-exclamation-circle"></i> Confirm password is required');
		error=true;
	}
	else if(cpassword !==password)
	{
		$('.resetpassword2-feedback').html('<i class="fa fa-exclamation-circle"></i> Password do not match');
		error=true;
	}
	
	if(!error)
	{
		var form_data=new FormData(this);
    form_data.append('email',localStorage.userid);
		$.ajax(
        {
            url: "php/changepassword.php",
            method:'post',
            dataType: "text",
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
                $('.password_spinner').show();
                $('.password_text').text(' please wait...');
                $('#passwordBtn').attr('disabled',true);
            },
            success:function(callback)
            {
              $('.password_spinner').hide();
              $('.password_text').text('change password');
              $('#passwordBtn').attr('disabled',false);
              eval(callback);
            },
            error:function()
            {
              $('.password_spinner').hide();
              $('.password_text').text('change password');
              $('#passwordBtn').attr('disabled',false);
              alert('something went wrong');
            }
        });
	}
	return false;
});



/*testimonials*/
$(document).on('submit','.comment_form',function()
{
	
	var form_data=new FormData(this);
	$.ajax(
    {
        url: "php/comment.php",
        method:'post',
        dataType: "text",
        data:form_data,
        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function()
        {
            $('.comment_spinner').show();
            $('.comment_text').text(' please wait...');
            $('#commentBtn').attr('disabled',true);
        },
        success:function(callback)
        {
          $('.comment_spinner').hide();
          $('.password_text').text('send');
          $('#commentBtn').attr('disabled',false);
          eval(callback);
        },
        error:function()
        {
          $('.comment_spinner').hide();
          $('.comment_text').text('send');
          $('#commentBtn').attr('disabled',false);
          alert('something went wrong');
        }
    });
	return false;
});
