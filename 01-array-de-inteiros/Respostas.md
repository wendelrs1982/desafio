# Respostas Questão 1
###  Explique como você faria para testar essa função, incluindo testes unitários e de integração.
Nesse primeiro momento optei por uma abordagem simples nos testes.<br>
Optei por testes unitários para verificar números positivos, negativos, mistos(array com números positivos e negativos), arrays pequenos (com 2 elementos) e grandes (até mil elementos).<br>
Podemos evoluir para criar casos de testes para verificar os tipos de dados que são permitidos nesse array.<br>
Para testes de integração poderiamos seguir a seguinte abordagem....



###  Discuta como você lidaria com cenários de cache em um ambiente distribuído.
O **Redis** é uma excelente opção para armazenar dados temporários compartilhados entre instâncias da aplicação. Ele permite armazenar pares chave-valor e oferece bloqueios distribuídos para garantir consistência.
#### Principais vantagens:<br>
- Compartilhado entre múltiplos servidores;
- Expiração automática de cache;
- Suporte a bloqueios distribuídos (com SETNX e EXPIRE).
<br><br>

# Perguntas teóricas sobre a função desenvolvida:

## Explique como o sistema de cache foi implementado na sua função. Quais são os benefícios e os trade-offs dessa abordagem?

**Cache de Resultados:**
O cache é implementado usando um array associativo ($cacheArray).
Cada entrada do array é indexada por uma chave gerada via md5(json_encode($arrayInteiros)), garantindo uma identificação única para cada entrada.

**Otimização com Cache:**
Antes de calcular o maior produto, o código verifica se a resposta já está no cache. Se existir, retorna diretamente o valor armazenado.
Caso contrário, o cálculo é realizado e o resultado é salvo no cache para futuras chamadas.


**Garantia de Thread-Safety:**
Em ambientes concorrentes, o uso de flock() (File Locking) impede acessos simultâneos ao cache.
LOCK_EX bloqueia a leitura/escrita para garantir exclusividade.
LOCK_UN libera o bloqueio após a operação, evitando deadlocks.
<br>

## Como você garantiria que o sistema de cache é thread-safe? Forneça um exemplo ou explique a abordagem que você seguiria.
Em ambientes concorrentes, o uso de flock() (File Locking) impede acessos simultâneos ao cache.
LOCK_EX bloqueia a leitura/escrita para garantir exclusividade.
LOCK_UN libera o bloqueio após a operação, evitando deadlock

## Descreva um plano de testes detalhado para essa função. Que casos de teste você criaria e por quê?
Nesse primeiro momento optei por uma abordagem simples nos testes.<br>
Optei por testes unitários para verificar números positivos, negativos, mistos(array com números positivos e negativos), arrays pequenos (com 2 elementos) e grandes (até mil elementos).

## Como você lidaria com o cache em um ambiente distribuído? Quais ferramentas ou técnicas você usaria?
O **Redis** é uma excelente opção para armazenar dados temporários compartilhados entre instâncias da aplicação. Ele permite armazenar pares chave-valor e oferece bloqueios distribuídos para garantir consistência.
#### Principais vantagens:<br>
- Compartilhado entre múltiplos servidores;
- Expiração automática de cache;
- Suporte a bloqueios distribuídos (com SETNX e EXPIRE).
<br><br>

## Discuta a complexidade do seu algoritmo em termos de tempo e espaço. Há maneiras de melhorá-lo?
Nesse primeiro momento considero que a complexidade é simples. Como estou utilizando funções nativas do PHP (flock(), LOCK_EX e LOCK_UN), não foi necessário construir funções personalizadas para executar os tratamentos necessários.<br> 
Podemos sim melhorar esse código. No futuro podemos permitir que os valores contidos no array sejam inseridos pelo usuário. Atualmente o Hash para indexar e identificar as entradas do array é gerado criptografado em md5. Podemos evoluir a criptrogafia para Sha1, por exemplo.