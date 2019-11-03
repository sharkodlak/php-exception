<?php

namespace Sharkodlak\Exception;

/** Signals that an attempt to open the file denoted by a specified pathname has failed.
 *
 * This exception will be thrown when a file with the specified pathname
 * does not exist. It will also be thrown if the file
 * does exist but for some reason is inaccessible, for example when an attempt
 * is made to open a read-only file for writing.
 */
class FileNotFoundException extends IOException {
}
