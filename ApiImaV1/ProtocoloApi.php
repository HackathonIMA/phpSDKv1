<?php

namespace ApiImaV1;

class ProtocoloApi {

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
   * protocoloGet
   *
   * Dados sobre protocolo
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $nome_regiao Filtra resultados por Ã¡rea regional. (Exemplo &gt; &#39;NORTE&#39;) (required)
   * @param int $codigo_bairro Filtra resultados por cÃ³digo do bairro. (required)
   * @param string $sigla_expediente Filtra resultados pelo cÃ³digo da secretaria expediente. (required)
   * @param int $ano_processo Filtra resultados pelo ano em que foram lanÃ§ados. (required)
   * @return array[ProtocoloResponse]
   */
   public function protocoloGet($access_token, $client_id, $offset, $limit, $nome_regiao, $codigo_bairro, $sigla_expediente, $ano_processo) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling protocoloGet');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling protocoloGet');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling protocoloGet');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling protocoloGet');
      }
      

      // parse inputs
      $resourcePath = "/protocolo";
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
      if($nome_regiao !== null) {
        $queryParams['nomeRegiao'] = $this->apiClient->toQueryValue($nome_regiao);
      }// query params
      if($codigo_bairro !== null) {
        $queryParams['codigoBairro'] = $this->apiClient->toQueryValue($codigo_bairro);
      }// query params
      if($sigla_expediente !== null) {
        $queryParams['siglaExpediente'] = $this->apiClient->toQueryValue($sigla_expediente);
      }// query params
      if($ano_processo !== null) {
        $queryParams['anoProcesso'] = $this->apiClient->toQueryValue($ano_processo);
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

      $responseObject = $this->apiClient->deserialize($response,'array[ProtocoloResponse]');
      return $responseObject;
  }
  
  /**
   * protocoloIdGet
   *
   * Dados sobre um protocolo especifico.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param int $id Identificador do protocolo. (required)
   * @return ProtocoloResponse
   */
   public function protocoloIdGet($access_token, $client_id, $id) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling protocoloIdGet');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling protocoloIdGet');
      }
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling protocoloIdGet');
      }
      

      // parse inputs
      $resourcePath = "/protocolo/{id}";
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

      $responseObject = $this->apiClient->deserialize($response,'ProtocoloResponse');
      return $responseObject;
  }
  

}
