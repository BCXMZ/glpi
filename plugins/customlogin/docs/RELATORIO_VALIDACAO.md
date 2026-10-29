# Relatório de validação — ST-Custom Login 2.2.1

## 1. Escopo da release

A versão 2.2.1 é uma atualização administrativa e visual sobre a 2.2.0. Ela implementa:

- remoção do texto desnecessário sobre a antiga opção **Posição do fundo**;
- grade de duas colunas para os cartões da seção **Imagens**;
- altura uniforme entre os cartões da mesma linha;
- pré-visualizações com tamanho e comportamento padronizados;
- cartão institucional da Service TIC ao lado do favicon;
- responsividade da grade e do cartão institucional;
- manutenção de todos os recursos, migrações e controles de segurança da 2.2.0.

O schema interno permanece `3.0`. A atualização da 2.2.0 para a 2.2.1 não adiciona tabela, coluna, chave de configuração ou migração de banco.

## 2. Material de referência utilizado

O pacote `stcookies_v3_0_0.zip` foi inspecionado apenas para reproduzir o bloco institucional solicitado.

Foram utilizados exclusivamente:

- `pics/service_tic_logo.png` — PNG, `945×945`;
- `pics/service_tic_qrcode.png` — PNG, `128×130`;
- o modelo composto por logotipo, texto “Desenvolvido por:”, site e QR Code;
- os endereços `https://www.servicetic.com.br` e `https://servicetic.com.br/links`.

Não foram incorporados hooks, classes, configurações, tabelas, JavaScript, CSS do consentimento, rotas, lógica de instalação ou qualquer outra funcionalidade do ST Cookies. O ST-Custom Login não possui dependência funcional desse plugin.

## 3. Alterações da interface administrativa

### 3.1 Texto removido

A frase abaixo deixou de ser renderizada:

```text
por isso a antiga opção “Posição do fundo” foi removida
```

A orientação permanece limitada às resoluções 16:9 aceitas, ao formato recomendado e ao comportamento centralizado do fundo.

### 3.2 Grade e alinhamento

A composição anterior foi substituída por:

- `.stcl-assets-grid` com duas colunas equivalentes;
- `align-items: stretch`;
- `.stcl-assets-grid-item` com `display: flex` e `min-width: 0`;
- cartões com `width: 100%`, `height: 100%` e a mesma altura mínima;
- `gap` uniforme entre linhas e colunas.

Essa estrutura mantém alinhados os pares:

1. plano de fundo e logotipo da tela de login;
2. logotipo interno expandido e logotipo interno recolhido;
3. favicon e marketing institucional.

### 3.3 Pré-visualização

No desktop, as áreas de prévia usam `170×170`, plano quadriculado e `object-fit: contain`. Dessa forma, imagens horizontais, verticais ou quadradas permanecem inteiras e não alteram a geometria dos cartões.

No celular, a prévia passa a ocupar a largura disponível e a grade utiliza uma única coluna.

### 3.4 Cartão institucional

O cartão contém:

- rótulo acessível `Desenvolvido pela Service TIC`;
- logotipo local com texto alternativo;
- “Desenvolvido por:”;
- link para o site oficial;
- QR Code local com texto alternativo e link para a página de links;
- `rel="noopener noreferrer"` nos links externos.

No desktop, marca e informações ficam lado a lado. Em telas pequenas, o conteúdo é empilhado e centralizado.

## 4. Compatibilidade declarada

| Componente | Faixa | Resultado da fixture |
|---|---:|---|
| GLPI 10.0.9 | incompatível | rejeitado como esperado |
| GLPI 10.0.10 | compatível | aceito |
| GLPI 10.0.26 | compatível | aceito |
| GLPI 11.0.7 | compatível | aceito |
| GLPI 11.0.8 | compatível | aceito |
| GLPI 12.0.0 | não validado | rejeitado pelo limite máximo exclusivo |
| PHP | `>= 8.3` | requisito conferido; suíte executada em PHP 8.4.23 |

## 5. Recursos anteriores preservados

A suíte de regressão continuou cobrindo:

- fundo Full HD, QHD/2K ou 4K em 16:9;
- comportamento `center center` + `cover`;
- painel de login à esquerda, centralizado ou à direita;
- centralização automática em dispositivos móveis;
- sete temas opcionais do menu lateral;
- isolamento do efeito à área autenticada;
- logotipo do login dentro do quadro branco;
- ocultação ou renomeação do texto de autenticação;
- favicon e logos internas expandida/recolhida;
- hooks gerais e de página anônima;
- endpoint de configuração como fallback;
- correção de CSRF específica para GLPI 10 e GLPI 11;
- propagação correta de `RedirectException` no GLPI 11;
- armazenamento privado, MIME real, dimensões, travessia e symlink;
- endpoints públicos somente `GET` e `HEAD`;
- idempotência e falha segura do JavaScript.

## 6. Ativos institucionais

| Arquivo | Dimensão | SHA-256 |
|---|---:|---|
| `service_tic_logo.png` | 945×945 | `86dd4b7c4a2fcf9ddb5d8418f3884e11b0a408b95669336780b59031efb7525c` |
| `service_tic_qrcode.png` | 128×130 | `f863d483c4ee934ddb847c75b9081bd8b82e1feb2a8740795667380dbda8a6ae` |

As cópias em `pics/` e `public/pics/` foram comparadas byte a byte.

## 7. Ambiente de validação

- PHP CLI `8.4.23`;
- extensão `fileinfo` ativa;
- Node.js `22.16.0`;
- Python `3.13.5`;
- Playwright instalado;
- Chromium `144.0.7559.96`;
- Info-ZIP `3.0`;
- UnZip `6.00`.

