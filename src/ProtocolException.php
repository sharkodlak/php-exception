<?php

namespace Sharkodlak\Exception;

/** The ProtocolException class is a base class for exceptions related to a specific protocol binding.
 *
 * Subclasses are used to communicate protocol level fault information to clients
 * and may be used on the server to control the protocol specific fault representation.
 */
class ProtocolException extends \RuntimeException {
}
