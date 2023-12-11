const form = document.querySelector("form"),
statusTxt = form.querySelector ("col-lg-6 span");

form.onsubmit = (e)=>{
    e.preventDefault();
    statusTxt.style.display = "block";
}