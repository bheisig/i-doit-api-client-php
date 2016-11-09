<?php

/**
 * Copyright (C) 2016 Benjamin Heisig
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package net\benjaminheisig\idoitapi
 * @author Benjamin Heisig <https://benjamin.heisig.name/>
 * @copyright Copyright (C) 2016 Benjamin Heisig
 * @license http://www.gnu.org/licenses/agpl-3.0 GNU Affero General Public License (AGPL)
 * @link https://github.com/bheisig/i-doit-api-client-php
 */

use PHPUnit\Framework\TestCase;
use net\benjaminheisig\idoitapi\API;
use net\benjaminheisig\idoitapi\Idoit;

class IdoitTest extends TestCase {

    /**
     * @var net\benjaminheisig\idoitapi\API
     */
    protected $api;

    /**
     * @var net\benjaminheisig\idoitapi\Idoit
     */
    protected $idoit;

    public function setUp() {
        $this->api = new API([
            'url' => 'https://demo.i-doit.com/src/jsonrpc.php',
            'key' => 'c1ia5q',
            'username' => 'admin',
            'password' => 'admin'
        ]);

        $this->idoit = new Idoit($this->api);
    } //function

    public function testReadVersion() {
        $result = $this->idoit->readVersion();

        $this->assertInternalType('array', $result);
        $this->assertNotCount(0, $result);
    } //function

    public function testReadConstants() {
        $result = $this->idoit->readConstants();

        $this->assertInternalType('array', $result);
        $this->assertNotCount(0, $result);
    } //function

    public function testSearch() {
        $result = $this->idoit->search('demo');

        $this->assertInternalType('array', $result);
        $this->assertNotCount(0, $result);
    } //function

    public function testBatchSearch() {
        $result = $this->idoit->batchSearch(['demo', 'test', 'server']);

        $this->assertInternalType('array', $result);
        $this->assertNotCount(0, $result);
    } //function

} //class
