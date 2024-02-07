function validateLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value; 
    var errorMessage = document.getElementById('errorMessage'); //will display text when username or password is wrong
    console.log("Username:", username); //store username in console
    localStorage.setItem('username', username); //store username in local storage, allowing it to be remembered as a preffered username

    // Users
    var validUsers = [ //all valid usernames and passwords
        { username: 'Ratman', password: 'SavingRyansPrivates' },
        { username: 'Rawru', password: 'RAWR1234' },
        { username: 'Impartial', password: 'IMPARITALYOURB0Y' }
    ];

    var validUser = validUsers.find(user => user.username === username && user.password === password); //checks if username and password are valid

    if (validUser) {
        // On successful login
        errorMessage.innerHTML = 'Login Success! Audio Warning, sound will play when you press OK';
        alert('Login successful! Login Success! Audio Warning, sound will play when you press OK');
        window.location.href = 'Frontpage.html'; // Redirect to the home page
    } else {
        // On fail
        errorMessage.innerHTML = 'Invalid username or password.';
    }
}
// grabs username from sign in page
document.addEventListener('DOMContentLoaded', function () {
    var storedUsername = localStorage.getItem('username');
    var el = document.getElementById('content');
    var content;

    if (storedUsername === 'Ratman') { //changes the link in "content" depending on the username
        content = '<a href="https://29508913-8096-4ddd-813b-d6b9165a0165-00-7i2vgpaoho8b.picard.repl.co/">Andrei Resume</a>';
    } else if (storedUsername === 'Rawru') {
        content = '<a href="https://rawruraro.github.io/Rolando-Resume/">Rolando Resume</a>';
    } else if (storedUsername === 'Impartial') {
        content = '<a href="https://a4b22d59-9a88-44d7-9f02-0e8e28893961-00-192d75gwpyto0.janeway.replit.dev/">Josh Resume</a>';
    }

    el.insertAdjacentHTML('afterbegin', content); //places the new link in "content"
});

function signUp() {
  //grab content of the ids in signup pag after clicking Sign Up button
  var name = document.getElementById('name').value;
  var pass = document.getElementById('pass').value;
  var confirmPass = document.getElementById('confirmPass').value;
  var Yrlvl = document.getElementById('Yrlvl').value;
  var Favclr = document.getElementById('Favclr').value;
  var Favfood = document.getElementById('Favfood').value;
  var signupMessage = document.getElementById('signupMessage');

  if (confirmPass == pass){ //replaces and shows success message when password matches confirmed password
    signupMessage.innerHTML = 'Sign Up Success!';
  
    var signedName = document.getElementById('signedName');
    signedName.innerHTML = 'Name: ' + name;
  
    var signedPass = document.getElementById('signedPass');
    signedPass.innerHTML = 'Password: ' + pass;
  
    var signedYrlvl = document.getElementById('signedYrlvl');
    signedYrlvl.innerHTML = 'Year Level: ' + Yrlvl;
  
    var signedFavclr = document.getElementById('signedFavclr');
    signedFavclr.innerHTML = 'Favorite Color: ' + Favclr;
  
    var signedFavfood = document.getElementById('signedFavfood');
    signedFavfood.innerHTML = 'Favorite Food: ' + Favfood;
  }
  else { //when pass does not match confirmed pass, shows error message
    signupMessage.innerHTML = 'Password does not match!';
  }
}
