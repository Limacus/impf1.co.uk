/**
 * Component: Scoreboard
 * 
 * Styles: /css/components/scoreboard.css
 * Scripts: /js/components/scoreboard.js
 * Template: /template-parts/standings/scoreboard.php
 */

/**
 * Step 1:  Get the data from the .scoreboard-data-item's and assign it to a variable called data
 */
const unorderedData = Array.from(document.getElementsByClassName('scoreboard-data-item'));

// Order the data by score
let orderedData = unorderedData.sort((a, b) => Number(b.dataset.score) - Number(a.dataset.score));

/**
 * Step 2: Create a <table> element, but use let because we're going to add to it
 */
let scoreboard = document.createElement('table');

/**
 * Step 3: Create a <tr> for the headers (labels, whatever you want to call them)
 */
const scoreboardHeaders = document.createElement('tr');

/**
 * Step 4: Create a <td> for the first header
 */
const headerPosition = document.createElement('td')

// Fill it with 'Position'
headerPosition.innerText = 'Position'

// Add it to the <tr> we just made
scoreboardHeaders.appendChild(headerPosition);

/**
 * Step 5: Create a <td> for the second header
 */
const headerName = document.createElement('td')

// Fill it with 'Name'
headerName.innerText = 'Name'

// Add it to the <tr> we just made
scoreboardHeaders.appendChild(headerName);

/**
 * Step 6: Create a <td> for the third header
 */
const headerPoints = document.createElement('td')

// Fill it with 'Points'
headerPoints.innerText = 'Points'

// Add it to the <tr> we just made
scoreboardHeaders.appendChild(headerPoints);

/**
 * Step 8: Add the <tr> we just made and filled with <td>'s to our scoreboard <table>
 */
scoreboard.appendChild(scoreboardHeaders);

// Create a count of the current iteration for the loop in the next step
let i = 0

/**
 * Step 9: Loop througheach item in our data
 */ 
orderedData.forEach(function(item) {

  // Increase the count of the iteration by 1
  i = i + 1

  /**
   * Step 10: Create a <tr> element to be filled with data
   */
  let tr = document.createElement('tr')

  /**
   * Step 11: Create a <td>
   */
  let position = document.createElement('td')

  // Add the appropriate class name
  position.classList.add('position')

  // Create position box
  let positionBox = document.createElement('div')
  positionBox.classList.add('position-box')

  // Fill with the current iteration count
  positionBox.innerText = i.toString()

  // Add position box <div> to <td>
  position.appendChild(positionBox)

  // Add this <td class="position"></td> to the <tr> we just made
  tr.appendChild(position)
  
  /**
   * Step 12: Create a <td>
   */
  let name = document.createElement('td')

  // Add the appropriate class name
  name.classList.add('driver-name')

  // Fill with the appropriate name
  name.innerText = item.dataset.name

  // Add this <td class="driver-name"></td> to the <tr> we just made
  tr.appendChild(name);

  /**
   * Step 13: Create a <td>
   */
  let score = document.createElement('td')

  // Add the appropriate class name
  score.classList.add('points')

   // Fill with the appropriate score
  score.innerText = item.dataset.score

   // Add this <td class="points"></td> to the <tr> we just made
  tr.appendChild(score);

  /**
   * Step 14: Add this <tr>...</tr> to our scoreboard <table>
   */
  scoreboard.appendChild(tr);
})

/**
 * Step 15: Create empty div to use as a wrapper for the whole table
 */
let wrapper = document.createElement('div')

// Add this class because that is just how Limacus decided to style this <table>
wrapper.classList.add('wp-block-table')

/**
 * Step 16: Add our entire scoreboard <table>...</table> into our wrapper <div class="wp-block-table"></div>
 */
wrapper.appendChild(scoreboard)

/**
 * Step 17: Add our entire wrapper (which includes our <table>) to our document.body
 */
document.body.appendChild(wrapper)
