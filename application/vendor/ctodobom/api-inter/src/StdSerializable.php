<?php
namespace ctodobom\APInterPHP;

/**
 *
 * @author allgood
 *
 * é apenas uma stdClass serializável para JSON
 */
class StdSerializable extends \stdClass implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
