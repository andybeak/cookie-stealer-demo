# Example of reflected XSS

This project lets you experiment with two forms of XSS - reflected and stored.  DOM based XSS is directed against JavaScript applications and is outside of the scope of this project.

## Running the code

Start the project by opening up two shell tabs.

In the first tab run these commands:

    cd attacker-script
    php -S localhost:8000

In the second tab run these commands:

    cd target-site
    php -S localhost:8080

You can visit the site at `http://localhost:8080` to see the frontend.

## Injecting script

Edit the file "database-content.txt" and include your stored XSS code.  The contents of this file will be read and placed into the target-site page in the section under stored XSS.

Use the GET parameter "error" to simulate reflected XSS.  This is intended to simulate a situation where the vulnerable site uses the GET parameter "error" to communicate a message back to the user.  This could, for example, happen if they fill in a form incorrectly.

The contents of the "error" parameter will be displayed without escaping in the section of the target-site labeled "Reflected XSS demonstration".  For example visit the site with the url "http://localhost:8080/?error=Hello"

## Theme of the target-site

The frontend theme is taken from https://startbootstrap.com/themes/stylish-portfolio/ and is licensed under the MIT license.