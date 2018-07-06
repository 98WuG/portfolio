# Personal portfolio

Source code for my personal portfolio site. Just a little bit overkill.

## How to run
Simply clone the repo and launch the program :). However, if you want to edit the `.js` or `.css`, then you'll need to edit `js/external.js` and `scss/style.scss`. You'll need to process these files. Run `npm install` or `yarn install` to install dependencies first. Then run `yarn minify` to compress the `.js` and `yarn scss` to compile the `.scss`.

If you would like the contact form to work, you require a working mail server. Then, copy `config_example.ini` to `config.ini`. Open the file, and fill in the relevant fields with your Google reCAPTCHA public/secret keys. Also, fill in the email that you would like to be contacted at.

In order for `index.php` to work, you must have a running instance of MySQL. The page reads information from the database to generate the content. The structure of the database can be found [here](https://geraldwu.com/structure.pdf). The login credentials for your database must be put in `config.ini`. If you don't want to setup the database, you can simply use `static.php` instead.
