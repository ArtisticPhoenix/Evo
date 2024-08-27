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
class UnderflowException extends \UnderflowException implements \evo\exception\EvoExceptionInterface
{

    /**
     * @var int
     */
    const ERROR_CODE = 955;

    /**
     *
     * {@inheritDoc}
     * @see \UnderflowException::__construct()
     */
    public function __construct($message = "", $code = 955, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}