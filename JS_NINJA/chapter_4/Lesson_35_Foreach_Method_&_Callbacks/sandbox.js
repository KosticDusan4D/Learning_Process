// callbacks & foreach

// const myFunc = (callbackFunc) => {
//     //do something
//     let value = 50;
//     callbackFunc(value);
// };

// myFunc(value => {
//     // do something
//     console.log(value);
// });


let people = ['mario', 'luigi', 'ryu', 'shaun', 'chun-li'];

const logPerson = (person, index) => {
    console.log(`${index} - hello ${person}`);
}

people.forEach(logPerson);

//ako u callback funcion kad pozovemo method forEach prosledimo neki parametar onda se to ponasa identicno kao key u foreach-u u php

// people.forEach((person, index) =>{
//     console.log(index, person);
// });