<?php

/**
 * Copyright (C) 2016-19 Benjamin Heisig
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
 * @author Benjamin Heisig <https://benjamin.heisig.name/>
 * @copyright Copyright (C) 2016-19 Benjamin Heisig
 * @license http://www.gnu.org/licenses/agpl-3.0 GNU Affero General Public License (AGPL)
 * @link https://github.com/bheisig/i-doit-api-client-php
 */

namespace bheisig\idoitapi\Console;

use \Exception;

/**
 * Requests for API namespace 'console.system'
 */
class System extends Console {

    /**
     * Purge unfinished objects
     *
     * @return array Output (one value per line)
     *
     * @throws Exception on error
     */
    public function purgeUnfinishedObjects() {
        return $this->execute(
            'console.system.objectcleanup',
            [
                'objectStatus' => 1
            ]
        );
    }

    /**
     * Purge archived objects
     *
     * @return array Output (one value per line)
     *
     * @throws Exception on error
     */
    public function purgeArchivedObjects() {
        return $this->execute(
            'console.system.objectcleanup',
            [
                'objectStatus' => 3
            ]
        );
    }

    /**
     * Purge archived objects
     *
     * @return array Output (one value per line)
     *
     * @throws Exception on error
     */
    public function purgeDeletedObjects() {
        return $this->execute(
            'console.system.objectcleanup',
            [
                'objectStatus' => 4
            ]
        );
    }

}
