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

namespace Trivago\Jade\Application\JsonApi\Request;

class EntityRequest extends ResourceRequest
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string[]
     */
    protected $fieldsets;

    /**
     * @var string[]
     */
    protected $relationships;

    /**
     * @param string $resourceName
     * @param mixed $id
     * @param string[] $fieldsets
     * @param string[] $relationships
     */
    public function __construct($resourceName, $id, array $fieldsets, array $relationships)
    {
        parent::__construct($resourceName);
        $this->id = $id;
        $this->fieldsets = $fieldsets;
        $this->relationships = $relationships;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string[]
     */
    public function getFieldsets()
    {
        return $this->fieldsets;
    }

    /**
     * @return string[]
     */
    public function getRelationships()
    {
        return $this->relationships;
    }
}
