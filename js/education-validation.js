$(document).ready(function() {
  $('form[id="graduation_details"]').validate({
    rules: {
      degree_completion_status: 'required',
      college: 'required',
      start_year: 'required',
      end_year: 'required',
      degree: 'required'
    },
    messages: {
      degree_completion_status: 'This field is required',
      college: 'This field is required',
      start_year: 'This field is required',
      end_year: 'This field is required',
      degree: 'This field is required'
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
}