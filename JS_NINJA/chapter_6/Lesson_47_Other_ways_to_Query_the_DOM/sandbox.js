// get an element by ID
const title = document.getElementById('page-title');
console.log(title);

// get elements by their class name
const errors = document.getElementsByClassName('error');
console.log(errors);
console.log(errors[0]);
// errors.forEach(error => {
//     console.log(error);
// }); SA FOREACH NE MOZE HTML COLLECTION DA SE ISCITA


// get elements by their tag name
const paras = document.getElementsByTagName('p');
console.log(paras);
console.log(paras[1]);