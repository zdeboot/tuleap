<?php
/**
 * Copyright (c) Enalean, 2012. All Rights Reserved.
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

class Tracker_CrossSearch_Criteria {
    /**
     * @var array of array
     */
    private $shared_fields_criteria;
    private $title;
    private $status;

    /**
     * @param array of array $shared_fields_criteria
     * @param string $title
     * @param string $status 
     */
    public function __construct($shared_fields_criteria=array(), $title, $status = null) {
        $this->shared_fields_criteria = $shared_fields_criteria;
        $this->title                  = $title;
        $this->status                 = $status;
    }
    
    public function getSharedFields() {
        return $this->shared_fields_criteria;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getStatus() {
        return $this->status;
    }


    
}

?>
