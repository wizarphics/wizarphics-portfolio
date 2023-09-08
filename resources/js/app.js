import './bootstrap';
import Typewriter from 'typewriter-effect/dist/core';
import jQuery from  'jquery'

window.jQuery = jQuery
window.$ = jQuery

// import 'slick-carousel/slick/slick';

const textVariations = ["Problem Solver", "Experience Shaper", "Innovator"]; // Array of text variations
function type(el) {
    let index = 0;
    const dynamicTextElement = el;
    const textVariations = dynamicTextElement.dataset.variants.split(', ');
    const currentText = textVariations[index];
    let dynamicIndex = 0;

    if (index < textVariations.length) {
        const typingInterval = setInterval(() => {
            if (dynamicIndex === currentText.length) {
                clearInterval(typingInterval);
                setTimeout(() => {
                    dynamicTextElement.textContent = "";
                    index = (index + 1) % textVariations.length;
                    type();
                }, 1000); // Delay before changing to the next variation (in milliseconds)
                return;
            }

            dynamicTextElement.textContent += currentText.charAt(dynamicIndex);
            dynamicIndex++;
        }, 100); // Typing speed for each character (in milliseconds)
    }
}

document.querySelectorAll('.dynamic-type').forEach(
    element =>{
        const textVariations = element.dataset.variants?.split(', ')
        if(textVariations?.length){
            new Typewriter(element, {
                strings: textVariations,
                autoStart: true,
                loop: true,
                delay: 75,
            });
        }
    }
)

const nav = document.querySelector('.navbar'); // Identify target

function OnScrollEvent(event) {
    event.preventDefault();

    if (window.scrollY > 150 && window.scrollY <= 700) { // Just an example
        nav.classList.add('navbar-dark')
    } else {
        nav.classList.remove('navbar-dark')
    }
}
window.addEventListener('scroll', OnScrollEvent);
// type();

window.onunload = function() {
    removeEventListener('scroll', OnScrollEvent)
}

