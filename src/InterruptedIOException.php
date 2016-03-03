<?php

namespace Sharkodlak\Exception;

/** Signals that an I/O operation has been interrupted.
 *
 * An InterruptedIOException is thrown to indicate that an input or output transfer
 * has been terminated because the thread performing it was interrupted.
 * The field bytesTransferred indicates how many bytes were successfully
 * transferred before the interruption occurred.
 */
class InterruptedIOException extends IOException {
}
