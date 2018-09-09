<?php
namespace evo\exception;

/**
 * (eJinn Generated File, do not edit directly)
 * Exception handler
 *
 * @author ArtisticPhoenix
 * @package Evo
 * @subpackage Evo
 * @link https://github.com/ArtisticPhoenix/Evo/issues
 * @version 1.0.0
 * @eJinn:buildVersion 1.0.0
 * @eJinn:buildTime 1536463295.0306
 */
class RuntimeError extends \Exception
{

    /**
     * @var int
     */
    const ERROR_CODE = 1001;

    /**
     *
     * {@inheritDoc}
     * @see \Exception::__construct()
     */
    public function __construct($message = "", $code = 1001, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}