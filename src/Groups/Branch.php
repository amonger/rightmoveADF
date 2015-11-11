<?php
/**
*	This file contains the Branch Group model class.
*
*	@package		RightmoveADF
*	@version		@@RELEASE_VERSION@@
*	@author			Jacob Wyke <jacob@frozensheep.com>
*	@copyright		@@COPYRIGHT@@
*	@file			@@FILE@@
*	@file_Version	$Rev: 1937 $
*	@Last_Change	$LastChangedDate: 2014-11-27 10:18:05 +0000 (Thu, 27 Nov 2014) $
*
*/

namespace Frozensheep\RightmoveADF\Groups;

use Frozensheep\RightmoveADF\Groups\GroupInterface;
use Frozensheep\Synthesize\Synthesizer;

/**
*	Branch Group Class
*
*	Class to handle Branch group.
*
*	@package		Frozensheep\RightmoveADF\Groups
*
*/
class Branch implements GroupInterface, \JsonSerializable {

	use Synthesizer;

	protected $arrSynthesize = array(
		'branch_id' => array('type' => 'int', 'required' => true),
		'channel' => array('type' => 'int', 'required' => true),
		'overseas' => array('type' => 'boolean')
	);
}