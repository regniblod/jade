<?php

/*
 * Copyright (c) 2017 trivago
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author Moein Akbarof <moein.akbarof@trivago.com>
 * @date 2017-09-10
 */

namespace Trivago\Jade\Domain\ResourceManager\Exception;

class InvalidModelSet extends ModelException
{
    /**
     * @var string
     */
    private $attribute;

    /**
     * @param string $attribute
     * @param string $message
     */
    public function __construct($attribute, $message)
    {
        $this->attribute = $attribute;
        parent::__construct($message);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'model_set';
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
}
