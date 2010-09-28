<?php
/**
 * AppController
 *
 * @package cakepress
 * @author Dirk Brünsicke
 * @version $Id$
 * @copyright bruensicke.com GmbH
 **/
class AppController extends Controller
{

/**
 * list of models used.
 * set to null to not load any models
 *
 * @var array
 */
	public $uses = null;

/**
 * list of components to use.
 *
 * @var string
 */
	public $components = array(
		'Session',
		'Flour.Config',
		'Layout',
	);

/**
 * list of helpers to use.
 *
 * @var string
 */
	public $helpers = array(
		'Html',
		'Form',
		'Session',
		'Flour.Widget',
	);

/**
 * Index action.
 *
 * @access public
 */
	function admin_index()
	{

	}

}
