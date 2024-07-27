const sidebar = document.getElementById('sidebar');
const buttonClose = document.getElementById('close');
const menuSidebar = document.getElementById('icon-menu');


buttonClose.addEventListener("click", function(){
    sidebar.style.display = "none";
    menuSidebar.style.display = "flex";
});

menuSidebar.addEventListener("click", function(){
    sidebar.style.display = "block";
    menuSidebar.style.display = "none";
});

function JamDigital() {
    const jam = document.getElementById('jam');
    const now = new Date();
    
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    
    jam.textContent = `${hours}:${minutes}:${seconds}`;
}

setInterval(JamDigital, 1);
JamDigital();