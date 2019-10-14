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

namespace Nosto\Operation\Recommendation;

class Filters
{
    /** @var string[]  */
    private $brands = [];

    /** @var string[]  */
    private $categories = [];

    /** @var array  */
    private $customFields = [];

    /** @var boolean */
    private $discounted;

    /** @var boolean */
    private $fresh;

    /** @var array */
    private $price;

    /** @var string[] */
    private $productIds;

    /** @var float */
    private $rating;

    /** @var int */
    private $reviews;

    /** @var string */
    private $search;

    private $stock;
    private $tag1;
    private $tag2;
    private $tag3;

    /**
     * @param string[] $brands
     */
    public function setBrands(array $brands)
    {
        $this->brands = array_merge($this->brands, $brands);
    }

    /**
     * @param string[] $categories
     */
    public function setCategories(array $categories)
    {
        $this->categories = array_merge($this->categories, $categories);
    }

    /**
     * @param string $attribute
     * @param array $values
     */
    public function setCustomFields($attribute, array $values)
    {
        foreach ($this->customFields as $customField) {
            if ($customField['attribute'] === $attribute) {
                $customField['values'] = array_merge($customField['values'], $values);
            }
        }

        $this->customFields[] = [
            'attribute' => $attribute,
            'values' => $values
        ];
    }

    /**
     * @param boolean $discounted
     */
    public function setDiscounted($discounted)
    {
        $this->discounted = $discounted;
    }

    /**
     * @param boolean $fresh
     */
    public function setFresh($fresh)
    {
        $this->fresh = $fresh;
    }

    /**
     * @param int $min
     * @param int $max
     */
    public function setPrice($min, $max)
    {
        $this->price = ['min' => $min, 'max' => $max];
    }

    /**
     * @param string[] $productIds
     */
    public function setProductIds(array $productIds)
    {
        $this->productIds = array_merge($this->productIds, $productIds);
    }

    /**
     * @param float $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @param int $reviews
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * @param string $search
     */
    public function setSearch($search)
    {
        $this->search = $search;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @param mixed $tag1
     */
    public function setTag1($tag1)
    {
        $this->tag1 = $tag1;
    }

    /**
     * @param mixed $tag2
     */
    public function setTag2($tag2)
    {
        $this->tag2 = $tag2;
    }

    /**
     * @param mixed $tag3
     */
    public function setTag3($tag3)
    {
        $this->tag3 = $tag3;
    }

    /**
     * @return array
     * @suppress PhanTypeSuspiciousNonTraversableForeach
     */
    public function process()
    {

        $array = [];

        foreach ($this as $key => $value) {
            if ($value !== null) {
                $array = array_merge($array, [$key => $value]);
            }
        }
        return $array;
    }
}
