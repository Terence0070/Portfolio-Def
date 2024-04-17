	
		</div>
	</div>

	<button id="bouton_nuit"><i class="fa-regular fa-sun" id="soleil"></i></button>
	<button id="bouton_jour"><i class="fa-regular fa-moon" id="lune"></i></button>

	<div class="fin">
		<div class="fin_credit">
			<span><b>Copyright <?php echo date("Y") ?> © Terence Renard -</b> <a href="https://vaniahero.fr"><img style="height:17px; background-color: black;" src="Images/vaniahero.png"></a> <a style="color:800080 !important; margin-left:10px;" href="https://github.com/Terence0070"><i class="fa-brands fa-github"></i></a>     <a style="color:#0e76a8; margin-left:10px;" href="https://www.linkedin.com/in/terence-renard/"><i class="fa-brands fa-linkedin-in"></i></a>   </span>
		</div>
		<div class="fin_pagessup">
			<a href="mentions_legales.php" target="_blank">Mentions Légales</a> | <a href="politique_de_conf.php" target="_blank">Politique de confidentialité</a>
		</div>
	</div>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script>
		/* SCRIPT POUR LE MENU DEROULANT */
		// Sélectionner la flèche bas
		const fleche = document.getElementById('fleche');
		// Sélectionner tous les éléments de menu à cacher
		const menusAffichage = document.querySelectorAll('.menu_affichage');
		const elementsMenusAffichage = document.querySelectorAll('.menu_tel');

		// Ajoutez un écouteur d'événements pour détecter le clic sur la flèche
		fleche.addEventListener('click', function() {
			// Pour chaque menu à cacher (oui c'est chiant)
			menusAffichage.forEach(menuAffichage => {
				// Vérifiez si le menu est déjà caché (zzzzzz)
				if (menuAffichage.classList.contains('hidden')) {
					// Si oui, le rendre visible
					menuAffichage.classList.remove('hidden');
					fleche.classList.remove('fleche_inverse');
				} else {
					// Sinon, le cacher
					menuAffichage.classList.add('hidden');
					fleche.classList.add('fleche_inverse');
				}
			});
			
			// Pour chaque élément de menu à cacher (c'est comme au-dessus, c'est ennuyeux à écrire)
			elementsMenusAffichage.forEach(elementMenuAffichage => {
				// Vérifiez si l'élément de menu est déjà caché
				if (elementMenuAffichage.classList.contains('hidden_elements')) {
					// Si oui, le rendre visible
					elementMenuAffichage.classList.remove('hidden_elements');
				} else {
					// Sinon, le cacher
					elementMenuAffichage.classList.add('hidden_elements');
				}
			});
		// Hallelujah
		});

		/* SCRIPT POUR LE MODE LIGHT / DARK */
		// Récupérer les éléments par les bons identifiants
		const bouton_nuit = document.getElementById('bouton_nuit');
		const bouton_jour = document.getElementById('bouton_jour');
		var audio_jour = new Audio('Audio/jour.mp3');
		var audio_nuit = new Audio('Audio/nuit.mp3');
		var audio_spam = new Audio('Audio/lumierespam.mp3');
		var compteur = 0;

		var themeActuel = localStorage.getItem('theme');

		// Fonction pour activer le mode nuit
		function activerModeNuit() {
			// Vérifier si le thème actuel est déjà en mode nuit
			if (themeActuel !== 'dark') {
				audio_nuit.play();
				compteur++;
				if (compteur % 30 === 0) {
					audio_spam.play();
				}
			}
			document.documentElement.setAttribute('data-theme', 'dark');
			localStorage.setItem('theme', 'dark');
			bouton_nuit.style.display = 'none';
			bouton_jour.style.display = 'inline';
		}

		// Fonction pour activer le mode jour
		function activerModeJour() {
			// Vérifier si le thème actuel est déjà en mode jour
			if (themeActuel !== 'light') {
				audio_jour.play();
				compteur++;
				if (compteur % 30 === 0) {
					audio_spam.play();
				}
			}
			document.documentElement.setAttribute('data-theme', 'light');
			localStorage.setItem('theme', 'light');
			bouton_nuit.style.display = 'inline';
			bouton_jour.style.display = 'none';
		}

		// Ajouter des écouteurs d'événements aux boutons
		bouton_nuit.addEventListener('click', function() {
			activerModeNuit();
			themeActuel = 'dark';
		});

		bouton_jour.addEventListener('click', function() {
			activerModeJour();
			themeActuel = 'light';
		});

		// Vérifier le thème actuel dans localStorage et l'appliquer
		function verifierThemeInitial() {
			if (themeActuel === 'dark') {
				activerModeNuit();
			} else {
				activerModeJour();
			}
		}

		// Appeler cette fonction au chargement de la page
		verifierThemeInitial();
	</script>
</body>