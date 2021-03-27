const form = document.querySelector('.signup-form');
// const username = document.querySelector('#username');

form.addEventListener('submit', e => {
    e.preventDefault();
    // console.log(username.value);
    console.log(form.username.value); //form.username trazi odmah ID/name u ovom slucaju username, ne mora da se kuca ponovo querySelector metod
});

// testing RegEx
const username = 'shaun';