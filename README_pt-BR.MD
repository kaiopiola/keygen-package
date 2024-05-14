# Keygen
<a target="_blank" href="https://packagist.org/packages/kaiopiola/keygen" ><img src="https://img.shields.io/packagist/dt/kaiopiola/keygen?color=%2300FFF" /></a>
<a target="_blank" href="https://packagist.org/packages/kaiopiola/keygen" ><img src="https://img.shields.io/packagist/v/kaiopiola/keygen?color=%23888888&label=vers%C3%A3o" /></a>
<a target="_blank" href="https://packagist.org/packages/kaiopiola/keygen" ><img src="https://img.shields.io/packagist/php-v/kaiopiola/keygen" /></a>

***Se encontrar qualquer bug, por favor [crie uma nova issue](https://github.com/kaiopiola/keygen-package/issues/new?labels=bug)!***

O plugin Keygen é um gerador de chaves ou seriais baseado em padrões de máscara definidos pelo usuário.
O plugin é capaz de gerar chaves como o exemplo abaixo:

```6W2F-4RJB-KV0Z-ADA6-4SJ2```

Pode ser utilizado para gerar chaves em diversas finalidades, são alguns exemplos:
<ul>
  <li>Links únicos para redefinição de senhas</li>
  <li>Cadastros via link de convite</li>
  <li>Códigos de autenticação de dois fatores</li>
  <li>Links de compartilhamento de arquivos</li>
  <li>Chaves de resgate de produtos</li>
  <li>Cupons de desconto</li>
  <li>Códigos de referência</li>
</ul>

## Instalação

Primeiro, execute o seguinte comando em seu projeto:

``` console
composer require kaiopiola/keygen
```

Então, chame a classe principal no arquivo PHP onde deseja utiliza-la:

``` php
use Kaiopiola\Keygen\Key;
```

## Como o Keygen funciona

### Como criar uma nova chave

Para criar uma nova chave, basta instanciar a classe em uma variável, e em seguida, definir seus parâmetros de configurações, conforme exemplo abaixo:

``` php
# Instanciando classe em uma variável:
$chave = new Key;

# Definindo parâmetros:
$chave->setPattern("XXXX-NNNN-LLLL"); // Define o padrão que o código utilizará para definir sua nova chave. 
// As letras representam o tipo de conteúdo que pode ser usado naquele espaço, conforme a regra:
// X - Qualquer letra ou número
// N - Apenas números, conforme definido
// L - Apenas letras, conforme definido
// Quaisquer outros caracteres como traços, pontos, barras, e até mesmo outras letras e números, não serão substituídos.
// Caso essa propriedade não esteja definida, será utilizada por padrão a seguinte: XXXXX-XXXXX-XXXXX

$chave->setNumbers("789"); // Define os números que poderão compor sua chave, se não definido, irá utilizar por padrão "0123456789"
$chave->setLetters("ABC"); // Define as letras que poderão compor sua chave, se não definido, irá utilizar por padrão "ABCDEFGHIJKLMNOPQRSTUVWXYZ"

$chave->generate(); // Gera sua chave e retorna um valor do tipo string com o resultado
```

### Como criar uma nova chave única

Você também tem a opção de gerar uma chave única para evitar duplicatas, usando o exemplo abaixo:

``` php
$exampleKey->setExistingKeys([]); // Define as chaves existentes que o código evitará duplicatas. Deve ser tipo array.

$exampleKey->generateUnique(); // Gere sua chave e retorne um valor de string com o resultado
```
Essa função também é compatível com ```setPattern```, ```setNumbers``` e ```setLetters```!

## Considerações

Este projeto é aberto à contribuições, sejam com sugestões e ou melhorias no código de qualquer tipo.
Sinta-se à vontade para participar do seu desenvolvimento.

## Licença
Licença MIT (MIT). Por favor, leia o [Arquivo de Licença](LICENSE) para maiores informações.
