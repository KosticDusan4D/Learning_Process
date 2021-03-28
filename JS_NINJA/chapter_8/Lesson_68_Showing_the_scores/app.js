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
    result.querySelector('span').textContent = `${score}%`;
    result.classList.remove('d-none');
});

