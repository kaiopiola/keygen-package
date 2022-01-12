# Keygen
***Este plugin está em desenvolvimento e pode apresentar comportamento inesperado durante o seu uso, por favor, reporte qualquer tipo de bug ou erro que encontrar ao utilizar essa solução, para que possamos torná-la a melhor possível para o seu uso!***

O plugin Keygen é um gerador de chaves ou seriais baseado em padrões de máscara definidos pelo usuário.
O plugin é capaz de gerar chaves como o exemplo abaixo:

```6W2F-4RJB-KV0Z-ADA6-4SJ2```

O mesmo foi escrito com PHP 8.0.12, porém, deve ser compatível com versões PHP 7.4.x ou superiores.

## Como o Keygen funciona

### Como criar uma nova chave

Para criar uma nova chave, basta instanciar a classe em uma variável, e em seguida, definir seus parâmetros de configurações, conforme exemplo abaixo:

``` php
# Instanciando classe em uma variável:
$chave = new Key;

# Definindo parâmetros:
$chave->pattern("XXXX-NNNN-LLLL"); // Define o padrão que o código utilizará para definir sua nova chave. 
// As letras representam o tipo de conteúdo que pode ser usado naquele espaço, conforme a regra:
// X - Qualquer letra ou número
// N - Apenas números, conforme definido
// L - Apenas letras, conforme definido
// Quaisquer outros caracteres como traços, pontos, barras, e até mesmo outras letras e números, não serão substituídos.
// Caso essa propriedade não esteja definida, será utilizada por padrão a seguinte: XXXXX-XXXXX-XXXXX

$chave->numbers("789"); // Define os números que poderão compor sua chave, se não definido, irá utilizar por padrão "0123456789"
$chave->letters("ABC"); // Define as letras que poderão compor sua chave, se não definido, irá utilizar por padrão "ABCDEFGHIJKLMNOPQRSTUVWXYZ"

$chave->generate(); // Gera sua chave e retorna um valor do tipo string com o resultado
```
