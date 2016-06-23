<?php
/**
* @package RSForm!Pro
* @copyright (C) 2007-2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class TableRSForm_PDFs extends JTable
{
	public $form_id 			 = null;
	public $useremail_send		 = null;
	public $useremail_filename	 = '';
	public $useremail_php		 = '';
	public $useremail_layout	 = '';
	public $adminemail_send	 	 = '';
	public $adminemail_filename  = null;
	public $adminemail_php		 = '';
	public $adminemail_layout    = '';
	
	public function __construct(& $db) {
		parent::__construct('#__rsform_pdfs', 'form_id', $db);
	}
}