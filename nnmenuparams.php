<?php
/**
 * @version 1.0.0
 * @package NNMenuparams
 * @copyright 2014 Niels Nübel- NN-Medienagentur
 * @license GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link http://www.nn-medienagentur.de
 */

defined('_JEXEC') or die;

/**
 * Class plgSystemNNMenuparams
 *
 * @category NNMenuparams
 * @package NNMenuparams
 * @author Niels Nübel <n.nuebel@nn-medienagentur.de>
 * @license GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link http://www.nn-medienagentur.de
 * @since 1.0.0
 */
class plgSystemNNMenuparams extends JPlugin
{
	public function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

	public function onContentPrepareForm($form, $data)
	{
		if ($form->getName() == 'com_menus.item')
		{
			JForm::addFormPath(__DIR__ . '/params');

			if ($this->params->get('add_nnmenuparams',1))
				$form->loadFile('nnmenuparams', false);
		}
	}
}
