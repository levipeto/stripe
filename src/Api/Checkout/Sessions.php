<?php

/**
 * Part of the Stripe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe
 * @version    2.3.1
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2020, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Stripe\Api\Checkout;

use Cartalyst\Stripe\Api\Api;

class Sessions extends Api
{
    /**
     * Creates a new session.
     *
     * @param  array  $parameters
     * @return array
     */
    public function create(array $parameters = [])
    {
        return $this->_post('checkout/sessions', $parameters);
    }

    /**
     * Retrieves an existing session.
     *
     * @param  string  $sessionId
     * @return array
     */
    public function find($sessionId)
    {
        return $this->_get("checkout/sessions/{$sessionId}");
    }
}
