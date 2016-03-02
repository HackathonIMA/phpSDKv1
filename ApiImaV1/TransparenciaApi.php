<?php

namespace ApiImaV1;

class TransparenciaApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * queryfiltroAcao
   *
   * Consulta das aÃ§Ãµes da preifeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[AcoesResponse]
   */
   public function queryfiltroAcao($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling queryfiltroAcao');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling queryfiltroAcao');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling queryfiltroAcao');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling queryfiltroAcao');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/acoes";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[AcoesResponse]');
      return $responseObject;
  }
  
  /**
   * queryfiltroAcao2
   *
   * Consulta da aÃ§Ã£o da preifeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return AcoesResponse
   */
   public function queryfiltroAcao2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling queryfiltroAcao2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling queryfiltroAcao2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling queryfiltroAcao2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling queryfiltroAcao2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling queryfiltroAcao2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/acoes/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'AcoesResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpCredor
   *
   * Consulta de credores.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[CredorResponse]
   */
   public function ptrLkpCredor($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpCredor');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpCredor');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpCredor');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpCredor');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/credores";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[CredorResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpCredor2
   *
   * Consulta de credor.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return CredorResponse
   */
   public function ptrLkpCredor2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpCredor2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpCredor2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpCredor2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpCredor2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpCredor2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/credores/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'CredorResponse');
      return $responseObject;
  }
  
  /**
   * ptrFtDespesa
   *
   * Consulta de despesas da prefeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $ano_exercicio Ano de exercÃ­cio (required)
   * @param string $acao AÃ§Ã£o, lista disponÃ­vel em GET /transparencia/acoes (required)
   * @param string $mes MÃªs desejado (required)
   * @param string $orgao OrgÃ£os, lista disponÃ­vel em GET /transparencia/unidadesGestoras (required)
   * @param string $funcao FunÃ§Ã£o, lista disponÃ­vel em GET /transparencia/funcoes (required)
   * @param string $subfuncao Sub-funÃ§Ã£o, lista disponÃ­vel em GET /transparencia/subfuncoes (required)
   * @param string $programa Programa, lista disponÃ­vel em GET /transparencia/programas (required)
   * @param string $origem_fonte Origem das fontes, lista disponÃ­vel em GET /transparencia/fontesDetalhadas (required)
   * @param string $fonte Fontes, lista disponÃ­vel em GET /transparencia/fontes (required)
   * @param string $natureza_despesa Natureza da despesa, lista disponÃ­vel em GET /transparencia/subItensContas (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return array[DespesasResponse]
   */
   public function ptrFtDespesa($access_token, $client_id, $offset, $limit, $ano_exercicio, $acao, $mes, $orgao, $funcao, $subfuncao, $programa, $origem_fonte, $fonte, $natureza_despesa, $expand) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrFtDespesa');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrFtDespesa');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrFtDespesa');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrFtDespesa');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/despesas";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($ano_exercicio !== null) {
        $queryParams['anoExercicio'] = $this->apiClient->toQueryValue($ano_exercicio);
      }// query params
      if($acao !== null) {
        $queryParams['acao'] = $this->apiClient->toQueryValue($acao);
      }// query params
      if($mes !== null) {
        $queryParams['mes'] = $this->apiClient->toQueryValue($mes);
      }// query params
      if($orgao !== null) {
        $queryParams['orgao'] = $this->apiClient->toQueryValue($orgao);
      }// query params
      if($funcao !== null) {
        $queryParams['funcao'] = $this->apiClient->toQueryValue($funcao);
      }// query params
      if($subfuncao !== null) {
        $queryParams['subfuncao'] = $this->apiClient->toQueryValue($subfuncao);
      }// query params
      if($programa !== null) {
        $queryParams['programa'] = $this->apiClient->toQueryValue($programa);
      }// query params
      if($origem_fonte !== null) {
        $queryParams['origemFonte'] = $this->apiClient->toQueryValue($origem_fonte);
      }// query params
      if($fonte !== null) {
        $queryParams['fonte'] = $this->apiClient->toQueryValue($fonte);
      }// query params
      if($natureza_despesa !== null) {
        $queryParams['naturezaDespesa'] = $this->apiClient->toQueryValue($natureza_despesa);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[DespesasResponse]');
      return $responseObject;
  }
  
  /**
   * ptrFtDespesa2
   *
   * Consulta de uma despesa da prefeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return DespesasResponse
   */
   public function ptrFtDespesa2($id, $access_token, $client_id, $expand) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrFtDespesa2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrFtDespesa2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrFtDespesa2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/despesas/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'DespesasResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpElementoDespesa
   *
   * Consulta das despesas dos elementos da preifeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[ElementoDespesaResponse]
   */
   public function ptrLkpElementoDespesa($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpElementoDespesa');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpElementoDespesa');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpElementoDespesa');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpElementoDespesa');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/elementos";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[ElementoDespesaResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpElementoDespesa2
   *
   * Consulta da despesa do elemento da preifeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return ElementoDespesaResponse
   */
   public function ptrLkpElementoDespesa2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpElementoDespesa2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpElementoDespesa2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpElementoDespesa2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpElementoDespesa2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpElementoDespesa2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/elementos/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'ElementoDespesaResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpNe
   *
   * Consulta das despesas dos elementos da preifeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[EmpenhoResponse]
   */
   public function ptrLkpNe($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpNe');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpNe');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpNe');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpNe');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/empenhos";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[EmpenhoResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpNe2
   *
   * Consulta da despesa do elemento da preifeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return EmpenhoResponse
   */
   public function ptrLkpNe2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpNe2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpNe2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpNe2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpNe2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpNe2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/empenhos/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'EmpenhoResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpFonteDetalhada
   *
   * Consulta de contas das fontes da prefeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return array[FontesResponse]
   */
   public function ptrLkpFonteDetalhada($access_token, $client_id, $offset, $limit, $expand) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpFonteDetalhada');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpFonteDetalhada');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpFonteDetalhada');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpFonteDetalhada');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/fontes";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[FontesResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpFonteDetalhada2
   *
   * Consulta de conta da fonte da prefeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return FontesResponse
   */
   public function ptrLkpFonteDetalhada2($id, $access_token, $client_id, $offset, $limit, $expand) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpFonteDetalhada2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpFonteDetalhada2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpFonteDetalhada2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpFonteDetalhada2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpFonteDetalhada2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/fontes/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'FontesResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpFonte
   *
   * Consulta das receitas das fontes detalhadas da prefeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[FonteDetalhadaResponse]
   */
   public function ptrLkpFonte($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpFonte');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpFonte');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpFonte');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpFonte');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/fontesDetalhadas";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[FonteDetalhadaResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpFonte2
   *
   * Consulta da receita da fonte detalhada da prefeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return FonteDetalhadaResponse
   */
   public function ptrLkpFonte2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpFonte2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpFonte2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpFonte2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpFonte2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpFonte2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/fontesDetalhadas/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'FonteDetalhadaResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpFuncao
   *
   * Consulta das funÃ§Ãµes da preifeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[FuncoesResponse]
   */
   public function ptrLkpFuncao($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpFuncao');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpFuncao');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpFuncao');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpFuncao');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/funcoes";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[FuncoesResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpFuncao2
   *
   * Consulta da funÃ§Ã£o da preifeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return FuncoesResponse
   */
   public function ptrLkpFuncao2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpFuncao2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpFuncao2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpFuncao2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpFuncao2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpFuncao2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/funcoes/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'FuncoesResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpSubalineaReceita
   *
   * Consulta de contas das naturezas das receitas da prefeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return array[NaturezasResponse]
   */
   public function ptrLkpSubalineaReceita($access_token, $client_id, $offset, $limit, $expand) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpSubalineaReceita');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpSubalineaReceita');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpSubalineaReceita');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpSubalineaReceita');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/naturezas";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[NaturezasResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpSubalineaReceita2
   *
   * Consulta de conta da natureza da receita da prefeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return NaturezasResponse
   */
   public function ptrLkpSubalineaReceita2($id, $access_token, $client_id, $offset, $limit, $expand) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpSubalineaReceita2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpSubalineaReceita2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpSubalineaReceita2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpSubalineaReceita2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpSubalineaReceita2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/naturezas/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'NaturezasResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpPrograma
   *
   * Consulta dos programas da preifeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[ProgramaResponse]
   */
   public function ptrLkpPrograma($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpPrograma');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpPrograma');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpPrograma');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpPrograma');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/programas";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[ProgramaResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpPrograma2
   *
   * Consulta do programa da preifeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return ProgramaResponse
   */
   public function ptrLkpPrograma2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpPrograma2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpPrograma2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpPrograma2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpPrograma2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpPrograma2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/programas/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'ProgramaResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpProjetoAtividade
   *
   * Consulta dos projetos e atividades da preifeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return array[ProjetoAtividadeResponse]
   */
   public function ptrLkpProjetoAtividade($access_token, $client_id, $offset, $limit, $expand) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpProjetoAtividade');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpProjetoAtividade');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpProjetoAtividade');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpProjetoAtividade');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/projetosAtividades";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[ProjetoAtividadeResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpProjetoAtividade2
   *
   * Consulta do projeto e atividade da preifeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return ProjetoAtividadeResponse
   */
   public function ptrLkpProjetoAtividade2($id, $access_token, $client_id, $offset, $limit, $expand) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpProjetoAtividade2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpProjetoAtividade2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpProjetoAtividade2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpProjetoAtividade2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpProjetoAtividade2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/projetosAtividades/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'ProjetoAtividadeResponse');
      return $responseObject;
  }
  
  /**
   * ptrFtReceita
   *
   * Consulta das receitas da prefeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $ano Ano de exercÃ­cio (required)
   * @param string $mes MÃªs desejado (required)
   * @param string $unidade Unidades, lista disponÃ­vel em GET /transparencia/unidades (required)
   * @param string $natureza Natureza das receitas, lista disponÃ­vel em GET /transparencia/naturezas (required)
   * @return array[ReceitaResponse]
   */
   public function ptrFtReceita($access_token, $client_id, $offset, $limit, $ano, $mes, $unidade, $natureza) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrFtReceita');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrFtReceita');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrFtReceita');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrFtReceita');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/receitas";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($ano !== null) {
        $queryParams['ano'] = $this->apiClient->toQueryValue($ano);
      }// query params
      if($mes !== null) {
        $queryParams['mes'] = $this->apiClient->toQueryValue($mes);
      }// query params
      if($unidade !== null) {
        $queryParams['unidade'] = $this->apiClient->toQueryValue($unidade);
      }// query params
      if($natureza !== null) {
        $queryParams['natureza'] = $this->apiClient->toQueryValue($natureza);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[ReceitaResponse]');
      return $responseObject;
  }
  
  /**
   * ptrFtReceita2
   *
   * Consulta da receita da prefeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $ano Ano de exercÃ­cio, lista disponÃ­vel em GET /transparencia/anosExercicioReceita (required)
   * @param string $mes MÃªs desejado (required)
   * @param string $unidade Unidades, lista disponÃ­vel em GET /transparencia/unidades (required)
   * @param string $natureza Natureza das receitas, lista disponÃ­vel em GET /transparencia/naturezas (required)
   * @return ReceitaResponse
   */
   public function ptrFtReceita2($id, $access_token, $client_id, $offset, $limit, $ano, $mes, $unidade, $natureza) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrFtReceita2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrFtReceita2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrFtReceita2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrFtReceita2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrFtReceita2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/receitas/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($ano !== null) {
        $queryParams['ano'] = $this->apiClient->toQueryValue($ano);
      }// query params
      if($mes !== null) {
        $queryParams['mes'] = $this->apiClient->toQueryValue($mes);
      }// query params
      if($unidade !== null) {
        $queryParams['unidade'] = $this->apiClient->toQueryValue($unidade);
      }// query params
      if($natureza !== null) {
        $queryParams['natureza'] = $this->apiClient->toQueryValue($natureza);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'ReceitaResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpSubitemConta
   *
   * Consulta dos sub-itens das contas.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[SubItensContasResponse]
   */
   public function ptrLkpSubitemConta($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpSubitemConta');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpSubitemConta');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpSubitemConta');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpSubitemConta');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/subItensContas";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[SubItensContasResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpSubitemConta2
   *
   * Consulta do sub-item das contas.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return SubItensContasResponse
   */
   public function ptrLkpSubitemConta2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpSubitemConta2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpSubitemConta2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpSubitemConta2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpSubitemConta2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpSubitemConta2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/subItensContas/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'SubItensContasResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpSubfuncao
   *
   * Consulta das sub-funÃ§Ãµes da preifeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[SubfuncoesResponse]
   */
   public function ptrLkpSubfuncao($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpSubfuncao');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpSubfuncao');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpSubfuncao');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpSubfuncao');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/subfuncoes";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[SubfuncoesResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpSubfuncao2
   *
   * Consulta da sub-funÃ§Ã£o da preifeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return SubfuncoesResponse
   */
   public function ptrLkpSubfuncao2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpSubfuncao2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpSubfuncao2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpSubfuncao2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpSubfuncao2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpSubfuncao2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/subfuncoes/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'SubfuncoesResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpTipoLicitacao
   *
   * Consulta dos tipos de licitaÃ§Ãµes.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[TipoLicitacoesResponse]
   */
   public function ptrLkpTipoLicitacao($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpTipoLicitacao');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpTipoLicitacao');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpTipoLicitacao');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpTipoLicitacao');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/tipoLicitacoes";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[TipoLicitacoesResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpTipoLicitacao2
   *
   * Consulta do tipo de licitaÃ§Ã£o.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return TipoLicitacoesResponse
   */
   public function ptrLkpTipoLicitacao2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpTipoLicitacao2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpTipoLicitacao2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpTipoLicitacao2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpTipoLicitacao2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpTipoLicitacao2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/tipoLicitacoes/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'TipoLicitacoesResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpUnidadeOrcamentaria
   *
   * Consulta das unidades da preifeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return array[UnidadesResponse]
   */
   public function ptrLkpUnidadeOrcamentaria($access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpUnidadeOrcamentaria');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpUnidadeOrcamentaria');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpUnidadeOrcamentaria');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpUnidadeOrcamentaria');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/unidades";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[UnidadesResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpUnidadeOrcamentaria2
   *
   * Consulta da unidade da preifeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @return UnidadesResponse
   */
   public function ptrLkpUnidadeOrcamentaria2($id, $access_token, $client_id, $offset, $limit) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpUnidadeOrcamentaria2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpUnidadeOrcamentaria2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpUnidadeOrcamentaria2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpUnidadeOrcamentaria2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpUnidadeOrcamentaria2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/unidades/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'UnidadesResponse');
      return $responseObject;
  }
  
  /**
   * ptrLkpUnidadeGestora
   *
   * Consulta de contas das unidades gestoras da prefeitura.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return array[UnidadeGestoraResponse]
   */
   public function ptrLkpUnidadeGestora($access_token, $client_id, $offset, $limit, $expand) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpUnidadeGestora');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpUnidadeGestora');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpUnidadeGestora');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpUnidadeGestora');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/unidadesGestoras";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[UnidadeGestoraResponse]');
      return $responseObject;
  }
  
  /**
   * ptrLkpUnidadeGestora2
   *
   * Consulta de conta da unidade gestora da prefeitura.
   *
   * @param string $id Identificador do registro. (required)
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $expand ParÃ¢metro utilizado para obter maiores detalhes sobre algum dos atributos do recurso. Podendo ser passados mÃºltiplos campos separados por vÃ­rgula (required)
   * @return UnidadeGestoraResponse
   */
   public function ptrLkpUnidadeGestora2($id, $access_token, $client_id, $offset, $limit, $expand) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling ptrLkpUnidadeGestora2');
      }
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling ptrLkpUnidadeGestora2');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling ptrLkpUnidadeGestora2');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling ptrLkpUnidadeGestora2');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling ptrLkpUnidadeGestora2');
      }
      

      // parse inputs
      $resourcePath = "/transparencia/unidadesGestoras/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($offset !== null) {
        $queryParams['offset'] = $this->apiClient->toQueryValue($offset);
      }// query params
      if($limit !== null) {
        $queryParams['limit'] = $this->apiClient->toQueryValue($limit);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      // header params
      if($access_token !== null) {
        $headerParams['access-token'] = $this->apiClient->toHeaderValue($access_token);
      }// header params
      if($client_id !== null) {
        $headerParams['client_id'] = $this->apiClient->toHeaderValue($client_id);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array();

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'UnidadeGestoraResponse');
      return $responseObject;
  }
  

}
