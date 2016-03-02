<?php


namespace ApiImaV1\model;

use \ArrayAccess;

class EmpenhoResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'id' => 'string',
      'codigo_funcao' => 'int',
      'processo' => 'string'
  );

  static $attributeMap = array(
      'id' => 'ID',
      'codigo_funcao' => 'codigoFuncao',
      'processo' => 'processo'
  );

  
  /**
  * Identificador do registro.
  */
  public $id; /* string */
  /**
  * CÃ³digo da funcao
  */
  public $codigo_funcao; /* int */
  /**
  * Procesos de compra
  */
  public $processo; /* string */

  public function __construct(array $data = null) {
    $this->id = $data["id"];
    $this->codigo_funcao = $data["codigo_funcao"];
    $this->processo = $data["processo"];
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
