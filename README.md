# Router
A Simple Router in PHP using MVC pattern

# Author
Simon Trichereau <br/>
[website](http//simon-tr.com)

# With 404 page version
To get the version with the 404page, switch your branch to : version404 <br/>
``` git checkout version404 ```

# Configuration instructions
1. Install the project
2. Modify ``` assets/php/functions/routes.php ``` to add all your routes from your Site :
	* ``` $route->add('URL','MODEL'); ```
	* ``` $route->add('URL:PARAMETER','MODEL'); ```
3. Add a Model **(REQUIRED)**, a Controller and a View ``` assets/php/elements/models/ ```, ``` assets/php/elements/controllers/ ``` and ``` assets/php/elements/views/ ``` for each Route you've created
4. The routes return the link to the Model, which include controller and view to the page
5. The variables you would use
	* ``` $pageTitle ``` - Give a title to the page (Use it in Model or Controller)
	* ``` $paramUrl ``` - Use a parameter of the URl **if exists** (Example the ID, the name...)
	* ``` $phpPath ``` - If you want to modify the PATH of the php files 

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

# Copyright
**© Simon Trichereau - 2016** <br/>
_This project is totally free for commercial or personnal use and modifications are welcome!_


# Contact information
To contact me you can send me a message to : [simon.trichereau@gmail.com](mailto:simon.trichereau@gmail.com)
