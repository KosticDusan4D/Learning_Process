const para = document.querySelector('p'); //uzima prvi p tag i ignorise sve ostale p tagove

console.log(para);

const paraClass = document.querySelector('.error'); //uzima prvi po klasi i smesta u promenljivu

console.log(paraClass);

const paraClass2 = document.querySelector('div.error'); //uzima prvi div sa klasom error, u ovom slucaju je jedinstveno pa moze tako da se odredi

console.log(paraClass2);

// Uzimanje vise njih sa querySelectorAll

const paras = document.querySelectorAll('p');

paras.forEach(paragraf => {
    console.log(paragraf);
})

console.log(paras[1]); //nije array ali moze da se odredjuje kao i sto se radi sa nizovima

const errors = document.querySelectorAll('.error');

console.log(errors);