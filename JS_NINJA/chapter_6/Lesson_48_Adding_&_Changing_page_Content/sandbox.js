const para = document.querySelector('p');

// console.log(para.innerText);
// para.innerText = 'ninjas are awesome!';

const paras = document.querySelectorAll('p');

// paras.forEach(para => {
//     para.innerText += ' Bla bla';
// });

const content = document.querySelector('.content');

// console.log(content.innerHTML);
// content.innerHTML += '<h2> This is the new h2</h2>'
 // += dodaje, a sa = samo promeni bez vidljivosti starog

const people = ['mario', 'luigi', 'yoshi'];

people.forEach(person => {
    content.innerHTML += `<p> ${person}</p>`;
});

