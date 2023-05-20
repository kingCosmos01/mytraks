
const tipBox = document.getElementById('healthTipBox');
const tip = tipBox.querySelector('.tip');
const tipCloseBtn = document.getElementById('tipCloseBtn');


const healthTips = [
    'What foods should I eat if I have diabetes? Eating the right foods for diabetes means eating a variety of healthy foods from all the food groups:',
    'Avoid alcohol and cigarettes for a healthy liver.',
    'Don’t skip meals when recovering from Hepatitis.',
    'Eat small meals, Drink lots of water, and take adequate rest.',
    'Avoid taking vitamin supplements or over-the-counter drugs without consulting your Doctor.'
];

let tipIndex = 0;

loadTip(healthTips[tipIndex]);

tipCloseBtn.addEventListener('click', closeTipBox);

function loadTip(incomingtip) {
    tip.innerText = incomingtip;
}

// Dsiaply Health Tips After 5 secs
setInterval(() => {
   nextTip();
}, 5000);

function nextTip() {

    tipIndex++;

    if(tipIndex >= (healthTips.length - 1))
    {
        tipIndex = 0;
    }

    loadTip(healthTips[tipIndex]);
}

function closeTipBox() {
    tipBox.style.translate = '200%';
    // tipBox.style.display = "none"; 
}


