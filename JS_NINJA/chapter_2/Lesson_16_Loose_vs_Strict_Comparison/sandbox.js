let age = 25;

// loose comaprison (different types CAN still be equal)

// console.log(age == 25); //opet isto kao u php sa dva ili 3 znaka jednako
// console.log(age == '25');
// console.log(age != 25);
// console.log(age != '25');

// strict comparison (different types CANNOT be equal)

console.log(age === 25);
console.log(age === '25'); // false, YUP that's it
console.log(age !== 25);
console.log(age !== '25');