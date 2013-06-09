<?php
/*
 * Copyright 2013 Jan Eichhorn <exeu65@googlemail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace ApaiIO\Configuration;

use ApaiIO\Configuration\Country;

/**
 * A generic configurationclass
 *
 * @author Jan Eichhorn <exeu65@googlemail.com>
 */
class GenericConfiguration implements ConfigurationInterface
{
    /**
     * The country
     *
     * @var string
     */
    protected $country;

    /**
     * The accesskey
     *
     * @var string
     */
    protected $accessKey;

    /**
     * The string
     *
     * @var unknown
     */
    protected $secretKey;

    /**
     * The associate Tag
     *
     * @var string
     */
    protected $associateTag;

    /**
     * The requestclass
     * By default its set to the provided restful request
     *
     * @var string
     */
    protected $requestClass = "\ApaiIO\Request\Rest\Request";

    /**
     * The responsetransformerclass
     * By default its set to null which means that no transformer will be applied
     *
     * @var string
     */
    protected $responseTransformerClass = null;

    /**
     * {@inheritdoc}
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets an validates the country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        Country::isValidCountry($country);

        $this->country = strtolower($country);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * Sets the accesskey
     *
     * @param string $accessKey
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Sets the secretkey
     *
     * @param string $secretKey
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociateTag()
    {
        return $this->associateTag;
    }

    /**
     * Sets the associatetag
     *
     * @param string $associateTag
     */
    public function setAssociateTag($associateTag)
    {
        $this->associateTag = $associateTag;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestClass()
    {
        return $this->requestClass;
    }

    /**
     * Sets the requestclass
     *
     * @param string $requestClass
     */
    public function setRequestClass($requestClass)
    {
        $this->requestClass = $requestClass;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseTransformerClass()
    {
        return $this->responseTransformerClass;
    }

    /**
     * Sets the responsetransformerclass
     *
     * @param string $responseTransformerClass
     */
    public function setResponseTransformerClass($responseTransformerClass)
    {
        $this->responseTransformerClass = $responseTransformerClass;
    }
}