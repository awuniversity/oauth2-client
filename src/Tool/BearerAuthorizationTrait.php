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

namespace AwU\OAuth2\Client\Tool;

use AwU\OAuth2\Client\Token\AccessTokenInterface;

/**
 * Enables `Bearer` header authorization for providers.
 *
 * @link http://tools.ietf.org/html/rfc6750 Bearer Token Usage (RFC 6750)
 */
trait BearerAuthorizationTrait
{
    /**
     * Returns authorization headers for the 'bearer' grant.
     *
     * @param  AccessTokenInterface|string|null $token Either a string or an access token instance
     * @return array
     */
    protected function getAuthorizationHeaders($token = null)
    {
        return ['Authorization' => 'Bearer ' . $token];
    }
}