A suíte não foi executada dentro da instância de produção do solicitante. Ela utiliza fixtures das APIs do GLPI, servidor HTTP local e Chromium real.

## 8. Resultados da suíte

### 8.1 Sintaxe e manifesto

- `php -l` em 12 arquivos PHP: aprovado;
- `node --check` nas duas cópias JavaScript: aprovado;
- parsing estrito de `composer.json`: aprovado;
- CSS da raiz e de `public/`: idênticos;
- JavaScript da raiz e de `public/`: idênticos;
- imagens institucionais da raiz e de `public/`: idênticas.

### 8.2 Estrutura, interface administrativa e segurança

**221 validações aprovadas.** Cobertura principal:

- estrutura obrigatória e versão 2.2.1;
- requisitos de GLPI/PHP;
- hooks autenticados e anônimos;
- ACL e CSRF;
- ausência das APIs frágeis ou perigosas verificadas;
- remoção da frase solicitada;
- presença da grade administrativa;
- presença dos seis itens da grade;
- cartão institucional, URLs e atributos de segurança;
- estilos de altura uniforme e responsividade;
- existência, dimensões e integridade dos ativos institucionais;
- normalização dos campos anteriores;
- lista fechada dos sete temas;
- armazenamento privado e validação dos uploads;
- payload público e desinstalação limitada ao plugin.

### 8.3 Setup e compatibilidade

| Fixture | Verificações |
|---|---:|
| GLPI 10.0.9 | 30 |
| GLPI 10.0.10 | 30 |
| GLPI 10.0.26 | 30 |
| GLPI 11.0.7 | 36 |
| GLPI 11.0.8 | 36 |
| GLPI 12.0.0 | 36 |
| **Total** | **198** |

### 8.4 Formulário administrativo, ACL, CSRF e redirecionamentos

**147 verificações aprovadas.** Cobertura:

- GLPI 10.0.10, 10.0.26, 11.0.7 e 11.0.8;
- token válido, ausente, inválido e previamente consumido;
- uma única validação CSRF em cada fluxo;
- salvamento das configurações;
- restauração dos padrões;
- acesso sem direito;
- GET, PUT e falhas operacionais;
- `RedirectException` entregue ao kernel no GLPI 11;
- ausência de exposição de detalhes técnicos na interface.

### 8.5 Dimensões reais de upload

**10 verificações aprovadas**, incluindo as três resoluções de fundo aceitas, dimensões rejeitadas, mensagens de erro e garantia de que logotipos comuns não recebem a restrição exclusiva do fundo.

### 8.6 Endpoints públicos

**31 verificações aprovadas.** Cobertura:

- GET, HEAD e rejeição de POST;
- JSON com versão `2.2.1` e schema `3.0`;
- alinhamento e efeito lateral no payload;
- ausência da chave antiga de posição do fundo;
- ETag, 304, 404 e configuração adulterada;
- bytes dos ativos personalizados preservados.

### 8.7 Integração HTTP local

**36 verificações aprovadas.** Cobertura:

- códigos 200, 304, 404 e 405;
- `Allow`, `Content-Type`, `Content-Length`, cache e ETag;
- `nosniff`, CSP e política de mesma origem;
- payload da configuração e bytes do ativo.

### 8.8 Chromium

**208 asserções aprovadas.** Além das regressões da tela de login e do menu lateral, a fixture administrativa confere:

- seis itens na grade: cinco uploads e um cartão institucional;
- duas colunas no desktop;
- uma coluna no celular;
- mesma altura para plano de fundo e logo do login;
- mesma altura para as duas logos internas;
- mesma altura para favicon e marketing;
- logotipo e informações do marketing lado a lado no desktop;
- marketing empilhado no celular;
- rótulo acessível;
- `noopener noreferrer` em ambos os links;
- ausência de overflow horizontal.

## 9. Total contabilizado

| Grupo | Aprovadas |
|---|---:|
| Estrutura, interface administrativa e segurança | 221 |
| Setup e compatibilidade | 198 |
| Formulário/ACL/CSRF/redirecionamentos | 147 |
| Dimensões reais | 10 |
| Endpoints públicos | 31 |
| Integração HTTP | 36 |
| Chromium | 208 |
| **Total** | **851** |

Além das **851 verificações e asserções**, foram aprovados os lints, o manifesto e as comparações de integridade.

## 10. Validação do pacote final

O procedimento aplicado ao release é:

```bash
zip -T st-custom-login-2.2.1.zip
unzip -l st-custom-login-2.2.1.zip
unzip st-custom-login-2.2.1.zip -d DIRETORIO_LIMPO
bash DIRETORIO_LIMPO/customlogin/tests/run_all.sh
diff -qr FONTE/customlogin DIRETORIO_LIMPO/customlogin
sha256sum st-custom-login-2.2.1.zip
```

Critérios:

- uma única pasta raiz `customlogin/`;
- sem caminhos absolutos ou componentes `..`;
- sem entradas duplicadas;
- sem links simbólicos;
- sem `.git`, `__MACOSX`, `__pycache__`, bytecode ou arquivos temporários;
- suíte aprovada depois da extração;
- diferença recursiva vazia entre fonte e pacote.

O resultado final desses passos é registrado nos arquivos externos de log e integridade entregues junto com a release.

## 11. Classificação

A versão 2.2.1 é classificada como **aprovada nas validações automatizadas e pronta para homologação** após a aprovação da fonte e do pacote extraído.

Ela não deve ser classificada como validada em produção até ser instalada em uma cópia real da instância com o mesmo banco, tema, proxy, cache e conjunto de plugins.
