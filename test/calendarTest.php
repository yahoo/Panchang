<?php
//+---------------------------------------------------------------------------------------------------------------------------------+
//																    /
// Copyright (c) 2012 Yahoo! Inc. All rights reserved. 										    /
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this 				            /
// file except in compliance with the License. You may obtain a copy of the License at 						    /
//																    /
//		http://www.apache.org/licenses/LICENSE-2.0 									    /
//																    /
// Unless required by applicable law or agreed to in writing, software distributed under 					    /
// the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF    					    /
// ANY KIND, either express or implied. See the License for the specific language governing 					    /
// permissions and limitations under the License. See accompanying LICENSE file.						    /
// 																    /
// $Author:shawcs@yahoo-inc.com  $Date: 30-Jan-2012										    /
//																    /
//+---------------------------------------------------------------------------------------------------------------------------------+

include '../www/pear/lib/model/calendar.php';

class CalendarTest extends PHPUnit_Framework_TestCase {

/**
  * PEAR connector to the database
  * @access private
  * @var resource
  */
private $_db_obj;
      
       function SetUp() {
               $this->_db_obj = new calender('january','2012');
       }

       /**------------------------------------------------------------------------------------------------------------------** 
        * Test to check if the Details (Days, Day of week, Caption, Next Month Details, Previous Month Details) are returned
        **------------------------------------------------------------------------------------------------------------------**/
       function testgetDetails() {
               $res = $this->_db_obj->getDetails();
               $this->assertTrue($res==NULL);
       }
}