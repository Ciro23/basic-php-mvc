# What is this
this was the very first php oop project i've ever made. it helped me understanding the very basic concepts of the mvc pattern.
i updated this "framework" and it became [this](https://github.com/Ciro23/mvc-framework) (which actually still sucks)

# How it works
the router gets the first parameter of the url as the controller, the second as the method and the others as the method arguments.

when the user search for a page, the router checks if its controller (and any method) exist, otherwise the pagenotfound controller is called

# Basic setup
to add new pages is necessary to create its controller, model and view in the appropriate folders in the /app directory.
