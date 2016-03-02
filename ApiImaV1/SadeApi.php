<?php

namespace ApiImaV1;

class SadeApi {

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
   * saudeGet
   *
   * Dados sobre sÃ¡ude
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param string $offset ParÃ¢metro utilizado para indicar a posiÃ§Ã£o do registro inicial que serÃ¡ trazido. A primeira posiÃ§Ã£o Ã© sempre zero (0). (required)
   * @param string $limit ParÃ¢metro utilizado para indicar a quantidade de registros que deve ser trazido na consulta. (required)
   * @param string $uf Filtra resultados por UF. (required)
   * @param string $municipio Filtra resultados por cidade. (required)
   * @param int $codigo_procedimento_sus Filtra resultados por cÃ³digo de procedimento. (required)
   * @param int $codigo_atividade_profissional Filtra resultados pelo cÃ³digo do profissional. (required)
   * @param string $distrito_atendimento Filtra resultados por distrito de atendimento. (required)
   * @return array[SaudeResponse]
   */
   public function saudeGet($access_token, $client_id, $offset, $limit, $uf, $municipio, $codigo_procedimento_sus, $codigo_atividade_profissional, $distrito_atendimento) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling saudeGet');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling saudeGet');
      }
      
      // verify the required parameter 'offset' is set
      if ($offset === null) {
        throw new \InvalidArgumentException('Missing the required parameter $offset when calling saudeGet');
      }
      
      // verify the required parameter 'limit' is set
      if ($limit === null) {
        throw new \InvalidArgumentException('Missing the required parameter $limit when calling saudeGet');
      }
      

      // parse inputs
      $resourcePath = "/saude";
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
      if($uf !== null) {
        $queryParams['uf'] = $this->apiClient->toQueryValue($uf);
      }// query params
      if($municipio !== null) {
        $queryParams['municipio'] = $this->apiClient->toQueryValue($municipio);
      }// query params
      if($codigo_procedimento_sus !== null) {
        $queryParams['codigoProcedimentoSUS'] = $this->apiClient->toQueryValue($codigo_procedimento_sus);
      }// query params
      if($codigo_atividade_profissional !== null) {
        $queryParams['codigoAtividadeProfissional'] = $this->apiClient->toQueryValue($codigo_atividade_profissional);
      }// query params
      if($distrito_atendimento !== null) {
        $queryParams['distritoAtendimento'] = $this->apiClient->toQueryValue($distrito_atendimento);
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

      $responseObject = $this->apiClient->deserialize($response,'array[SaudeResponse]');
      return $responseObject;
  }
  
  /**
   * saudeIdGet
   *
   * Retorna um dado hospitalar especÃ­fico.
   *
   * @param string $access_token Access Token com as permissÃµes de acesso. (required)
   * @param string $client_id Token disponibilizado na criaÃ§Ã£o da APP. (required)
   * @param int $id Identificador do protocolo. (required)
   * @return SaudeResponse
   */
   public function saudeIdGet($access_token, $client_id, $id) {
      
      // verify the required parameter 'access_token' is set
      if ($access_token === null) {
        throw new \InvalidArgumentException('Missing the required parameter $access_token when calling saudeIdGet');
      }
      
      // verify the required parameter 'client_id' is set
      if ($client_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $client_id when calling saudeIdGet');
      }
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling saudeIdGet');
      }
      

      // parse inputs
      $resourcePath = "/saude/{id}";
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

      $responseObject = $this->apiClient->deserialize($response,'SaudeResponse');
      return $responseObject;
  }
  

}