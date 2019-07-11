<?php
/**
 * Created by PhpStorm.
 * User: olsiqose
 * Date: 09/07/2019
 * Time: 11.51
 */

namespace Nosto\Result\Api;

use Nosto\Request\Http\HttpResponse;

final class GeneralPurposeResultHandler extends ApiResultHandler
{
    /**
     * @return GeneralPurposeResultHandler|null
     */
    public static function getInstance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new self();
        }
        return $inst;
    }

    /**
     * @inheritdoc
     */
    protected function renderAPIResult(HttpResponse $response)
    {
        return true;
    }

}