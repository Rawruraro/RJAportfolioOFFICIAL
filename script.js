function validateLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value; 
    var errorMessage = document.getElementById('errorMessage');
    console.log("Username:", username);
    localStorage.setItem('username', username);

    // Users
    var validUsers = [
        { username: 'Ratman', password: 'SavingRyansPrivates' },
        { username: 'Rawru', password: 'RAWR1234' },
        { username: 'Impartial', password: 'IMPARITALYOURB0Y' }
    ];

    var validUser = validUsers.find(user => user.username === username && user.password === password); 

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

    if (storedUsername === 'Ratman') {
        content = '<a href="https://29508913-8096-4ddd-813b-d6b9165a0165-00-7i2vgpaoho8b.picard.repl.co/">Andrei Resume</a>';
    } else if (storedUsername === 'Rawru') {
        content = '<a href="https://035e79d6-fc53-4ba1-9dee-9bdf6200d4dd-00-imb2m36ld53q.riker.replit.dev/">Rolando Resume</a>';
    } else if (storedUsername === 'Impartial') {
        content = '<a href="https://a4b22d59-9a88-44d7-9f02-0e8e28893961-00-192d75gwpyto0.janeway.replit.dev/">Josh Resume</a>';
    }

    el.insertAdjacentHTML('afterbegin', content);
});