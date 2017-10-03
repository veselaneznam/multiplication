# Coding Challenge

program that prints out a multiplication table of the first 10 prime
numbers.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

You will need php7.1 

You will need an composer installed on your local machine

```
curl -s https://getcomposer.org/installer | php
```

```
sudo mv composer.phar /usr/local/bin/composer
```
### Installing

I would recommend you to have it outside of your project, but you can install it as well in your project folder 

Then clone the project inside benchmark folder

```
git clone git@github.com:veselaneznam/multiplication.git
```

After that you need to run composer install
```
composer install
```

And you are ready to use it

## Custom Commands

To run the tests you need to run 
```
composer test
```
To run the command you need to run 
```
composer run-multiplication
```
By Default the number of primes to be multiplied is 10, but if you want to change the number you need to run

```
composer run-multiplication <intger number>
```

Example
```
composer run-multiplication 2
```