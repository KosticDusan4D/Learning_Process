const ul = document.querySelector('ul');
const button = document.querySelector('button');

button.addEventListener('click', () => {
    const li = document.createElement('li');
    li.textContent = 'Something new to do';
    ul.prepend(li); // NA POCETAK STAVLJA
});

// const items = document.querySelectorAll('li');

// items.forEach(item => {
//     item.addEventListener('click', e => {
//         console.log('event in <li>');
//         e.stopPropagation(); // JAKO BITNO
//         e.target.remove();
//     });
// });

ul.addEventListener('click', e=> {
    // console.log('event in <ul>');
    if(e.target.tagName === 'LI'){
        e.target.remove();
    }
});
