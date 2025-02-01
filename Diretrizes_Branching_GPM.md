
# Diretrizes de Branching para o GPM

Essas diretrizes de branching foram desenvolvidas para criar um padrão comum de nomenclatura e estratégia no uso de branches no projeto **GPM**.
O sistema de controle de versão adotado é o Git.

## Tipos de Branch

Os tipos de branch são:

| Tipo de Branch     | Descrição                                                                 | Abrev |
|--------------------|-----------------------------------------------------------------------------|-------|
| **Branch de Tópico** | Uma branch destinada a ser mesclada à sua branch pai                              | tpc   |
| **Branch de Entrega** | Branch criada para gerar uma imagem ou versão destinada a stakeholders            | dlv   |
| **Branch Experimental** | Branch para experimentar funcionalidades, bibliotecas ou mudanças arquiteturais | exp   |

## Ciclo de Vida da Branch

Os ciclos de vida das branches são:

| Ciclo de Vida       | Descrição                                                                 | Abrev |
|---------------------|-----------------------------------------------------------------------------|-------|
| **Eterno Vinculado**| Branch que não deve ser mesclada a nenhuma outra, mas pode receber merges          | ett   |
| **Eterno Independente** | Branch que não será mesclada em nenhuma outra e continuará independente               | etu   |
| **Próxima Versão**   | Branch destinada a ser mesclada antes do próximo ciclo de lançamento                | nr    |
| **Versão Futura**   | Branch destinada a ser mesclada em um ciclo de lançamento futuro                   | fr    |

## Propósitos de Branch

Os propósitos das branches são:

| Propósito        | Descrição                                                                             | Abrev |
|-------------------|---------------------------------------------------------------------------------|-------|
| **Disponibilidade** | Branch criada para lançar uma versão para stakeholders                                | avl   |
| **Correção de Bug 1** | Branch criada para corrigir um bug identificado pela equipe de desenvolvimento        | b1    |
| **Correção de Bug 2** | Branch criada para corrigir um bug identificado pela equipe de QA                     | b2    |
| **Correção de Bug 3** | Branch criada para corrigir um bug identificado por outra parte interessada            | b3    |
| **Funcionalidade** | Branch criada para implementar uma nova funcionalidade no projeto                           | feat  |
| **Arquitetura**   | Branch criada para implementações arquiteturais que não afetam funcionalidades específicas  | arch  |
| **Documentação**    | Branch criada exclusivamente para documentação                                         | doc   |

## Descrição da Branch

A descrição da branch deve ser curta e concisa, resumindo rapidamente o propósito da branch.
Ela é separada por barras `/` e segue o formato:

```
{$verbo}-{$oque}-{$preposição}-{$complemento}
```

Os últimos dois elementos são opcionais, podendo ser reduzida para:
```
{$verbo}-{$oque}
```

### Verbo

Os verbos possíveis são:
- add (adicionar)
- remove (remover)
- update (atualizar)
- change (alterar)
- correct (corrigir)
- adapt (adaptar)
- build (construir)
- rebase (rebasear)
- put (inserir)
- refactor (refatorar)
- test (testar)
- delivery (entregar)
- document (documentar)

### O Quê

Não há uma lista fixa para "o quê". Alguns exemplos:
- feature-ABC
- bug-XYZ
- arquivos-do-projeto
- controller-MVC

### Preposição e Complemento

A preposição e o complemento podem variar. Exemplos:
- to (para)
- in (em)
- inside (dentro)
- of (de)

## Convenção de Nomes de Branch

A convenção de nomes segue o formato:

```
{$tipo}/{$ciclo-de-vida}/{$propósito}/{$descrição}
```

### Exemplos:

- tpc/nr/arch/add-initial-arch-to-project
- tpc/nr/arch/test-controller
- tpc/nr/b1/add-missing-project-file
- tpc/nr/feat/add-module-to-CI
- dlv/ett/avl/build-component-for-BaseController
