let isNightTime = true;

// the basic one
if (isNightTime) {
  console.log('Turn on the lights!');
} else {
  console.log('Turn off the lights!');
}

// the ternary one
isNightTime ? console.log('Turn on the lights!') : console.log('Turn off the lights!');
// true expression first, then false

// exercise
let isLocked = false;

isLocked ? console.log('You will need a key to open the door.') : console.log('You will not need a key to open the door.')


let isCorrect = true;

isCorrect ? console.log('Correct!') : console.log('Incorrect!')


let favoritePhrase = 'Love That!';

favoritePhrase === 'Love That!' ? console.log('I love that!') : console.log("I don't love that!")