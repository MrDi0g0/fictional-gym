window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const menubar = document.getElementById('menubar');
    if (window.scrollY > 300) { // Ajuste o valor conforme necessário
        navbar.classList.add('scrolled');
        menubar.classList.add('down');

    } else {
        navbar.classList.remove('scrolled');
        menubar.classList.remove('down');
    }
});
