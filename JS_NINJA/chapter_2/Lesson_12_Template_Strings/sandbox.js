//template strings
const title = 'Best reads of 2019';
const author = 'Mario';
let likes = 30;

// concatenation way
let result = 'The blog called ' + title + ' by ' + author + ' has ' + likes + ' likes';
console.log(result);

likes = 10; //mogu i da se dodeljuju nove vrednosti kao u php, ali ne sme onda ponovo let jer je to definise pa ne mozes definisati 2 puta isto ime promenljive... Takodje ako je const ne moze se menjati, mora da bude let (var)

// template string way - it is created using BACKTICKS
result = `The blog called ${title} by ${author} has ${likes} likes`;
console.log(result);


// creating html templates
let html = `
    <h2>${title}</h2>
    <p>By ${author}</p>
    <span>This blog has ${likes} likes</span>
`;

console.log(html);