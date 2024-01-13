//
// Variables
//

const deck = document.querySelector('.deck');
const deckSize = document.querySelectorAll('.card').length;
const randomizeIconWrap = document.querySelector('.icon-wrap--randomize');
const randomizeIcon = document.querySelector('.icon--randomize');

// Check if element exists
const elementExists = function(element) {
  if ( typeof(element) != 'undefined' && element != null ) {
    return true;
  }
  return false;
}


//
// Event Listeners
//

document.addEventListener('click', (e) => {

  // Randomize button
  if (elementExists(randomizeIconWrap) && elementExists(randomizeIcon) && elementExists(deck)) {
    
    // Add animation classes
    if (e.target.classList.contains('btn--randomize')) {
      randomizeIconWrap.classList.add('bounce');
      randomizeIcon.classList.add('spin');
      deck.classList.add('dim');

      // Scroll to random card
      let rand = randomNumber(1, deckSize);
      document.querySelector('#card-' + rand).scrollIntoView({
        behavior: 'smooth'
      });
    }

  }

});

document.addEventListener('animationend', (e) => {

  // Remove animation classes from randomize button
  if (elementExists(randomizeIconWrap) && elementExists(randomizeIcon) && elementExists(deck)) {

    // Remove .bounce from icon wrap in .btn--randomize
    if (e.target == randomizeIconWrap) {
      e.target.classList.remove('bounce');
    }

    // Remove .spin from icon in .btn--randomize
    if (e.target == randomizeIcon) {
      e.target.classList.remove('spin');
    }

    // Remove .dim from deck
    if (e.target == deck) {
      e.target.classList.remove('dim');
    }
  }

});


//
// Helper Methods
//

/**
 * Get a random integer with a minimum and maximum value
 * (c) Chris Ferdinandi, MIT License, https://gomakethings.com
 * @param  {Integer} min  The minimum value
 * @param  {Integer} max  The maximum value
 * @return {Integer}      A random number
 */
function randomNumber (min = 0, max = 1000) {
	return Math.floor(Math.random() * (max - min + 1) + min);
}