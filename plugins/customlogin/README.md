# ST-Custom Login 2.2.1

Plugin para personalizar a tela de autenticação e a identidade visual interna do GLPI sem alterar arquivos do core.

## Compatibilidade declarada

- GLPI `10.0.10` até `10.0.x`;
- GLPI `11.0.x`;
- limite máximo exclusivo: GLPI `< 12.0.0`;
- PHP `>= 8.3`;
- extensão PHP `fileinfo`.

A mesma distribuição atende GLPI 10 e GLPI 11. Antes da produção, homologue o pacote em uma cópia da instalação real, pois tema, proxy, cache, política de conteúdo, navegador e outros plugins podem influenciar o resultado visual.

## Novidades da versão 2.2.1

Esta é uma atualização visual e de organização da página administrativa. Ela preserva o schema `3.0`, os campos, as imagens e o comportamento funcional da versão 2.2.0.

### Grade de imagens alinhada

A seção **Imagens** passou a utilizar uma grade própria de duas colunas no desktop. Os cartões da mesma linha ocupam a mesma altura, inclusive quando um deles possui avisos, dimensões ou textos adicionais.

A grade organiza:

1. plano de fundo e logotipo da tela de login;
2. logotipo do menu expandido e logotipo do menu recolhido;
3. favicon e cartão institucional da Service TIC.

Em tablets e celulares, os cartões passam automaticamente para uma única coluna, preservando largura, ordem e legibilidade.

### Cartão institucional Service TIC

O espaço livre ao lado do favicon agora contém um cartão institucional com:

- logotipo da Service TIC;
- texto **Desenvolvido por:**;
- endereço `www.servicetic.com.br`;
- QR Code com acesso à página de links da Service TIC.

O cartão ocupa a mesma área do cartão vizinho e usa uma composição horizontal no desktop e vertical em telas menores. Do plugin de referência fornecido foram utilizados exclusivamente o modelo visual e os dois arquivos de imagem institucionais. Nenhuma regra funcional, configuração, banco de dados, hook ou comportamento do plugin de referência foi incorporado.

### Texto administrativo simplificado

O aviso do padrão de fundo continua orientando as resoluções aceitas e o uso de WEBP/JPEG, mas não exibe mais a frase solicitada sobre a remoção da antiga opção de posição do fundo.

## Recursos principais

### Plano de fundo padronizado em 16:9

Novos uploads de fundo aceitam somente uma destas resoluções:

- `1920×1080` — Full HD, recomendada;
- `2560×1440` — QHD, frequentemente chamada de 2K;
- `3840×2160` — UHD/4K.

O fundo utiliza sempre:

```css
background-position: center center;
background-size: cover;
```

São aceitos PNG, JPEG e WEBP, com limite de 12 MB. Para melhor desempenho, prefira WEBP ou JPEG em `1920×1080`.

Uma imagem legada com outra dimensão permanece disponível após a atualização para evitar quebra visual. Quando ela for substituída, o novo arquivo precisará seguir uma das três resoluções padronizadas.

### Painel de login à esquerda, centralizado ou à direita

O campo **Posição do painel de login** possui três opções:

- Esquerda;
- Centralizada;
- Direita.

Em telas pequenas, o painel é centralizado automaticamente para preservar a usabilidade e impedir cortes laterais.

### Efeito opcional no menu lateral

A opção **Ativar efeito no menu lateral** aplica uma aparência isolada ao menu vertical autenticado, sem alterar permissões, itens, links, conteúdo principal ou tela de login.

O efeito inclui:

- fundo com profundidade e sombra lateral;
- itens principais em formato de cartão;
- destaque do menu aberto e do item selecionado;
- movimento discreto no `hover`;
- submenu em painel e coluna única;
- tratamento do menu recolhido;
- scrollbar integrada ao tema;
- respeito a `prefers-reduced-motion`.

Há sete variações:

1. Service TIC — grafite e âmbar;
2. Oceano — azul corporativo;
3. Esmeralda — verde tecnológico;
4. Violeta — roxo moderno;
5. Ciano — azul luminoso;
6. Rubi — vermelho executivo;
7. Grafite — monocromático.

O efeito permanece desativado por padrão.

### Personalizações preservadas

- logotipo da autenticação dentro do painel branco;
- título e subtítulo personalizados;
- ocultação ou renomeação de “Faça login para sua conta”;
- rodapé personalizado;
- cor principal e escurecimento do fundo;
- favicon em PNG, JPEG, WEBP ou ICO;
- logotipo interno do menu expandido;
- logotipo interno do menu recolhido, com fallback para a imagem expandida;
- carregamento dos recursos na página anônima do GLPI 10/11;
- correção de CSRF específica para GLPI 10 e GLPI 11;
- proteção contra a regressão da issue #12;
- armazenamento privado e endpoints somente leitura.

## Instalação nova

O ZIP possui uma única pasta raiz chamada `customlogin`.

```bash
cd /caminho/do/glpi/plugins
unzip st-custom-login-2.2.1.zip
chown -R USUARIO_WEB:GRUPO_WEB customlogin
```

Depois, acesse **Configurar > Plug-ins**, instale e ative **ST-Custom Login** e abra a configuração do plugin.

## Atualização da versão 2.2.0 ou anterior

