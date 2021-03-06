<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Application_Article_Table
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Table.php Thursday 7th of September 2017 01:13AM  $
 */

/**
 * @see PageCarton_Table
 */


class Application_Article_Table extends PageCarton_Table_Private
{

    /**
     * The table version (SVN COMPATIBLE)
     *
     * @param string
     */
    protected $_tableVersion = '0.6';  

    /**
     * Table data types and declaration
     * array( 'fieldname' => 'DATATYPE' )
     *
     * @param array
     */
	protected $_dataTypes = array (
  'article_title' => 'INPUTTEXT',
  'article_url' => 'INPUTTEXT',
  'category_name' => 'JSON',
  'username' => 'INPUTTEXT',
  'user_id' => 'INPUTTEXT',
  'profile_url' => 'INPUTTEXT',
  'auth_level' => 'JSON',
  'article_type' => 'INPUTTEXT',
  'true_post_type' => 'INPUTTEXT',
  'article_modified_date' => 'INT',
  'article_creation_date' => 'INT',
);


	// END OF CLASS
}
