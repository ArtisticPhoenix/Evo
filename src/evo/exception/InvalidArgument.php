<?php
namespace evo\exception;

/**
 * (eJinn Generated File, do not edit directly)
 * Exception handler
 *
 * @author ArtisticPhoenix
 * @package Evo
 * @subpackage Evo
 * @link https://github.com/ArtisticPhoenix//issues
 * @version 1.0.0
 * @eJinn:buildVersion 1.0.0
 * @eJinn:buildTime 1536473546.7922
 */
class InvalidArgument extends \Exception implements \EvoExceptionInterface
{

    /**
     * @var int
     */
    const ERROR_CODE = 1000;

    /**
     *
     * {@inheritDoc}
     * @see \Exception::__construct()
     */
    public function __construct($message = "", $code = 1000, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}