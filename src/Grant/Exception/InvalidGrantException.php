<?php
/**
 * This file is part of the awuniversity/oauth2-client library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Alex Bilbie <hello@alexbilbie.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link http://awuniversity.pl/oauth2-client/ Documentation
 * @link https://packagist.org/packages/awuniversity/oauth2-client Packagist
 * @link https://github.com/awuniversity/oauth2-client GitHub
 */

namespace AwU\OAuth2\Client\Grant\Exception;

use InvalidArgumentException;

/**
 * Exception thrown if the grant does not extend from AbstractGrant.
 *
 * @see AwU\OAuth2\Client\Grant\AbstractGrant
 */
class InvalidGrantException extends InvalidArgumentException
{
}
