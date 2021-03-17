// Math object

console.log(Math);
console.log(Math.PI);
console.log(Math.E);

const area = 7.7;

console.log(Math.round(area));
console.log(Math.floor(area));
console.log(Math.ceil(area));
console.log(Math.trunc(area));

//random numbers

const random = Math.random();

console.log(random); // ovo da je random samo izmedju 0 i 1
console.log(Math.round(random * 100)); //ovako ide ceo broj a * N oznacava od 0 do N