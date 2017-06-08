<?php
/**
 * Created by PhpStorm.
 * User: davestauffer
 * Date: 5/6/17
 * Time: 3:14 PM
 */

require "../config/config.php";
require "php/class.database.php";

print ($_POST['memberID']);

if(isset($_POST['memberID']) && !empty($_POST['memberID'])) {
    $scannedID = $_POST['memberID'];
    $db = new \ArchStreet\Database();
    $db->query("SELECT count(*) FROM scans WHERE MemberId='$scannedID' AND ScanDate = curdate()");
    $db->bind(':id',1);
    $scanCount = $db->single();
    var_dump($scanCount);
    if ($scanCount%2) {
        $db = new \ArchStreet\Database();
        $db->beginTransaction("");
        $db->query("INSERT INTO scans (MemberId, ScanDate, ScanTime, Status) VALUES ('$scannedID',curdate(),curtime(),1)");
        $db->endTransaction();
    }else{
        $db = new \ArchStreet\Database();
        $db->beginTransaction("");
        $db->query("INSERT INTO scans (MemberId, ScanDate, ScanTime, Status) VALUES ('$scannedID',curdate(),curtime(),0)");
        $db->endTransaction();
    }

}
?>