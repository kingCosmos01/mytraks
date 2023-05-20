const overlay = document.getElementById("overlay");
const navTrigger = document.getElementById("navTrigger");
const navContainer = document.getElementById("navContainer");
const closeBtn = document.getElementById("closeBtn");

const modalBox = document.getElementById("modalBox");


const alert = document.getElementById("alert");

setTimeout(() => {
    alert.style.display = "none";
}, 4000);

navTrigger.addEventListener('click', () => {
    openNavContainer()
});

closeBtn.addEventListener('click', () => {
    closeNavContainer()
});

function openNavContainer() {
    modalBox.style.display = 'none';
    overlay.style.display = 'block';
    navContainer.style.display = 'block';
}

function closeNavContainer() {
    overlay.style.display = 'none';
    navContainer.style.display = 'none';
}

closeNavContainer();

function activateUserModlaBox() {
    modalBox.style.display = 'block';
}
function DeactivateUserModlaBox() {
    modalBox.style.display = 'none';
}


DeactivateUserModlaBox();


// function openUserModal()
// {
//     const modalBox = document.getElementById("modalBox");

//     const userModalReq = new XMLHttpRequest();
//     userModalReq.open('GET', 'http://localhost/mytraks/public/inc/user.php', true);

    

//     userModalReq.onload = function() {
//         if(this.readyState == 4 && this.status == 200)
//         {
//             let data = '';
//             data = userModalReq.responseText;

//             console.log(data);
            
//             modalBox.innerHTML = data;
//         }
//     }


//     userModalReq.send();
// }