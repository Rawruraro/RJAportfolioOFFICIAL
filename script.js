var timeout;

function startTimer() {
    timeout = setTimeout(function(){
        alert("You are being logged out for inactivity."); // alert user they are being logged out
        window.location.href = "index.php";
    }, 60000);
}

function resetTimer() {
    clearTimeout(timeout); // clear the previous timeout
    startTimer(); // start the timer again
}

// Start the timer when the page loads
startTimer();

// reset the timer when there's mouse movement
document.addEventListener("mousemove", resetTimer);

// grabs username from sign in page
function storeUsername(){
    var username = document.getElementById('username').value;
    console.log("Username:", username); //store username in console
    localStorage.setItem('username', username); //store username in local storage, allowing it to be remembered
}

document.addEventListener('DOMContentLoaded', function () {
    var storedUsername = localStorage.getItem('username');
    var el = document.getElementById('content');
    var content;

    if (storedUsername === 'Ratman') {
        content = '<a href="../RJAportfolioOFFICIAL/RESUME-Andrei-Yupano/index.html">Andrei Resume</a>';
    } else if (storedUsername === 'Rawru') {
        content = '<p><a href="../RJAportfolioOFFICIAL/Rolando-Resume/index.html">Rolando Resume</a></p>';
    } else if (storedUsername === 'ImpartialThePro') {
        content = '<p><a href="../RJAportfolioOFFICIAL/JoshsResume/index.html">Josh Resume</a></p>';
    } else {
        content = ''; // if username doesn't match, nothing will be there
    }

    el.insertAdjacentHTML('afterbegin', content); // replace the content of the div
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