Não desinstale o plugin antes da atualização, porque a desinstalação remove configurações e imagens pertencentes a ele.

1. Faça backup de `plugins/customlogin`.
2. Faça backup de `files/_plugins/customlogin` ou de `GLPI_PLUGIN_DOC_DIR/customlogin`.
3. Desative o plugin no GLPI.
4. Remova ou renomeie completamente a pasta antiga `plugins/customlogin`.
5. Extraia o novo pacote, mantendo o caminho final `plugins/customlogin/setup.php`.
6. No GLPI, execute **Atualizar**, caso a ação seja exibida, e ative o plugin.
7. Limpe o cache do GLPI, o OPcache/PHP-FPM e o cache do navegador.
8. Abra a configuração do plugin e confirme a nova organização visual.

Da versão 2.2.0 para a 2.2.1 não há alteração de schema, novas chaves de configuração ou migração de banco de dados. O schema continua em `3.0`.

## Configuração recomendada do fundo

Para a maioria dos ambientes:

- resolução: `1920×1080`;
- formato: WEBP ou JPEG;
- foco visual: mantenha elementos importantes afastados das bordas;
- painel: escolha esquerda, centro ou direita conforme a composição da imagem;
- escurecimento: ajuste somente o necessário para garantir contraste.

Como o fundo usa `cover`, pode existir corte proporcional em telas com formato diferente de 16:9. O centro da composição é sempre priorizado.

## Armazenamento das imagens personalizadas

O plugin utiliza:

```text
GLPI_PLUGIN_DOC_DIR/customlogin
```

Na instalação padrão:

```text
files/_plugins/customlogin
```

O usuário do servidor web precisa ter permissão de escrita nesse diretório. Os uploads permanecem fora da área pública e são entregues por endpoint validado.

Os arquivos `pics/service_tic_logo.png` e `pics/service_tic_qrcode.png` fazem parte do próprio pacote e são usados somente no cartão institucional da página administrativa.

## Formatos e limites

- fundo: PNG, JPEG ou WEBP; até 12 MB; somente Full HD, QHD/2K ou 4K em 16:9;
- logotipo do login: PNG, JPEG ou WEBP; até 3 MB e 4000×4000;
- logotipos internos: PNG, JPEG ou WEBP; até 3 MB e 4000×4000;
- favicon: PNG, JPEG, WEBP ou ICO; até 1 MB e 1024×1024;
- SVG enviado pelo usuário não é aceito.

Além dos limites do plugin, o PHP deve permitir o arquivo em `upload_max_filesize` e `post_max_size`.

## Segurança

- ACL administrativa `config`/`UPDATE`;
- CSRF validado pelo plugin no GLPI 10 e pelo listener do núcleo no GLPI 11;
- textos tratados como texto simples;
- MIME detectado pelo conteúdo com `fileinfo`;
- dimensões verificadas por `getimagesize`;
- tamanho informado e tamanho real do upload comparados;
- nomes aleatórios e armazenamento privado;
- rejeição de travessia, extensão falsa e links simbólicos externos;
- endpoints somente `GET` e `HEAD`;
- ETag e cabeçalhos de segurança;
- URLs de ativos limitadas à mesma origem no navegador;
- links externos do cartão institucional protegidos por `noopener` e `noreferrer`;
- nenhuma credencial, SQL manual ou alteração no core.

## Diagnóstico rápido

No console do navegador:

```javascript
document.documentElement.dataset.stclVersion
// "2.2.1"

document.documentElement.dataset.stclApplied
// "1"

document.documentElement.dataset.stclLoginAlignment
// "left", "center" ou "right"

document.documentElement.dataset.stclSidebarPreset
// preenchido somente quando o efeito lateral está ativo
```

Para conferir se os recursos foram carregados:

```javascript
[...document.querySelectorAll('script[src], link[rel="stylesheet"]')]
    .map((element) => element.src || element.href)
    .filter((url) => url.includes('/plugins/customlogin/'))
```

## Validação incluída

Execute:

```bash
bash tests/run_all.sh
```

A suíte cobre sintaxe PHP/JavaScript, manifesto, estrutura, segurança, integridade dos recursos institucionais, dimensões reais de imagens, fixtures de GLPI 10/11, ACL, CSRF, redirecionamentos, endpoints, servidor HTTP local e DOM em Chromium.

Na release 2.2.1 foram contabilizadas **851 verificações e asserções aprovadas**, além dos lints, do manifesto e das comparações byte a byte dos recursos duplicados. Consulte `docs/RELATORIO_VALIDACAO.md`.

## Transparência sobre a origem

A linha 2.1.x/2.2.x é uma reimplementação compatível baseada na issue, no comportamento observado, nos materiais fornecidos e nos contratos das APIs do GLPI. Não é apresentada como um patch linha a linha da distribuição 2.0.0 original.

Na versão 2.2.1, o arquivo de referência `stcookies_v3_0_0.zip` foi consultado exclusivamente para reproduzir o bloco institucional solicitado e incorporar a logo e o QR Code correspondentes. Nenhuma funcionalidade do ST Cookies foi reutilizada.

## Licença e créditos

GPL-2.0-or-later. Desenvolvido e mantido pela Service TIC Soluções Tecnológicas, preservando os créditos históricos informados pelo projeto anterior.
