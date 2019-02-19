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

namespace Nosto\Object;

use Countable;
use Iterator;
use Nosto\Helper\SerializationHelper;

/**
 * Base class for all Nosto object collection classes. The base class provides the
 * functionality to validate the items added to the collection. The collection behaves
 * like an array. making it easy to add items to it and iterate over it.
 */
abstract class AbstractCollection implements Iterator, Countable
{

    protected $var = array();

    /**
     * @see Iterator::rewind()
     */
    public function rewind()
    {
        reset($this->var);
    }

    /**
     * @see Iterator::current()
     */
    public function current()
    {
        return current($this->var);
    }

    /**
     * @see Iterator::key()
     */
    public function key()
    {
        return key($this->var);
    }

    /**
     * @see Iterator::next()
     */
    public function next()
    {
        return next($this->var);
    }

    /**
     * @see Iterator::next()
     */
    public function count()
    {
        return count($this->var);
    }

    /**
     * @see Iterator::valid()
     */
    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== null && $key !== false);
        return $var;
    }

    /**
     * Serialize to json
     *
     * @return string json
     */
    public function toJson()
    {
        return SerializationHelper::serialize($this);
    }

    /**
     * Clears / resets the collection (empties the collection)
     */
    public function clear()
    {
        $this->var = array();
    }
}
