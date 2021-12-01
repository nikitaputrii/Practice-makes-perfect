//The first two years of a dog’s life count as 10.5 dog years each.
//Each year following equates to 4 dog years.

const myAge = 18 //my age?
let earlyYears = 2
earlyYears *= 10.5 //this is the first 2 years
let laterYears = myAge - 2 //the 2 is from 2 years before
laterYears *= 4 //calculate the dog years by our later years
console.log(earlyYears, laterYears)

let myAgeInDogYears = earlyYears + laterYears
let myName = 'Nii'.toLowerCase()

console.log(`My name is ${myName}. I am ${myAge} years old in human years which is ${myAgeInDogYears} years old in dog years`)