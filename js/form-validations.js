$(function() {
  $('#register-form').validate({
    rules: {

      name: 'required', 
      email: {
        email: true,
        required: true
      },
      password: 'required',
      confirmpassword: {
        equalTo: "#password1"
      }
    },
    messages: {
                confirmpassword: "Confirm Password isn't same"
            }  
  });
})

$(function() {
  $('#login-form').validate({
    rules: {
      email: {
        email: true,
        required: true
      },
      password: 'required'
    } 
  });
})

$(function() {
  $('#personal_details').validate({
    rules: {

      name: 'required', 
      phone_no: 'required',
      email: {
        email: true,
        required: true
      },
      current_city:'required'
    }

  });
})

$(function() {
  $('#graduation_details').validate({
    rules: {
      degree_completion_status_grad: 'required', 
      college: 'required', 
      start_year_clg: 'required',
      end_year_clg: 'required',
      degree: 'required'
    }
  });
})

$(function() {
  $('#senior-secondary_details').validate({
    rules: {

      degree_completion_status_ss: 'required', 
      phone_no: 'required', 
      current_city:'required'
    }

  });
})