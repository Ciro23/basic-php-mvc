# How it works
the router gets the first parameter of the url as the controller, the second as the method and the others as the method arguments.

When the user search for a page, the router checks if its controller (and any method) exist, otherwise the pagenotfound controller is called

# Basic setup
to add new pages is necessary to create its controller, model and view in the appropriate folders in the /app directory.

the htaccess.txt files must be renamed into .htaccess to make it work, github doesn't allow .htaccess files to be uploaded
