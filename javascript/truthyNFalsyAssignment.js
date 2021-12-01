let username = '';
let defaultName;
 
if (username) {
  defaultName = username;
} else {
  defaultName = 'Stranger';
}
 
console.log(defaultName); // Prints: Stranger


// using short-circuit evaluation method
let username = '';
let defaultName = username || 'Stranger';
 
console.log(defaultName); // Prints: Stranger
// Because || or statements check the left-hand condition first, the variable defaultName will be assigned the actual value of username if it is truthy, and it will be assigned the value of 'Stranger' if username is falsy.

//exercise

let tool = 'marker';
let writingUtensil = tool || 'pen'

console.log(`The ${writingUtensil} is mightier than the sword.`); // Prints: The marker is mightier than the sword.

let tool = '';
let writingUtensil = tool || 'pen'

console.log(`The ${writingUtensil} is mightier than the sword.`); // Prints: The pen is mightier than the sword.