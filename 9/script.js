+ function($) {
    $('.palceholder').click(function() {
      $(this).siblings('input').focus();
    });
  
    $('.form-control').focus(function() {
      $(this).parent().addClass("focused");
    });
  
    $('.form-control').blur(function() {
      var $this = $(this);
      if ($this.val().length == 0)
        $(this).parent().removeClass("focused");
    });
    $('.form-control').blur();
  
    // validetion
    $.validator.setDefaults({
      errorElement: 'span',
      errorClass: 'validate-tooltip'
    });
  
    $("#registrationForm").validate({
        rules: {
            name: {
                required : true
            },
            email: {
                required : true,
                email : true
            },
            password: {
                required : true,
                minlength : 8
            },
            confirm_password : {
                required : true,
                minlength : 8

            }
        }
    });
  
  }(jQuery);