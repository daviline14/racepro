document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('dark-mode-toggle');
    const modeIcon = document.getElementById('mode-icon');
    const body = document.body;

    // Comprobar si el usuario ya ha seleccionado un modo previamente
    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark-mode');
        modeIcon.classList.replace('fa-moon', 'fa-sun'); // Cambiar icono a "sol" cuando el modo oscuro está activado
    }

    toggleButton.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        const darkModeEnabled = body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', darkModeEnabled ? 'enabled' : 'disabled');

        // Cambiar el icono según el estado del modo oscuro
        if (darkModeEnabled) {
            modeIcon.classList.replace('fa-moon', 'fa-regular fa-sun-bright');
        } else {
            modeIcon.classList.replace('fa-regular fa-sun-bright', 'fa-moon');
        }
    });
});
