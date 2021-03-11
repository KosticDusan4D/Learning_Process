// break and continue

const scores = [50, 25, 0, 30, 100, 20, 10];

for(let i = 0; i < scores.length; i++){

    if(scores[i] === 0){
        console.log('Bad luck, go on!');
        continue;
    }

    console.log('your score: ', scores[i]);

    if(scores[i] === 100){
        console.log('Congrats you got the top score!');
        break;
    }
}