/*
var: global
let: local
const: constant
Special types: number (int/float), undefined, Symbol

Initially, ECMAScript values were typed, with objects having type 0. 
NULL had no type and was represented as the NULL pointer (0x00), 
this caused NULL to have type 0, which is why it is now typed as object 
*/

console.log('// ======= Types =========\n');
let x = [];
x[0] = null;
x[1] = undefined;
x[3] = "David";
x[4] = 98.7;
x[5] = 3e8;
x[6] = true;
let k;

for (k = 0; k < 7; k++) {
    console.log(typeof x[k]);
}

console.log('// ======= End Types =========\n');


console.log('// ======= Strings =========\n');
let name = 'David';
let temp = 96.8;
let toggle = true;

// Standard string construction:
console.log('Name: ' + name + '\nTemp: ' + temp + String.fromCharCode(176) + 'F');

// "Template" string construction (ES6+):
let str1 = (`Name: ${name}\nTemp: ${temp}${String.fromCharCode(176)}F`);
console.log(str1);

console.log('// ======= End Strings =========\n');