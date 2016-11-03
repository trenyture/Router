# Router
	A Simple Router in PHP using MVC pattern

# With 404 page version
	To get the version with the 404page, switch your branch to : version404
	``` git checkout version404 ```

# Configuration instructions
	1. Install the project
	2. Modify ``` assets/php/functions/routes.php ``` to add all your routes from your Site
	3. Add a Model, a Controller and a View ``` assets/php/elements/models/ ```, ``` assets/php/elements/controllers/ ``` and ``` assets/php/elements/views/ ```
	4. The routes return the link to the Model, which include controller and view to the page
	5. Enjoy it ;)

# Installation instructions
	## With GIT
		In your Command Line Editor, use : ``` git clone https://github.com/trenyture/Router.git ```
	## Downloading the Zip
		Click on _Clone or Download_ button then on _Download ZIP_

# Architecture
	| - .htaccess
	| - index.php
	| - README.md	
	| ---- assets
		| ---- css
			| - main.css
		| ---- php
			| ---- functions
				| - router.php
				| - routes.php
			| ---- elements
				| - header.php
				| - footer.php
				| ---- models
					| - home.php
					| - post.php
					| - posts.php
				| ---- controllers
					| - home.php
					| - post.php
					| - posts.php
				| ---- views
					| - home.php
					| - post.php
					| - posts.php

# Copyright and licensing information
	** This project is totally free for use and modify! **


# Contact information for the distributor or programmer
	To contact me you can send me a message to : [simon.trichereau@gmail.com](mailto:simon.trichereau@gmail.com)