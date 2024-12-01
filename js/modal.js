window.onload = function() {
    document.getElementById('popup').style.display = 'flex';
};

function closeModal() {
    document.getElementById('popup').style.display = 'none';
}

// document.querySelector('.btn').addEventListener('click', function(event) {
//     event.preventDefault();
//     document.getElementById('register-modal').style.display = 'flex';
// });
function registerModal() {
    document.getElementById('register-modal').style.display = 'flex';
}

function closeRegisterModal() {
    document.getElementById('register-modal').style.display = 'none';
}
