const ul = document.querySelector('ul');
// ul.remove();

const button = document.querySelector('button');

button.addEventListener('click', () => {
    // ul.innerHTML += '<li>Something new</li>';
    const li = document.createElement('li');
    li.textContent = 'Something new to do';
    // ul.append(li);  NA KRAJ STAVLJA
    ul.prepend(li); // NA POCETAK STAVLJA
});

const items = document.querySelectorAll('li');

items.forEach(item => {
    item.addEventListener('click', e => {
        
        // e.target.style.textDecoration = 'line-through';
        e.target.remove();

    });
});