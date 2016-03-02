<?php


namespace ApiImaV1\model;

use \ArrayAccess;

class SubfuncoesResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'id' => 'string',
      'descricao' => 'string'
  );

  static $attributeMap = array(
      'id' => 'ID',
      'descricao' => 'descricao'
  );

  
  /**
  * Identificador do registro.
  */
  public $id; /* string */
  /**
  * DescriÃ§Ã£o da subfunÃ§Ã£o
  */
  public $descricao; /* string */

  public function __construct(array $data = null) {
    $this->id = $data["id"];
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
