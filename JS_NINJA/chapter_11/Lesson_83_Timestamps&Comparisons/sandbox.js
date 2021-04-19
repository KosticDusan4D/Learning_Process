// timestamps

const before = new Date('April 1 2021 18:00:00');
const now = new Date();

//console.log(now.getTime(), before.getTime());

const diff = now.getTime() - before.getTime();
console.log(diff);

const mins = Math.round(diff / 1000 / 60);
const hours = Math.round(mins / 60);
const days = Math.round(hours / 24);

console.log(mins, hours, days);

console.log(`The blog was written ${days} days ago`);

// converting timestamps into date objects
const timestamp = 1675938474990;
console.log(new Date(timestamp));