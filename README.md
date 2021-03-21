# Road to PHP 8

Welcome to this repository which showcases some of the interesting features of PHP 8.

## Topics

1. [Union types](1_union_types)
2. [Named arguments](2_named_arguments)
3. [Exception improvements](3_exceptions)
4. [Match expression](4_match)
5. [`mixed` type](5_mixed_type)
6. [Constructor property promotion](6_promoted_properties)
7. [Nullsafe operator](7_nullsafe_operator)
8. [Weak maps](8_weakmap)
9. [Attributes](9_attributes)
10. [Object classnames](10_object_classnames)
11. [Stringable interface](11_stringable)
12. [New string functions](12_string_functions)
13. [Trailing comma in function calls](13_trailing_comma_functions)

### PHP 8 environment

You can either install PHP 8 locally to run the code examples or use the provided helper script to run the examples inside
Docker container.


### Installing PHP 8

Add the `ondrej/php` repository to you Ubuntu machine:

```bash
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
```

Install only cli package, it should be enough:

```bash
sudo apt install php8.0-cli
```

In case if you need to install some of the php extensions:

```bash
sudo apt install php8.0-[extname]
```

Installation of PHP 8 will set is as default PHP environment on your machine. To set the PHP 7.4 as the default environment,
run the following commands:

```bash
sudo update-alternatives --set php /usr/bin/php7.4
sudo update-alternatives --set phar /usr/bin/phar7.4
sudo update-alternatives --set phar.phar /usr/bin/phar.phar7.4
sudo update-alternatives --set phpize /usr/bin/phpize7.4
sudo update-alternatives --set php-config /usr/bin/php-config7.4
```

### Running example in Docker container

Use the `run` helper script to run the code example inside Docker container:

```bash
./run 1_union_types/index.php
```