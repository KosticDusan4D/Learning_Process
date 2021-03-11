// function expression
const speak = function(){
    console.log('good day!');
};

// function expression NE MOZE da se definise ispod pozivanja, dok declarations moze bilo gde

greet();
speak();

// function declaration
function greet(){
    console.log('hello there');
}