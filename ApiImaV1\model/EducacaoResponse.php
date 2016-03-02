<?php


namespace ApiImaV1\model;

use \ArrayAccess;

class EducacaoResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'id' => 'string',
      'ano' => 'int',
      'codigo_regiao' => 'int',
      'descricao_regiao' => 'string',
      'escala_grupo' => 'string',
      'regime' => 'string',
      'nome_unidade_escolar' => 'string',
      'bairro' => 'string',
      'descricao' => 'string'
  );

  static $attributeMap = array(
      'id' => 'ID',
      'ano' => 'ano',
      'codigo_regiao' => 'codigoRegiao',
      'descricao_regiao' => 'descricaoRegiao',
      'escala_grupo' => 'escalaGrupo',
      'regime' => 'regime',
      'nome_unidade_escolar' => 'nomeUnidadeEscolar',
      'bairro' => 'bairro',
      'descricao' => 'descricao'
  );

  
  /**
  * Identificador do registro.
  */
  public $id; /* string */
  /**
  * Ano do registro.
  */
  public $ano; /* int */
  /**
  * CÃ³digo da regiÃ£o.
  */
  public $codigo_regiao; /* int */
  /**
  * DescriÃ§Ã£o da regiÃ£o.
  */
  public $descricao_regiao; /* string */
  /**
  * CÃ³digo do grupo escolar.
  */
  public $escala_grupo; /* string */
  /**
  * DescriÃ§Ã£o do regime escolar.
  */
  public $regime; /* string */
  /**
  * Nome da Unidade escolar.
  */
  public $nome_unidade_escolar; /* string */
  /**
  * Nome do bairro onde a unidade escolar se encontra.
  */
  public $bairro; /* string */
  /**
  * DescriÃ§Ã£o da demanda.
  */
  public $descricao; /* string */

  public function __construct(array $data = null) {
    $this->id = $data["id"];
    $this->ano = $data["ano"];
    $this->codigo_regiao = $data["codigo_regiao"];
    $this->descricao_regiao = $data["descricao_regiao"];
    $this->escala_grupo = $data["escala_grupo"];
    $this->regime = $data["regime"];
    $this->nome_unidade_escolar = $data["nome_unidade_escolar"];
    $this->bairro = $data["bairro"];
    $this->descricao = $data["descricao"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
