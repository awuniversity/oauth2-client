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

namespace AwU\OAuth2\Client\OptionProvider;

/**
 * Interface for access token options provider
 */
interface OptionProviderInterface
{
    /**
     * Builds request options used for requesting an access token.
     *
     * @param string $method
     * @param  array $params
     * @return array
     */
    public function getAccessTokenOptions($method, array $params);
}
