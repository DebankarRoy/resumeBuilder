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