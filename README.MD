# Keygen

<a target="_blank" href="https://packagist.org/packages/kaiopiola/keygen" ><img src="https://img.shields.io/packagist/dt/kaiopiola/keygen?color=%2300FFF" /></a>
<a target="_blank" href="https://packagist.org/packages/kaiopiola/keygen" ><img src="https://img.shields.io/packagist/v/kaiopiola/keygen?color=%23888888&label=version" /></a>
<a target="_blank" href="https://packagist.org/packages/kaiopiola/keygen" ><img src="https://img.shields.io/packagist/php-v/kaiopiola/keygen" /></a>

### Essa documentação está disponível também em [Português do Brasil](README_pt-BR.MD).

***This plugin is under development and may exhibit unexpected behavior while using it, please report any bugs or errors you find when using this solution, so that we can make it the best possible for your use!***

The Keygen plugin is a key or serial generator based on user-defined mask patterns.
The plugin is able to generate keys like the example below:

```6W2F-4RJB-KV0Z-ADA6-4SJ2```

It can be used to generate keys for several purposes, some examples are:

<ul>
   <li>Unique links to reset passwords</li>
   <li>Registration via invitation link</li>
   <li>Two-Factor Authentication Codes</li>
   <li>File sharing links</li>
   <li>Product Redemption Keys</li>
   <li>Discount coupons</li>
</ul>

## Installation

Fisrt, run the following command in your project:

``` console
composer require kaiopiola/keygen
```

Then, call the main class on the PHP file you want to load it:

``` php
use Kaiopiola\Keygen\Key;
```

## How Keygen works

### How to create a new key

To create a new key, just instantiate the class in a variable, and then define its configuration parameters, as shown in the example below:

``` php
# Instantiating class in a variable:
$exampleKey = new Key;

# Setting parameters:
$exampleKey->setPattern("XXXX-NNNN-LLLL"); // Defines the pattern that the code will use to define its new key. 
// The letters represent the type of content that can be used in that space, as per the rule:
// X - Any letter or number
// N - Numbers only as defined
// L - Letters only as defined
// Any other characters like dashes, dots, slashes, and even other letters and numbers, will not be replaced.
// If this property is not defined, the following will be used by default: XXXXX-XXXXX-XXXXX

$exampleKey->setNumbers("789"); // Defines the numbers that can compose your key, if not defined, it will use by default "0123456789"
$exampleKey->setLetters("ABC"); // Defines the letters that can compose your key, if not defined, it will use by default "ABCDEFGHIJKLMNOPQRSTUVWXYZ"

$exampleKey->generate(); // Generate your key and return a string value with the result
```

## Considerations

This project is open to contributions, whether with suggestions or improvements to the code of any kind.
Feel free to participate in its development.

## License
MIT License (MIT). Please, read the [License File](LICENSE) for more informations.
