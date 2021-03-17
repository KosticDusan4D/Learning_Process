// const content = document.querySelector('p');

// console.log(content.classList);
// content.classList.add('error');
// content.classList.remove('error');
// content.classList.add('success');


// Zadatak: Naci sve paragrafe koji sadrze rec error ili success, a onda odgovarajucu klasu svakom paragrafu dodati

    // MOJE RESENJE
const content = document.querySelectorAll('p');
content.forEach( tekst => {
    if(tekst.innerText.indexOf('error') != -1){
        tekst.classList.add('error');
    }
    else if(tekst.innerText.indexOf('success') != -1){
        tekst.classList.add('success');
    }
});

    // NJEGOVO RESENJE
// const paras = document.querySelectorAll('p');

// paras.forEach(p => {
//     if(p.textContent.includes('error')){
//         p.classList.add('error');
//     }
//     if(p.innerText.includes('success')){
//         p.classList.add('success');
//     }
// })


// textContent je mozda malo ispravnije koristiti jer umesto innerText on prikazuje sve, pa i neke skrivene reci, dok innerText prikazuje samo one koje su vidljive

// Toggle class

const title = document.querySelector('.title');

title.classList.toggle('test');
title.classList.toggle('test'); // Jednom pokrenuto dodaje klasu, a drugi put je sklanja
