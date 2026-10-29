# Prompt técnico executado — ST-Custom Login 2.2.1

## Contexto

Partir da versão funcional **ST-Custom Login 2.2.0**, mantendo todos os recursos existentes, a pasta `customlogin`, o identificador do plugin, o schema `3.0` e a compatibilidade declarada com GLPI 10, GLPI 11 e PHP 8.3 ou superior.

O solicitante forneceu:

- capturas da página administrativa da versão 2.2.0;
- o pacote `stcookies_v3_0_0.zip`, exclusivamente como referência para o bloco institucional da Service TIC.

## Objetivo

Gerar a versão **2.2.1** com os seguintes ajustes na seção **Imagens** da configuração:

1. Remover a frase:

   > por isso a antiga opção “Posição do fundo” foi removida

2. Corrigir o alinhamento dos cartões de upload, mantendo os cartões da mesma linha com altura uniforme, inclusive quando o cartão do fundo possuir aviso de imagem legada ou quando os cartões de logo possuírem campos adicionais de largura e altura.

3. Utilizar o espaço livre ao lado de **Favicon / ícone do navegador** para incluir o marketing institucional da Service TIC.

4. Fazer o cartão institucional possuir o mesmo tamanho, borda, raio e acabamento visual dos demais cartões.

5. Manter dois cartões por linha no desktop e uma única coluna em telas menores.

## Uso autorizado do plugin de referência

Do pacote `stcookies_v3_0_0.zip`, utilizar somente:

- o modelo visual composto por logotipo, “Desenvolvido por:”, site e QR Code;
- `pics/service_tic_logo.png`;
- `pics/service_tic_qrcode.png`;
- os endereços institucionais já presentes no modelo:
  - `https://www.servicetic.com.br`;
  - `https://servicetic.com.br/links`.

Não copiar nem adaptar qualquer outra parte do ST Cookies. É proibido incorporar:

- hooks;
- tabelas ou migrações;
- configurações;
- JavaScript;
- CSS funcional do aviso de cookies;
- rotas;
- fluxo de consentimento;
- classes PHP;
- lógica de instalação, atualização ou desinstalação.

O ST-Custom Login deve permanecer totalmente independente do ST Cookies.

## Requisitos de interface

### Grade de imagens

- Substituir a composição anterior por uma grade CSS própria.
- Usar duas colunas de largura equivalente no desktop.
- Aplicar `align-items: stretch` na grade e `height: 100%` nos cartões.
- Garantir que cada item possa encolher sem causar overflow horizontal.
- Em resoluções menores que o breakpoint de tablet, usar uma coluna.

### Pré-visualizações

- Usar uma área padronizada para todas as prévias.
- Preservar proporção com `object-fit: contain`.
- Não cortar nem deformar logotipos ou favicon.
- Adaptar a prévia para largura total no celular.

### Marketing institucional

- Posicionar o cartão depois dos cinco cartões de upload, para que ele ocupe a segunda coluna da terceira linha, ao lado do favicon.
- Exibir o logotipo da Service TIC.
- Exibir “Desenvolvido por:”.
- Exibir o link `www.servicetic.com.br`.
- Exibir o QR Code com link para a página de links.
- Usar `target="_blank"` com `rel="noopener noreferrer"`.
- Incluir rótulo acessível no cartão e textos alternativos nas imagens.
- No desktop, manter marca e informações lado a lado.
- No celular, empilhar o conteúdo.
- Servir os ativos localmente, sem hotlink externo.
- Disponibilizar os ativos nos caminhos compatíveis com GLPI 10 e GLPI 11.

## Compatibilidade e segurança que devem ser preservadas

- GLPI `10.0.10` até `10.0.x`.
- GLPI `11.0.x`.
- GLPI `< 12.0.0`.
- PHP `>= 8.3`.
- Nenhuma alteração no core.
- ACL administrativa `config`/`UPDATE`.
- CSRF manual no fluxo do GLPI 10 e validação única pelo núcleo no GLPI 11.
- Correção da issue nº 12.
- Hooks autenticados e anônimos.
- Endpoints públicos somente leitura.
- Uploads privados e validados.
- Ausência de SQL manual.
- Ausência de `insertBefore`, `innerHTML`, `document.write`, `eval`, shell e desserialização insegura.
- URLs dos ativos de aparência limitadas à mesma origem.
- Falha segura: a autenticação nativa deve permanecer utilizável se a personalização não puder ser aplicada.

## Versionamento e migração

- Elevar a versão do plugin para `2.2.1` em setup, JavaScript, CSS, payload, testes e documentação.
- Manter o schema `3.0`.
- Não criar migração de banco ou nova configuração para o marketing.
- Preservar configurações e imagens existentes.
- Não exigir o ST Cookies instalado.

## Validações obrigatórias

1. `php -l` em todos os arquivos PHP.
2. `node --check` nas duas cópias do JavaScript.
3. Parsing estrito de `composer.json`.
4. Comparação byte a byte das cópias CSS e JavaScript.
5. Validação de que a frase removida não existe mais na página administrativa.
6. Validação estrutural da grade e do cartão institucional.
7. Validação das dimensões e hashes dos ativos institucionais nas cópias raiz e pública.
8. Fixtures de setup para GLPI 10.0.9, 10.0.10, 10.0.26, 11.0.7, 11.0.8 e 12.0.0.
9. Regressões de ACL, CSRF, salvamento, restauração e redirecionamento.
10. Validação real de imagens Full HD, QHD/2K, 4K e dimensões rejeitadas.
11. Endpoints GET, HEAD, POST, ETag, 304, 404 e configuração adulterada.
12. Integração HTTP local.
13. Chromium cobrindo:
    - recursos anteriores da tela de login;
    - os três alinhamentos do painel;
    - os sete temas laterais;
    - isolamento do menu;
    - igualdade de altura entre os pares de cartões administrativos;
    - favicon e marketing lado a lado no desktop;
    - conteúdo institucional em duas colunas no desktop;
    - grade e marketing empilhados no celular;
    - ausência de overflow horizontal.
14. ZIP com uma única raiz `customlogin/`.
15. `zip -T`, extração limpa e repetição integral da suíte sobre o pacote extraído.
16. Comparação recursiva entre fonte e pacote extraído.
17. SHA-256 do pacote final.

## Entregáveis

- `st-custom-login-2.2.1.zip`;
- `st-custom-login-2.2.1.sha256`;
- `VALIDACAO-ST-CUSTOM-LOGIN-2.2.1.md`;
- `PROMPT-ST-CUSTOM-LOGIN-2.2.1.md`;
- logs da validação da fonte e do pacote extraído;
- lista do conteúdo do ZIP;
- comparação fonte/pacote;
- README e CHANGELOG atualizados.

## Critério de aprovação

A release somente pode ser classificada como pronta para homologação quando todas as validações forem aprovadas na fonte e novamente após a extração do ZIP, sem caminhos inseguros, links simbólicos, entradas duplicadas, arquivos temporários ou diferenças entre fonte e pacote.
