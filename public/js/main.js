const overlay = document.getElementById("overlay");
const navTrigger = document.getElementById("navTrigger");
const navContainer = document.getElementById("navContainer");
const closeBtn = document.getElementById("closeBtn");

navTrigger.addEventListener('click', () => {
    openNavContainer()
});

closeBtn.addEventListener('click', () => {
    closeNavContainer()
});

function openNavContainer() {
    overlay.style.display = 'block';
    navContainer.style.display = 'block';
}

function closeNavContainer() {
    overlay.style.display = 'none';
    navContainer.style.display = 'none';
}

closeNavContainer();


