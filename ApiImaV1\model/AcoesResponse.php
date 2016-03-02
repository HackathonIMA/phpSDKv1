<?php


namespace ApiImaV1\model;

use \ArrayAccess;

class AcoesResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'id' => 'string',
      'nome' => 'string',
      'descricao' => 'int',
      'numero' => 'string'
  );

  static $attributeMap = array(
      'id' => 'ID',
      'nome' => 'nome',
      'descricao' => 'descricao',
      'numero' => 'numero'
  );

  
  /**
  * Identificador do registro.
  */
  public $id; /* string */
  /**
  * Nome da aÃ§Ã£o
  */
  public $nome; /* string */
  /**
  * DescriÃ§Ã£o da aÃ§Ã£o
  */
  public $descricao; /* int */
  /**
  * Numero da aÃ§Ã£o
  */
  public $numero; /* string */

  public function __construct(array $data = null) {
    $this->id = $data["id"];
    $this->nome = $data["nome"];
    $this->descricao = $data["descricao"];
    $this->numero = $data["numero"];
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
