<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

require_once '../../../../../presale - Copy/sosmed/google/test/general/BaseTest.php';
require_once '../../../../../presale - Copy/sosmed/google/test/src/contrib/Google_PlusService.php';
require_once '../../../../../presale - Copy/sosmed/google/test/src/service/Google_BatchRequest.php';

class ApiBatchRequestTest extends BaseTest {
  public $plus;
  public function __construct() {
    parent::__construct();
    $this->plus = new Google_PlusService(BaseTest::$client);
  }

  public function testBatchRequest() {
    $batch = new Google_BatchRequest();

    BaseTest::$client->setUseBatch(true);
    $batch->add($this->plus->people->get('me'), 'key1');
    $batch->add($this->plus->people->get('me'), 'key2');
    $batch->add($this->plus->people->get('me'), 'key3');

    $result = $batch->execute();
    $this->assertTrue(isset($result['response-key1']));
    $this->assertTrue(isset($result['response-key2']));
    $this->assertTrue(isset($result['response-key3']));
  }
}
