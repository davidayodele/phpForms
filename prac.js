/*
var: global
let: local
const: constant
Special types: number (int/float), undefined, Symbol

1) Initially, ECMAScript values were typed, with objects having type 0. 
NULL had no type and was represented as the NULL pointer (0x00), 
this caused NULL to have type 0, which is why it is now typed as object 

2) JavaScript numbers are always 64-bit floating point as follows:

| Value (aka Fraction/Mantissa) | Exponent          | Sign       |
| 52 bits (0 - 51)              | 11 bits (52 - 62) | 1 bit (63) |

Integers (numbers without a period or exponent notation) are accurate up to 15 digits

The maximum number of decimals is 17, but floating point arithmetic is not always 100% accurate
ex: let x = 0.2 + 0.1;  // x will be 0.30000000000000004

ex: let y = 100 / "Apple"; // = NaN (Not a Number)
*/

console.log('// ======= Types =========\n');
let x = [];
x[0] = null;
x[1] = undefined;
x[3] = "David";
x[4] = 98.7;
x[5] = 3e8;
x[6] = true;
x[7] = 3 / 0; 
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

// Properties vs methods:
console.log(`Property: str1.length = ${str1.length}\n`);
console.log(`Method: str1.substring(0, 5) = ${str1.substring(0, 5)}\n`);

// Splitting
let str2 = "David, 96.8, 72, 36, 160";
let str2_split = str2.split(', ');
console.log(`str2 split = ${str2_split}, or`);
console.log(typeof str2_split);
console.log(str2_split); 

console.log('\n// ======= End Strings =========\n');

console.log('\n// ======= Arrays =========\n');
/*
Key notes: 
1) In JS, arrays are dynamic by default (huge!)
2)    
*/
const n = new Array(1, 2, 3, 4, 5, 6, 7, 8);
const m = [9, 'A', 11.0, true, n[0], 3e-2, n[5].toString(16), parseInt('F', 16)];
console.log(`Array n = ${n} \n or`);
console.log(n);
console.log(`\nArray m = ${m} \n or`);
console.log(m);

// Appending
m.push(Math.PI)
m[m.length] = Math.sqrt(2);
console.log(`\nArray m after appends = ${m} \n or`);
console.log(m);
// Deleting
n.pop();
console.log(`\nArray n after n.pop() = ${n} \n or`);
console.log(n);
n.pop(2);
console.log(`\nArray n after n.pop(2) = ${n} \n or`);
console.log(n);
// Prepending
n.unshift(0);
console.log(`\nArray n after n.unshift(0) = ${n} \n or`);
console.log(n);
// Checking/Searching
console.log(`\nArray.isArray(m) = ${Array.isArray(m)} \n or`);
console.log(Array.isArray(m));
console.log(`\nm.indexOf('A') = ${m.indexOf('A')} \n or`);
console.log(m.indexOf('A'));

console.log('\n// ======= End Arrays =========\n');

console.log('\n// ======= Objects =========\n');

let person = {
    fName: "David",
    lName: "Robinson",
    height: 72,
    hobbies: ['basketball', 'wrestling', 'football'],
    address: {
        street: "546 Chesterfield Road",
        city: "Pittsburgh",
        state: "Pennsylvania"
    }
}

console.log(`Person object = ${person} \nor`);
console.log(person);
console.log(`person.fName = ${person.fName}\nperson.address.city = ${person.address.city}\nperson.hobbies.indexOf("football") = ${person.hobbies.indexOf("football")}\nperson.hobbies[2] = ${person.hobbies[2]}\n`)

// Object Destructuring
let {fName, address: {city}, hobbies} = person;
console.log(`\Destructured object vars: \nfName = ${fName} \ncity = ${city} \nhobbies = ${hobbies}`);

// Object appending 
person.dob = new Date(1981, 01, 01, 22, 59, 59); // always year, month, day, hour, min, sec...
console.log(`person with appended dob = new Date(1981, 01, 01, 22, 59, 59) = ${person} or:`);
console.log(person);

// Object Arrays
let users = [
    {
        id: 1,
        name: "Alice",
        dob: new Date(1990, 02, 28),
        admin: false
    }, 

    {
        id: 2,
        name: "Bob",
        dob: new Date(1973, 06, 11),
        admin: false
    },

    {
        id: 3,
        name: "Cindy",
        dob: new Date(1998, 04, 05),
        admin: true
    },
];

console.log(`Object array users = ${users} \nor`);
console.log(users);
console.log(`User 3's name & dob = ${users[2].name} & ${users[2].dob}`);

// Object arrays as JSON
let usersJSON = JSON.stringify(users);
console.log(`\nJSON.stringify(users) = ${usersJSON} \nor`);
console.log(usersJSON);

console.log('\n// ======= End Objects =========\n');

console.log('\n// ======= Loops =========\n');

console.log('\n// ======= End Loops =========\n');



