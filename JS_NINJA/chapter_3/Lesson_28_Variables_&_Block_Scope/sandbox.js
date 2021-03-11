// variables & block scope
const age = 30;


// UNUTAR BLOKA MOZE DA SE PONOVO DEFINISE PROMENLJIVA, ALI NE MOZE DA SE PRIMENI IZVAN AKO SE UNUTAR DEFINISE, SLICNO KAO FUNKCIJA U PHP
// var moze da se koristi i unutar i izvan bloka, tj vidi ga svuda
if(true){
    const age = 40;
    const name = 'shaun';
    console.log('inside 1st code block: ', age, name);

    if(true){
        const age = 50;
        console.log('inside 2nd code block: ', age);
        var test = 'hello';
    }
}

console.log('outside code block:', age, name, test);