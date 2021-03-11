let myAge = 25; //
let year = 2019;

console.log(myAge, year);

myAge = 30;
console.log(myAge);

const points = 100;
console.log(points);

var score = 75;
console.log(score);

//strings
console.log('hello world');

let email = 'kosta4d@hotmail.com';
console.log(email);

//string concatenation - KONKATENACIJA KAO I U PHP SAMO SA + UMESTO .
let firstname = 'Dusan';
let lastname = 'Kostic';

let fullname = firstname + ' ' + lastname;
console.log(fullname);

// getting characters
console.log(fullname[2]); // na ovaj nacin vadim koje slove mi treba iz reci

// string length
console.log(fullname.length); // space se racuna takodje jer je napisan u konkatenaciji pre, a ovo je slicno kao i strlen u php-u

// string methods
console.log(fullname.toUpperCase());
let result = fullname.toLowerCase(); // moze da se stavi i u promenljivu
console.log(result, fullname); // metode ne menjaju vrednost trajno vec samo kada se primeni

let index = email.indexOf('@'); //radi slicno kao strpos u php, trazi gde se nalazi odredjeni karakter
console.log(index);

// common string methods

//email je vec definisan ranije

let result = email.lastIndexOf('n');