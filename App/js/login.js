$(document).ready(() => {
  $('#submit').click(() => {
    login();
  });

  $(document).on('keypress',function(e) {
    // Login when enter is pressed
    if(e.which == 13) {
      login();
    }
  });

  function login() {
    // Validation checks should go here

    const email = $('#email').val();
    const password = $('#password').val();

    $.ajax({
      type: 'post',
      url: 'php/login.php',
      data: {
        email: email,
        password: password
      },
      success: () => {
        // Redirect to log in page
        console.log('Logged in');
        window.location = 'index.php';
      },
      statusCode: {
        // Wrong email or password
        401: () => {
        
          console.log('Wrong email or password');
        }
      }
    });
  }
});
