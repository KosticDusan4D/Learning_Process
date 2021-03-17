// primitive values - Ovde se menja samo ona promenljiva koju smo zapravo promenili, kao sto je i u php-u kada se ponovo definise iza druge.

let scoreOne = 50;
let scoreTwo = scoreOne;

console.log(`scoreOne: ${scoreOne}, scoreTwo: ${scoreTwo}`);

scoreOne = 100;

console.log(`scoreOne: ${scoreOne}, scoreTwo: ${scoreTwo}`);

//reference values - Ovde se menjaju oba objekta jer su kopija jedan drugog, a kako se linijom userOne.name menja ime u samom objektu onda i drugi povlaci istu promenu pa menja oba

const userOne = { name: 'ryu', age: 30};
const userTwo = userOne;

console.log(userOne, userTwo);

userOne.name = 'chun-li';
console.log(userOne, userTwo);