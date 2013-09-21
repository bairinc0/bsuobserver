$(document).ready(function(){
  $('#validateForm').validate({
    rules: {
      name: {
        required: true
      },
      question: {
        required: true
      }
    },
    success: function(label) {
      label.text('OK!').addClass('valid');
    }
  });
});

