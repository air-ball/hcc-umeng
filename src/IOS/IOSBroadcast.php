<?php
namespace Hcc\Umeng\IOS;

use Hcc\Umeng\IOSNotification;

class IOSBroadcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}
