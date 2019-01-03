<?php

namespace hearot\ArgoScuolaNext;

/**
 *  LoginException for ArgoScuolaNext
 *
 *  This class is used to throw exception dued to a error in the login
 *
 * @author Hearot
 * @copyright 2019
 * @license AGPL-3.0-or-later
 */
class LoginException extends \Exception
{
    /**
     *  This method will throw an hearot\ArgoScuolaNext\LoginException
     *
     * @internal
     * @param string $message The message of the exception
     * @param int $code The code of the exception
     * @param string $previous Last Exception
     * @return boolean
     */
    public function __construct($message, $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        return true;
    }

    /**
     *  This will convert the Exception in a string
     *
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ': [{' . $this->code . '}]: {' . $this->message . '}' . "\n";
    }
}
