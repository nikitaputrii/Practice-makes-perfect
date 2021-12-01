const kelvin = 293 // to returns the constants of kelvin
var celsius = kelvin - 273 // convert kelvin to celsius
let farenheit = celsius * (9/5) + 32 // convert celsius to farenheit
farenheit = Math.floor(farenheit) // to remove the decimal
console.log(`The temperature is ${farenheit} degrees Fahrenheit`)

//plus plus

//convert to newton
let newton = celsius * (33/100)

//round down
newton = Math.floor(newton)

console.log(`The mass is ${newton} Newton`)