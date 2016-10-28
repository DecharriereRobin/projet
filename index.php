<?php

require_once 'contact.php';

 ?>
  <!DOCTYPE html>
 <html lang="fr">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<title>Site</title>
 </head>
 
 <body>
	<header>

		<div class="logo">
			<img src="https://upload.wikimedia.org/wikipedia/fr/0/02/Logo_%C3%89quipe_Canada_Vancouver_2010.png" 
			width = "100px" height="100px" alt="logo canada"/>	
		</div>
		<nav>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Presentation</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Blabla</a></li>
			</ul>
		</nav>
	</header><!-- /header -->


	<section>
		<article>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
		<aside>
			<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150" alt=""/>
		</aside>
		<article>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
		<aside>
			<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150" alt=""/>
		</aside>
	</section>

	<aside>

        <form action="" method="POST">
            <label for="user">      <input type="text" name="user" id="user"  placeholder="user"/>          </label>
            <label for="password"> <input type="password" name="password" id="password" placeholder="password"/></label>
            <button type="submit" name="submit">Envoyer</button>
        </form>
       
	</aside>
	
<footer><p>FOOTER</p></footer>

</body>
</html>
