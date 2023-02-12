const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]
const checkbox = document.getElementsByClassName('checkbox')[0]

checkbox.addEventListener('click', () => {
 navbarLinks.classList.toggle('open')
  })
  
