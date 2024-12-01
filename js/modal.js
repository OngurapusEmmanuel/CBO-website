window.onload = function() {
    document.getElementById('popup').style.display = 'flex';
    // const modal=document.getElementById("register-modal");
    // modal.style.display="flex";

    // //adding blinking
    // setTimeout(()=>{
    //     modal.classList.add("blinking");
    // },2000);
};

function closeModal() {
    document.getElementById('popup').style.display = 'none';
}

// document.querySelector('.btn').addEventListener('click', function(event) {
//     event.preventDefault();
//     document.getElementById('register-modal').style.display = 'flex';
// });
function registerModal() {

    function closeModal() {
        document.getElementById('popup').style.display = 'none';
    }
    document.getElementById('register-modal').style.display = 'flex';
}

function closeRegisterModal() {
    document.getElementById('register-modal').style.display = 'none';
}
