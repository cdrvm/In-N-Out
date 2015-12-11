		<header>
			<a href="accueil.php"><img src="Images/final2.png" title="In'N'Out" alt="IN'N'Out"/></a>
			
			<a href="pro3.php"> <img src="Images/pp.png" title="Profil" alt="profil" class="profil"></a>

			<a href="pro1.php"><button class="mes_events">Mes évènements</button></a>

			<a href="creation_evenement.php"><button class="crea_event">Créer un évènement</button></a>


			<form method="post" action="recherche_rap.php">
				<input type="text" name="user_search" placeholder="Rechercher un évènement" class="recherche" >
				<input value="S" class="s" border=0 src="Images/recherche2.png" type="image" Value=submit align="middle" >
			</from>


			<div id="pseudo"> <?php echo $_SESSION['Pseudo']; ?> </div>

			
			
		</header>
