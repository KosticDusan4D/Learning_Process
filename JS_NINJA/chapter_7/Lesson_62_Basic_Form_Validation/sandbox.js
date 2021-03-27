const form = document.querySelector('.signup-form');
const feedback = document.querySelector('.feedback');
// const username = document.querySelector('#username');

form.addEventListener('submit', e => {
    e.preventDefault();
    
    // validation

    const username = form.username.value;
    const usernamePattern = /^[a-zA-Z0-9]{6,12}$/;

    if(usernamePattern.test(username)){
        // feedback good info
        feedback.textContent = 'That username is valid!';
    }
    else{
        // feedback help info
        feedback.textContent = 'Username must contain letters only & be between 6 and 12 characters long';
    }
});

