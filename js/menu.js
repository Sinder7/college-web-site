// JavaScript
document.getElementById('menuButton').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebarMenu');
    const overlay = document.getElementById('overlay');
    sidebar.classList.toggle('active');
    overlay.classList.toggle('active');
});


document.getElementById('overlay').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebarMenu');
    const overlay = document.getElementById('overlay');
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
});


// Закрытие при нажатии Esc
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        const sidebar = document.getElementById('sidebarMenu');
        const overlay = document.getElementById('overlay');
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
    }
});