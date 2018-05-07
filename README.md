# Dub Works

## TODO List
<!-- - Suggestion box in contact me section -->
<!-- - Non-traditional web bios students/faculty -->
<!-- - Reformat projects page into grid -->
- Add info collection form to collabs page
- Add list of "related events" to collabs page?
- Social media buttons in nav
- On hover show text (from Erica)

## Docs
**dub.works** is a static Bootstrap webpage built in a PHP templating framework.

It relies on nginx FastCGI URL passing to efficiently display filesystem data.

### Nginx Config
To download PHP, PHP-FPM and Nginx in your local environment, use [this](https://blog.frd.mn/install-nginx-php-fpm-mysql-and-phpmyadmin-on-os-x-mavericks-using-homebrew/) tutorial.

To make sure the trailing file extensions are removed and the URL parameter passing works in your local environment, replace the `nginx.conf` and `fastcgi_params` files at the path specified in the `conf/mac-nginx` folder of this repository. If you are not running Unix, you may need to hunt for the configuration files manually - use the setup tutorial to find the right pathfor the configuration file.

Without Nginx properly installed, page styling will not work in your local environment. Without the correct configuration, blog post URLs will not load in your local environment.

### AWS Server
**dub.works** is hosted on an AWS server. Store the `basement_key.pem` RSA key in your local environment (but do not EVER push it to Github - the `.gitignore` should prevent this, but be careful). To shell into the server, using the following command: 

```ssh -i path/to/basement_key.pem ec2-user@dub.works```

This repository is stored in `/var/www/html` on the server. Copies of the server configuration files are stored in the `conf` folder of this repository.

### Versioning
Contributors maintain individual repositories for building and testing. Commits are merged to a stable `master` branch after testing. When publishing, the `master` and `prod`branches are merged so that the `prod` branch always contains the code currently present on the server.

### Codebase
This codebase contains PHP files for rendering the static website, along with JS, CSS, and other assets. The `php_include()` function is used to partition HTML into templates for ease of developer use and efficiency, especially in the case of `nav.php`, `header.php`, and `footer.php`, which contain code that appears on every page.

The `config.php` file (pure PHP) contains path settings for nginx, while the `common.php` (pure PHP) is loaded on every page and used to define path information for URL shortcuts in-page (paths don't need to be changed in multiple locations - an entire directory could be moved, and the path references need only be altered in `common.php`).

The most important function of the PHP framework is to render blog posts, events, and projects in an organized and non-repetitive manner. A directory iterator is used to search through specified directories for JSON data files. The data in those files are used to iteratively render webpage content (in a pseudo-dynamic fashion). For instance, to add a blog post to the site, a developer need only create a new JSON file in the `posts/blog` directory and fill in the right information fields. This information is automatically loaded in the `blogs.php` file. The `hosts.php` and `creates.php` files use similar iterators. There are also several sorting and filtering functions in the `common.php` file used to sort and filter (duh) the data return from directory iterators.

PHP is fun!