const form = document.querySelector('.signup-form');
const feedback = document.querySelector('.feedback');
const usernamePattern = /^[a-zA-Z0-9]{6,12}$/;
// const username = document.querySelector('#username');

form.addEventListener('submit', e => {
    e.preventDefault();
    
    // validation

    const username = form.username.value;

    if(usernamePattern.test(username)){
        // feedback good info
        feedback.textContent = 'That username is valid!';
    }
    else{
        // feedback help info
        feedback.textContent = 'Username must contain letters only & be between 6 and 12 characters long';
    }
});

// live feedback
form.username.addEventListener('keyup', e => {
    //console.log(e.target.value, form.username.value);
    if(usernamePattern.test(e.target.value)){
        form.username.setAttribute('class', 'success');
    }
    else{
        form.username.setAttribute('class', 'error');
    }
});

