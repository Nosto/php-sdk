<?php
/**
 * Copyright (c) 2017, Nosto Solutions Ltd
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
 * @copyright 2017 Nosto Solutions Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause BSD 3-Clause
 *
 */

// Interfaces
require_once(dirname(__FILE__) . '/interfaces/NostoPersonInterface.php');
require_once(dirname(__FILE__) . '/interfaces/signup/NostoSignupBillingDetailsInterface.php');
require_once(dirname(__FILE__) . '/interfaces/signup/NostoSignupInterface.php');
require_once(dirname(__FILE__) . '/interfaces/signup/NostoSignupOwnerInterface.php');

require_once(dirname(__FILE__) . '/interfaces/order/NostoOrderBuyerInterface.php');
require_once(dirname(__FILE__) . '/interfaces/order/NostoOrderInterface.php');
require_once(dirname(__FILE__) . '/interfaces/order/NostoOrderStatusInterface.php');

require_once(dirname(__FILE__) . '/interfaces/NostoIframeInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoOAuthClientMetaDataInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoProductInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoExportCollectionInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoValidatableInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoExchangeRateInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoAccountInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoNotificationInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoCurrentUserInterface.php');
require_once(dirname(__FILE__) . '/interfaces/NostoLineItemInterface.php');

// Classes
require_once(dirname(__FILE__) . '/classes/http/NostoHttpRequest.php'); // Must be loaded before `NostoApiRequest`
require_once(dirname(__FILE__) . '/classes/NostoObject.php');

require_once(dirname(__FILE__) . '/classes/api/NostoApiRequest.php');
require_once(dirname(__FILE__) . '/classes/api/NostoApiToken.php');

require_once(dirname(__FILE__) . '/classes/collection/NostoCollection.php');
require_once(dirname(__FILE__) . '/classes/collection/NostoProductCollection.php');
require_once(dirname(__FILE__) . '/classes/collection/NostoOrderCollection.php');
require_once(dirname(__FILE__) . '/classes/collection/NostoExchangeRateCollection.php');

require_once(dirname(__FILE__) . '/classes/exception/NostoException.php');
require_once(dirname(__FILE__) . '/classes/exception/NostoHttpException.php');
require_once(dirname(__FILE__) . '/classes/exception/NostoHttpResponseException.php');
require_once(dirname(__FILE__) . '/classes/exception/NostoApiResponseException.php');

require_once(dirname(__FILE__) . '/classes/helper/NostoHelperExporter.php');
require_once(dirname(__FILE__) . '/classes/helper/NostoHelper.php');
require_once(dirname(__FILE__) . '/classes/helper/NostoHelperDate.php');
require_once(dirname(__FILE__) . '/classes/helper/NostoHelperIframe.php');
require_once(dirname(__FILE__) . '/classes/helper/NostoHelperPrice.php');

require_once(dirname(__FILE__) . '/classes/http/NostoHttpRequestAdapter.php');
require_once(dirname(__FILE__) . '/classes/http/NostoHttpRequestAdapterCurl.php');
require_once(dirname(__FILE__) . '/classes/http/NostoHttpRequestAdapterSocket.php');
require_once(dirname(__FILE__) . '/classes/http/NostoHttpResponse.php');

require_once(dirname(__FILE__) . '/classes/oauth/NostoOAuthClient.php');
require_once(dirname(__FILE__) . '/classes/oauth/NostoOAuthToken.php');

require_once(dirname(__FILE__) . '/classes/operation/NostoOperation.php');
require_once(dirname(__FILE__) . '/classes/operation/NostoOperationProduct.php');
require_once(dirname(__FILE__) . '/classes/operation/NostoOperationExchangeRate.php');
require_once(dirname(__FILE__) . '/classes/operation/NostoOperationAccount.php');
require_once(dirname(__FILE__) . '/classes/operation/NostoOperationSettings.php');
require_once(dirname(__FILE__) . '/classes/operation/NostoOperationUninstall.php');
require_once(dirname(__FILE__) . '/classes/operation/NostoOperationSso.php');
require_once(dirname(__FILE__) . '/classes/operation/NostoOperationOrderConfirmation.php');
require_once(dirname(__FILE__) . '/classes/operation/NostoOperationOauthSync.php');

require_once(dirname(__FILE__) . '/classes/Nosto.php');
require_once(dirname(__FILE__) . '/classes/NostoAccount.php');
require_once(dirname(__FILE__) . '/classes/NostoIframe.php');
require_once(dirname(__FILE__) . '/classes/NostoSignupBilling.php');
require_once(dirname(__FILE__) . '/classes/NostoSignup.php');
require_once(dirname(__FILE__) . '/classes/NostoCipher.php');
require_once(dirname(__FILE__) . '/classes/NostoDotEnv.php');
require_once(dirname(__FILE__) . '/classes/NostoMessage.php');
require_once(dirname(__FILE__) . '/classes/NostoValidator.php');
require_once(dirname(__FILE__) . '/classes/NostoExchangeRate.php');
require_once(dirname(__FILE__) . '/classes/NostoCurrency.php');
require_once(dirname(__FILE__) . '/classes/NostoCurrencyCode.php');
require_once(dirname(__FILE__) . '/classes/NostoCurrencySymbol.php');
require_once(dirname(__FILE__) . '/classes/NostoCurrencyFormat.php');
require_once(dirname(__FILE__) . '/classes/NostoCurrencyInfo.php');
require_once(dirname(__FILE__) . '/classes/NostoPerson.php');
require_once(dirname(__FILE__) . '/classes/NostoSignupOwner.php');
require_once(dirname(__FILE__) . '/classes/NostoCurrentUser.php');
require_once(dirname(__FILE__) . '/classes/NostoNotification.php');
require_once(dirname(__FILE__) . '/classes/NostoSerializer.php');

// Parse .env if exists and assign configured environment variables.
NostoDotEnv::getInstance()->init(dirname(__FILE__));
if (isset($_ENV['NOSTO_API_BASE_URL'])) {
    NostoApiRequest::$baseUrl = $_ENV['NOSTO_API_BASE_URL'];
}
if (isset($_ENV['NOSTO_OAUTH_BASE_URL'])) {
    NostoOAuthClient::$baseUrl = $_ENV['NOSTO_OAUTH_BASE_URL'];
}
if (isset($_ENV['NOSTO_WEB_HOOK_BASE_URL'])) {
    NostoHttpRequest::$baseUrl = $_ENV['NOSTO_WEB_HOOK_BASE_URL'];
}
