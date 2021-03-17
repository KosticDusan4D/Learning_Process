const article = document.querySelector('article');

// console.log(article.children);

// console.log(Array.from(article.children));

// Pronalazenje i iteracija kroz decje elemente

// Array.from(article.children).forEach(child => {
//     child.classList.add('article-element');
// });

// Pronalazenje roditeljskog elementa

const title = document.querySelector('h2');

console.log(title.parentElement);
console.log(title.parentElement.parentElement);
console.log(title.nextElementSibling);
console.log(title.previousElementSibling);

// chaining
console.log(title.nextElementSibling.parentElement.children);