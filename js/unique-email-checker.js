$('document').ready(function(){
  $('#email').on('blur', function(){
  var email = $('#email').val(); 
  console.log(email);
  $.ajax({
      url: 'email-check.php',
      type: 'get',
      data: {
        'email' : email,
      },
      success: function(response){
        if (response == 'taken' ) {
          $('.submit-btn').hide();
          alert("You already have an account on this email");
        }
        else{
          $('.submit-btn').show();
        }
      }
  });
 });
});