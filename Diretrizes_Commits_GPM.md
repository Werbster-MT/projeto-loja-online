
# Diretrizes de Commits

Este documento tem como objetivo demonstrar e criar um padrão de commits para o projeto **GPM**.

**Nota**: Todas as informações aqui apresentadas são uma compilação baseada em fontes como:
- [freecodecamp](https://www.freecodecamp.org/news/writing-good-commit-messages-a-practical-guide/)
- [mokkaps](https://www.mokkapps.de/blog/how-to-automatically-generate-a-helpful-changelog-from-your-git-commit-messages/)
- [conventionalcommits](https://www.conventionalcommits.org/en/v1.0.0-beta.2/)

## Por que usar Commits Convencionais?

- Geração automática de arquivos **CHANGELOG**.
- Determina automaticamente incrementos de versão semântica (baseado nos tipos de commits realizados).
- Facilita a comunicação de mudanças entre equipes e stakeholders.
- Dispara processos de build e publicação automáticos.
- Torna mais fácil a contribuição de outras pessoas no projeto, permitindo um histórico de commits mais estruturado.

## Estrutura da Mensagem de Commit

Os commits devem seguir a estrutura:

```shell
[type][escopo opcional]: <descrição>

[corpo opcional]

[rodapé opcional]
```

### Tipos de Commits

- **feat**: Uma nova funcionalidade.
- **fix**: Correção de bug no código.
- **docs**: Alterações ou inclusões na documentação.
- **style**: Alterações de estilo (ex.: espaços, ponto e vírgula, etc.).
- **refactor**: Refatoração de código sem alterações funcionais.
- **test**: Adição ou modificação de testes.
- **chore**: Outras alterações (ex.: configurações ou atualizações de dependências).

### Escopo Opcional

O escopo do commit, quando usado, deve estar entre colchetes para indicar o contexto. Exemplo:

```shell
[feat][auth]: Adicionar autenticação via OAuth.
```

## Regras para Escrever Bons Commits

1. Especifique o tipo de commit.
2. Separe o título do corpo com uma linha em branco.
3. Não inclua espaços em branco desnecessários.
4. Remova pontuações desnecessárias.
5. Não finalize a linha do título com um ponto.
6. Use letra maiúscula no título e em cada parágrafo.
7. Use o modo imperativo no título.
8. Explique no corpo o que foi alterado e o motivo.
9. Não presuma que o revisor entende o problema original.
10. Evite pensar que o código é autoexplicativo.
11. Siga as convenções de commits definidas pelo time.

## Exemplos

### Correção de bug

```shell
git commit -m "fix: Corrigir conversão little para endian no comando de pareamento."
```

### Nova funcionalidade

```shell
git commit -m "feat: Implementar parser para comandos de pareamento."
```

### Refatoração

```shell
git commit -m "refactor: Refatorar base de código para corrigir avisos do PyCharm."
```

### Testes

```shell
git commit -m "test: Adicionar testes unitários para protocolo RIEW."
```

### Documentação

```shell
git commit -m "docs: Adicionar documentação da API SCPI."
```

### Manutenção

```shell
git commit -m "chore: Atualizar código ABNT para manter compatibilidade."
```

## Geração de Notas de Versão

É possível gerar notas de versão a partir das mensagens de commit utilizando comandos básicos de shell (git/grep). Para mais detalhes, siga os passos descritos neste [link](https://blogs.sap.com/2018/06/22/generating-release-notes-from-git-commit-messages-using-basic-shell-commands-gitgrep/).

Depois de escrever os resultados em um arquivo, é possível associá-los a uma tag com o comando:

```shell
git tag -a <minha_tag> -F <caminho_do_arquivo>
```

## FAQ

### E se eu usar o tipo de commit errado?

Se o erro for identificado antes da merge ou release, use o comando `git rebase -i` para editar o histórico. Após a release, o processo de correção dependerá das ferramentas e processos adotados.

### E se o commit não seguir o padrão?

No pior cenário, o commit não será identificado por ferramentas que utilizam a especificação de commits convencionais.

### E se um commit se aplicar a mais de um tipo?

Sempre que possível, divida o commit em partes menores e mais organizadas.
