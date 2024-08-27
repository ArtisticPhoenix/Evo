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
 * @license 
 * @eJinn:buildVersion 2.0.0
 * @eJinn:buildTime 1724726717.6419
 */
class ParseError extends \Exception implements \evo\exception\EvoExceptionInterface
{

    /**
     * @var int
     */
    const ERROR_CODE = 1006;

    /**
     *
     * {@inheritDoc}
     * @see \Exception::__construct()
     */
    public function __construct($message = "", $code = 1006, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}