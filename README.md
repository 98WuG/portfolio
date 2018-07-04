# Personal portfolio

Source code for my personal portfolio site.

## How to run
Simply clone the repo and launch the program :). However, if you want to edit the `.js` or `.css`, then you'll need to edit `js/external.js` and `scss/style.scss`. You'll need to process these files. Run `npm install` or `yarn install` to install dependencies first. Then run `yarn minify` to compress the `.js` and `yarn scss` to compile the `.scss`.

If you would like the contact form to work, it requires to be running on a working mail server. Then, copy `config_example.ini` to `config.ini`. Open the file, and fill in the relevant fields with your Google reCAPTCHA public/secret keys. Also, fill in the email that you would like to be contacted at.
