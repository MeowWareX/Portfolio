document.addEventListener('DOMContentLoaded', function () {
	var navLinks = document.querySelectorAll('.nav-scroll-link');

	navLinks.forEach(function (link) {
		link.addEventListener('click', function (e) {
			e.preventDefault();

			var targetId = e.currentTarget.getAttribute('data-target');
			var targetElement = document.getElementById(targetId);

			if (targetElement) {
				targetElement.scrollIntoView({
					behavior: 'smooth',
					block: 'start'
				});
			}
		});
	});
});