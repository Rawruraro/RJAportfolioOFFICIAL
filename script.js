function validateLogin() {
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var errorMessage = document.getElementById('errorMessage');

    //Users
    var validUsers = [
        { username: 'Ratman', password: 'SavingRyansPrivates' },
        { username: 'Rawru', password: 'RAWR1234' },
        { username: 'Impartial', password: 'IMPARITALYOURB0Y' }
    ];

    var validUser = validUsers.find(user => username === username && password === password);

    if (validUser) {
        // on successful login
        errorMessage.innerHTML = 'Login Success!';
        alert('Login successful!');
        window.location.href = 'Frontpage.html'; // Redirect to the home page
    } 
    else {
        // on fail
        errorMessage.innerHTML = 'Invalid username or password.';
    }
} 
var username = document.getElementById('username');
var content;

  if (username === 'Ratman') {
   content = 'Ratman is a young man who has been living in the shadows of his parents for the past'
  } 
  else if (username === 'Rawru'){
    $('body').append('<h1>superman</h1>')

  }
  else if (username === 'Impartial'){
    content = 'imparital is a young man who has been living in the shadows of his parents for the past'
  }