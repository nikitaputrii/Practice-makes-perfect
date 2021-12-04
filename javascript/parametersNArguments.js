function calculatedArea(width, height) {
  console.log(width * height);
}
calculatedArea(10, 6);

or

const rectWidth = 10;
const rectHeight = 6;
calculatedArea(rectWidth, rectHeight)

// (width, height) === parameters
// (10, 6) === arguments as values === values that are inside the parenthesis of parameters
// (rectWidth, rectHeight) === arguments as variables
// arguments consists of VALUES N VARIABLES


//exercise

function sayThanks(name) {
  console.log('Thank you for your purchase '+ name + '! We appreciate your business.');
}
sayThanks('Cole')