import 'jquery';
import './sass/main.scss';
import './components/header.js';
import './components/footer.js';
import './components/accordion.js';

// Listen to tab events to enable outlines (accessibility improvement)
function handleFirstTab(e) {
    if (e.keyCode === 9) { // the "I am a keyboard user" key
        document.body.classList.add('user-is-tabbing');
        window.removeEventListener('keydown', handleFirstTab);
    }
}

window.addEventListener('keydown', handleFirstTab);
