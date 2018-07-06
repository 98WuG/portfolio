# Personal portfolio

Source code for my personal portfolio site. Just a little bit overkill.

## How to run

### Cloning
Simply clone the repo.

```bash
$ git clone https://github.com/98WuG/geraldwu.com
```

However, if you want to edit the `.js` or `.css`, then you'll need to edit `js/external.js` and `scss/style.scss`. You'll need to process these files after editing. Run `npm install` or `yarn install` to install dependencies first. Then run `yarn minify` to compress the `.js` and `yarn scss` to compile the `.scss`.

### Contact form
If you would like the contact form to work, you require a working mail server (I personally use Dovecot/Sendmail). Then, copy `config_example.ini` to `config.ini`. Open the file, and fill in the relevant fields with your Google reCAPTCHA public/secret keys. Also, fill in the email that you would like to be contacted at.

### Database setup
In order for `index.php` to work, you must have a running instance of MySQL. The page reads information from the database to generate the content.

If you don't want to setup the database, you can simply use `static.php` instead.

You can use the database dump located at `portfolio-dbdump.sql`. First, login to MySQL and create a database:

```bash
$ mysql -u root -p
mysql> CREATE DATABASE portfolio;
```

Confirm that the database was created. Then, exit the MySQL shell and run the following:

```bash
$ mysql -u username -p portfolio < portfolio-dbdump.sql
```

This will import the structure and data into your new `portfolio` database. Now, update the login credentials in `config.ini` under the `[DATABASE]` header.

Alternatively, if you wish to setup the database by hand, the structure of the database can be found [here](https://geraldwu.com/structure.pdf).
