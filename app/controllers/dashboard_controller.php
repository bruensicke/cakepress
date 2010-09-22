<?php
/**
 * DashboardController
 * 
 * Shows Dashboard for admin-users.
 *
 * @package cakepress
 * @author Dirk Brünsicke
 * @version $Id$
 * @copyright bruensicke.com GmbH
 **/
class DashboardController extends AppController
{

	var $uses = null;

/**
 * Index action.
 *
 * @access public
 */
	public function index()
	{
		$this->redirect(array('action' => 'index', 'admin' => true));
	}

/**
 * Dashboard action.
 *
 * @access public
 */
	public function admin_index()
	{
	}

}
