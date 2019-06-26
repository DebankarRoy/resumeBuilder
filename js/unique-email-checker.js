$('document').ready(function(){
  $('#email').on('blur', function(){
  var email = $('#email').val(); 

  $.ajax({
      url: 'email-check.php',
      type: 'get',
      data: {
        'email' : email,
      },
      success: function(response){
        if (response == 'taken' ) {
          alert("You already have an account on this email");
        }
      }
  });
 });
});