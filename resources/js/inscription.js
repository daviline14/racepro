$(document).ready(function() {
    // Mostrar el formulario y el overlay cuando se pulsa el botón con id 'inscription'
    $('#inscription').click(function() {
        console.log("Botón 'inscription' clicado.");
        $('#overlay').fadeIn(); // Mostrar el overlay difuminado
        $('#formContainer').fadeIn(); // Mostrar el formulario
    });

    // Ocultar el formulario y el overlay cuando se hace clic en el botón de cerrar
    $('#closeForm').click(function() {
        $('#formContainer').fadeOut(); // Ocultar el formulario
        $('#overlay').fadeOut(); // Ocultar el overlay
    });

    // También ocultar el formulario y el overlay al hacer clic en el overlay (opcional)
    $('#overlay').click(function() {
        $('#formContainer').fadeOut();
        $('#overlay').fadeOut();
    });

    // Ocultar el formulario y el overlay al enviar el formulario (si no usas AJAX)
    $('#leagueForm').submit(function(e) {
        e.preventDefault(); // Evita el envío real del formulario para mostrar el cierre (en un flujo AJAX)
        console.log("Formulario enviado");

        $('#formContainer').fadeOut();
        $('#overlay').fadeOut();
    });
});
