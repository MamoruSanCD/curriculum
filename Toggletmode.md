# Explicação de como funciona o Toggle theme mode
> Esse documento tem como intuito explorar a criação de um "interruptor" para a alteração entre os temas claros e escuros do site *theme-mode*.
> Partindo desse ponto, será colocado os código e explicado cada ponto junto de suas imagens.

## html
No documento HTML ou PHP, depende do tipo de site que está fazendo, colocaremos três tags (html) Label, Input e Span. Essas três tags serão decisivas para fazer o nosso *toggle* funcionar, porém, eles mesmos não daram nome as nossas funções dentro do css, para que tudo aconteça da melhor forma possivel, teremos que usar os atributos "class" para dar nome as funções que irão alterar nosso layout.
Essas class podem receber o nome que achar melhor, mas lembre que nunca se deve repetir o nome de uma class para outro elemento que não tenha a mesma função.

A class que deferi para minhas tags foram, 
*"tmode" para o Label
*"toggle" para o input
*No index usei o atributo name e coloquei o nome de "theme"


