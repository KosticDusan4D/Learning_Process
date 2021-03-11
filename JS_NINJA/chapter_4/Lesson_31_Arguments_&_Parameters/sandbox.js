// arguments & parameters


// moze da se doda default vrednost i argumentima funkcije
const speak = function(name = 'luigi', time = 'night'){
    console.log(`good ${time} ${name}`);
};

speak('shaun', 'morning');
