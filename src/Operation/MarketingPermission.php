<?php
/**
 * Copyright (c) 2019, Nosto Solutions Ltd
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 * this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 * this list of conditions and the following disclaimer in the documentation
 * and/or other materials provided with the distribution.
 *
 * 3. Neither the name of the copyright holder nor the names of its contributors
 * may be used to endorse or promote products derived from this software without
 * specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @author Nosto Solutions Ltd <contact@nosto.com>
 * @copyright 2019 Nosto Solutions Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause BSD 3-Clause
 *
 */

namespace Nosto\Operation;

use Nosto\Request\Api\ApiRequest;
use Nosto\Request\Api\Token;
use Nosto\Types\Signup\AccountInterface;
use Nosto\NostoException;
use Nosto\Request\Http\Exception\AbstractHttpException;

/**
 * Operation class for updated customer's marketing permission
 */
class MarketingPermission extends AbstractAuthenticatedOperation
{
    /**
     * MarketingPermission constructor.
     * @param AccountInterface $account
     * @param string $activeDomain
     */
    public function __construct(AccountInterface $account, $activeDomain = '')
    {
        parent::__construct($account, $activeDomain);
    }

    /**
     * Update customer marketing permission
     *
     * @param $email
     * @param $hasPermission
     * @return bool
     * @throws NostoException
     * @throws AbstractHttpException
     */
    public function update($email, $hasPermission)
    {
        $request = $this->initRequest(
            $this->account->getApiToken(Token::API_EMAIL),
            $this->account->getName(),
            $this->activeDomain
        );

        $replaceParams = array('{email}' => $email, '{state}' => $hasPermission ? 'true' : 'false');
        $request->setReplaceParams($replaceParams);
        $response = $request->postRaw('');

        return self::checkResponse($request, $response);
    }

    /**
     * @inheritdoc
     */
    protected function getRequestType()
    {
        return new ApiRequest();
    }

    /**
     * @inheritdoc
     */
    protected function getContentType()
    {
        return self::CONTENT_TYPE_APPLICATION_JSON;
    }

    /**
     * @inheritdoc
     */
    protected function getPath()
    {
        return ApiRequest::PATH_MARKETING_PERMISSION;
    }

}
