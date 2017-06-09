<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ArchStreet;

use ArchStreet\Database;

require_once 'class.database.php';

class Search {

    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    public function SearchMember($search) {
        // .  I have the form created and need a php file that executes the search on submit.  Is that something you could write up quick?  I'd like it to return the following for matches.

        $q = "SELECT m.*, MEMBER_FIRST_NAME__C as fname,  MEMBER_LAST_NAME__C as lname, c.ckin, c.ckout
              FROM members m
              LEFT OUTER JOIN (SELECT MAX(CheckIn) as ckin, MAX(CheckOut) as ckout, MemberId FROM scans ) c ON c.MemberId = m.memberid
              WHERE MEMBER_FIRST_NAME__C  LIKE :search
              OR MEMBER_LAST_NAME__C LIKE :search
              ORDER BY MEMBER_LAST_NAME__C";
        $this->db->query($q);
        $this->db->bind(':search', "$search%");
        $results = $this->db->resultset();
        return $results;
    }

}
