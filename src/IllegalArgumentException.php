<?php

namespace Sharkodlak\Exception;

/** Thrown to indicate that a method has been passed an illegal or inappropriate argument.
 *
 * This exception is an alias for PHP InvalidArgumentException which isn't named
 * according to original JAVA name.
 */
class IllegalArgumentException extends InvalidArgumentException {
}
