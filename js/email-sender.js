(function () {
	emailjs.init("r8F5vaNt1dMwlDO9F");
})();

document.getElementById('contact-form').addEventListener('submit', function (event) {
	event.preventDefault();

	const formData = new FormData(this);
	const formObject = Object.fromEntries(formData);

	emailjs.send('service_4rw77gq', 'template_ita6qpq', formObject)
		.then(function (response) {
			console.log('Éxito:', response);
			alert('¡Mensaje enviado con éxito!');
		}, function (error) {
			console.error('Error:', error);
			alert('Hubo un error al enviar el mensaje.');
		});
});
