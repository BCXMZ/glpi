# Changelog

## 2.2.1 — 2026-08-14

### Adicionado

- Cartão institucional Service TIC no espaço livre ao lado do favicon.
- Logotipo, site e QR Code institucionais empacotados no plugin.
- Composição horizontal do marketing no desktop e empilhamento automático em telas menores.
- Rótulo acessível e proteção `noopener noreferrer` nos links externos.
- Fixture Chromium dedicada à geometria da grade administrativa.
- Validações de integridade, dimensões e igualdade byte a byte dos recursos institucionais.

### Alterado

- Seção **Imagens** reorganizada em uma grade própria de duas colunas no desktop.
- Cartões da mesma linha passam a ter a mesma largura, altura e alinhamento.
- Áreas de pré-visualização passam a usar dimensões uniformes e `object-fit: contain`.
- Grade administrativa passa para uma coluna antes de o conteúdo ficar comprimido.
- Aviso do padrão de fundo simplificado, preservando somente as orientações de resolução, formato e comportamento visual.
- Versão do plugin atualizada para `2.2.1`.

### Removido

- Frase solicitada sobre a remoção da antiga opção **Posição do fundo** na interface administrativa.

### Escopo do material de referência

- Do pacote `stcookies_v3_0_0.zip` foram utilizados exclusivamente o modelo visual institucional, `service_tic_logo.png` e `service_tic_qrcode.png`.
- Nenhuma funcionalidade, configuração, tabela, hook, JavaScript ou fluxo do ST Cookies foi importado.
- O ST-Custom Login permanece independente e não exige o plugin ST Cookies instalado.

### Compatibilidade e migração

- Mantido o schema interno `3.0`.
- Nenhuma nova chave de configuração, tabela, coluna ou migração de banco de dados.
- Mantidas todas as configurações, imagens, recursos e correções da versão 2.2.0.
- Mantida compatibilidade declarada com GLPI 10.0.10+, GLPI 11.0.x e PHP 8.3+.

### Validação

- 221 validações estruturais e de segurança.
- 198 verificações de setup e compatibilidade GLPI.
- 147 verificações do formulário administrativo, ACL, CSRF e redirecionamentos.
- 10 verificações reais de dimensões de imagem.
- 31 verificações dos endpoints públicos.
- 36 verificações de integração HTTP.
- 208 asserções em Chromium, incluindo as três linhas de cartões e a responsividade do marketing.
- **Total: 851 verificações e asserções aprovadas**, além dos lints, manifesto e comparações de integridade.

## 2.2.0 — 2026-08-14

### Adicionado

- Campo **Posição do painel de login** com as opções esquerda, centralizada e direita.
- Centralização automática do painel em dispositivos móveis.
- Opção **Ativar efeito no menu lateral**, desativada por padrão.
- Sete temas para o mesmo efeito lateral: Service TIC, Oceano, Esmeralda, Violeta, Ciano, Rubi e Grafite.
- Estilo lateral isolado à área autenticada, com cartões, item ativo, hover, painel de submenu, menu recolhido e scrollbar temática.
- Validação real de upload de fundo nas resoluções `1920×1080`, `2560×1440` e `3840×2160`.
- Aviso administrativo para imagens legadas fora das novas dimensões padronizadas.
- Testes específicos de dimensões de imagens e regressões dos novos campos.

### Alterado

- Schema interno elevado para `3.0`.
- Plano de fundo passa a usar comportamento fixo `center center` + `cover`.
- Limite do fundo elevado para 12 MB e 3840×2160.
- A interface recomenda Full HD em WEBP/JPEG para melhor desempenho.
- A configuração pública passa a informar alinhamento do painel e tema/ativação do efeito lateral.
- O tema Service TIC foi adaptado somente da seção de menu lateral do CSS de referência fornecido.

### Removido

- Campo **Posição do fundo**.
- Chave ativa `background_position` do payload e da normalização.
- Valor legado `background_position` é excluído durante a atualização do plugin.

### Compatibilidade e migração

- Mantida compatibilidade declarada com GLPI 10.0.10+, GLPI 11.0.x e PHP 8.3+.
- Imagens de fundo legadas continuam funcionando até serem substituídas.
- Mantidas as configurações e imagens da linha 2.1.x.
- Mantidos os hooks gerais e anônimos, a correção de CSRF GLPI 10/11 e a proteção contra `RedirectException`.

### Validação

- 197 validações estruturais e de segurança.
- 198 verificações de setup e compatibilidade GLPI.
- 147 verificações do formulário administrativo, ACL, CSRF e redirecionamentos.
- 10 verificações reais de dimensões de imagem.
- 31 verificações dos endpoints públicos.
- 36 verificações de integração HTTP.
- 181 asserções em Chromium.
- **Total: 800 verificações e asserções aprovadas**, além dos lints e comparações de integridade.

## 2.1.3 — 2026-08-14

### Adicionado

- Upload independente do logotipo interno para menu recolhido.
- Fallback da logo expandida quando não existe imagem compacta.
- Campo para ocultar ou renomear “Faça login para sua conta”.
- Upload explícito de favicon, incluindo ICO.

### Alterado

- O logotipo do login passou a ser renderizado dentro do painel branco.
- A logo nativa externa passou a ser ocultada somente quando a imagem personalizada está ativa.

## 2.1.2 — 2026-08-14

### Corrigido

- Registro dos hooks `add_css_anonymous_page` e `add_javascript_anonymous_page`.
- Carregamento efetivo da personalização na página anônima do GLPI 11.
- Consulta ao endpoint público de configuração quando `display_login` não é renderizado.
- Neutralização defensiva do logotipo nativo somente quando existe uma imagem personalizada.

## 2.1.1 — 2026-08-14

### Corrigido

- Dupla validação de CSRF no GLPI 11.
- Validação manual preservada no GLPI 10.
- Redirecionamentos removidos do bloco que captura falhas operacionais.
- Mensagens técnicas mantidas somente no log.

## 2.1.0 — 2026-08-14

### Corrigido

- Regressão da issue #12 no GLPI 11.0.8.
- Remoção de manipulação frágil do DOM com `insertBefore`.
- Aplicação idempotente e falha segura.
- Compatibilidade unificada com GLPI 10/11 e PHP 8.3+.
