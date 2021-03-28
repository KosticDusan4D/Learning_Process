const correctAnswers = ['B', 'B', 'B', 'B'];
const result = document.querySelector('.result');
const form = document.querySelector('.quiz-form');

form.addEventListener('submit', e => {
    e.preventDefault(); // Sprecava refresh akciju kad se klikne na submit

    let score = 0;
    const userAnswers = [form.q1.value, form.q2.value, form.q3.value, form.q4.value];

    // chech answers
    userAnswers.forEach((answer, index) => {
        if(answer === correctAnswers[index]){
            score += 25; // 25 je zbog procenata
        }
    });

    // showing the result
    scrollTo(0,0); // isto sto i window.scrollTo i vraca na pocetak strane
    result.querySelector('span').textContent = `${score}%`;
    result.classList.remove('d-none');
});

//window object (global object)

// console.log('hello');
// window.console.log('hello');

// console.log(document.querySelector('form'));
// console.log(window.document.querySelector('form'));

// alert('hello');
// window.alert('hello');

// setTimeout(() => {
//     alert('hello');
// }, 3000); // OVAKO SE DOBIJA ODLOZENA AKCIJA, 3000 PREDSTAVLJA 3 SEKUNDE (U milisekundama ide)

