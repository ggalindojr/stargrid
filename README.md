# StarGrid – Teste Desevolvedor(a) Backend N3

## Instruções sobre o conteúdo deste proeto

- Foi criado uma ***migration***, para geração de uma tabela chamada `reports` com os seguintes campos:
  - `external_id` : int
  - `title` : string
  - `url` : string
  - `summary` : string

## Versão do Laravel

Este projeto foi desenvolvido em **Laravel 7**, em que os requests, passam por um tratamento dos dados recebidos para consultar a API abaixo:

**{JSON} Placeholder** https://jsonplaceholder.typicode.com/, haja vista que a api **Space Flight News API**, apresentou instabilidades, ficando fora do ar, no processo de desenvolvimento. 

### ENDPOINTS
Foi desenvolvidos 2 endpoints, cujo retorno é somente JSON:
1- Retornando todos os itens da lista;
2- Retornando apenas o item da lista passado.

### MIDDLEWARE

Foi desenvolvido um `Middleware` com nome de **ValidaIDMiddleware**, a nível de Controlador, responsável em filtrar as consultas a api, restringindo o retorno dos **IDs 2,6,9**.

###Demais informações
- Retorno dos ENDPOINTS foram todos configurados no formato JSON;
- Foi realizado modificações no Controlador ReportController;

## Obrigado