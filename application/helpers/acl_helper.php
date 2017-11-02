<?php
use \LeanCloud\User;

function acl () {
	if (User::getCurrentUser() != null) {
		return true;
	}
	return false;
}
