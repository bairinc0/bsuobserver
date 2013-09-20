$(document).ready(function(){
  $('#validateForm').validate({
    rules: {
      name: {
        required: true
      },
      side: {
        required: true
      },
      presence: {
         required: true
      }
    },
    success: function(label) {
      label.text('OK!').addClass('valid');
    }
  });
});

