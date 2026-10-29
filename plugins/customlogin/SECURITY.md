# Política de segurança

## Versão suportada

A linha suportada é `2.2.x`, para GLPI 10.0.10+, GLPI 11.0.x, PHP 8.3 ou superior e extensão `fileinfo`.

## Relato responsável

Não publique credenciais, arquivos internos, caminhos sensíveis ou evidências exploráveis em uma issue pública. Envie o relato para `contato@servicetic.com.br`, informando as versões do GLPI, PHP e plugin, o servidor web e passos mínimos para reprodução.

## Modelo de segurança

O plugin:

- não modifica o core e não executa SQL manual;
- exige ACL administrativa e proteção CSRF para alterações;
- usa o listener CSRF do núcleo no GLPI 11 e valida explicitamente no GLPI 10;
- trata título, subtítulo, texto de autenticação e rodapé como texto simples;
- aceita PNG, JPEG e WEBP nos ativos visuais e também ICO no favicon;
- restringe novos fundos a Full HD, QHD/2K ou 4K em 16:9;
- confere erro do upload, origem HTTP, tamanho informado, tamanho real, MIME, dimensões e conteúdo da imagem;
- revalida o arquivo, o caminho real e o diretório antes de entregá-lo;
- armazena imagens em diretório privado com nomes aleatórios;
- não recebe caminhos físicos de arquivos do cliente;
- expõe somente chaves fixas nos endpoints `GET`/`HEAD`;
- rejeita URLs externas e protocolos ativos no navegador;
- isola o efeito do menu lateral à área autenticada e não modifica ACLs ou itens do menu;
- remove somente arquivos e configurações próprios durante a desinstalação.

## Implantação segura

Mantenha `files/_plugins/customlogin` gravável somente pelo usuário da aplicação web, não publique esse diretório diretamente, use HTTPS e homologue a atualização antes da produção. Faça backup da pasta anterior e das imagens antes de atualizar.

Confirme também que `upload_max_filesize` e `post_max_size` do PHP comportam o tamanho do fundo escolhido.

## Limites de validação

Os testes incluídos cobrem código, fixtures das APIs do GLPI, endpoints, integração HTTP local, validação real de dimensões e DOM em Chromium. Eles não substituem um teste de integração na instância real com servidor web, banco, tema, demais plugins, proxy, cache e política de conteúdo.
