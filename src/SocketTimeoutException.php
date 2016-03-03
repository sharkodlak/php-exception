<?php

namespace Sharkodlak\Exception;

/** Signals that a timeout has occurred on a socket read or accept.
 */
class SocketTimeoutException extends InterruptedIOException {
}
