<?php
use \LeanCloud\User;

function acl () {
	if (User::getCurrentUser() != null &&User::getCurrentUser()->get('username') == 'jueye') {
		return true;
	}
	return false;
}
