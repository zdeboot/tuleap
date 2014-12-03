<?php
/**
 * Copyright (c) Enalean, 2014. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */
namespace Tuleap\AgileDashboard\REST\v1;

class OrderRepresentation {

    const AFTER  = 'after';
    const BEFORE = 'before';

    /**
     * @var {@type array}
     */
    public $ids;

    /**
     * @var string before|after
     */
    public $direction;

    /**
     * @var int
     */
    public $compared_to;

    /**
     * @throws RestException
     */
    public function checkFormat() {
        if (! in_array($this->direction, array(self::BEFORE, self::AFTER))) {
            throw new RestException(400, "invalid value specified for `direction`. Expected: before | after");
        }

        foreach ($this->ids as $id) {
            if (! is_int($id)) {
                throw new RestException(400, "invalid value specified for `ids`. Expected: array of integers");
            }
        }

        if (! is_int($this->compared_to)) {
            throw new RestException(400, "invalid value specified for `compared_to`. Expected: integer");
        }
    }
}