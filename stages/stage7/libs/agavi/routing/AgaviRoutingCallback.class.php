<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Agavi package.                                   |
// | Copyright (c) 2005-2009 the Agavi Project.                                |
// |                                                                           |
// | For the full copyright and license information, please view the LICENSE   |
// | file that was distributed with this source code. You can also view the    |
// | LICENSE file online at http://www.agavi.org/LICENSE.txt                   |
// |   vi: set noexpandtab:                                                    |
// |   Local Variables:                                                        |
// |   indent-tabs-mode: t                                                     |
// |   End:                                                                    |
// +---------------------------------------------------------------------------+

/**
 * AgaviRoutingCallback allows you to provide callbacks into the routing
 *
 * @package    agavi
 * @subpackage routing
 *
 * @author     Dominik del Bondio <ddb@bitxtender.com>
 * @copyright  Authors
 * @copyright  The Agavi Project
 *
 * @since      0.11.0
 *
 * @version    $Id: AgaviRoutingCallback.class.php 3750 2009-02-02 20:08:47Z david $
 */
abstract class AgaviRoutingCallback extends AgaviParameterHolder
{
	/**
	 * @var        AgaviContext An AgaviContext instance.
	 */
	protected $context = null;

	/**
	 * @var        array An array with information about the route.
	 */
	protected $route = null;

	/**
	 * Initialize the callback instance.
	 *
	 * @param      AgaviResponse An AgaviResponse instance.
	 * @param      array         An array with information about the route.
	 *
	 * @author     Dominik del Bondio <ddb@bitxtender.com>
	 * @since      0.11.0
	 */
	public function initialize(AgaviContext $context, array &$route)
	{
		$this->context = $context;
		$this->route =& $route;
	}

	/**
	 * Retrieve the current application context.
	 *
	 * @return     AgaviContext An AgaviContext instance.
	 *
	 * @author     Dominik del Bondio <ddb@bitxtender.com>
	 * @since      0.11.0
	 */
	public final function getContext()
	{
		return $this->context;
	}

	/**
	 * Gets executed when the route of this callback route matched.
	 *
	 * @param      array                   The parameters generated by this route.
	 * @param      AgaviExecutionContainer The original execution container.
	 *
	 * @return     bool Whether the routing should handle the route as matched.
	 *
	 * @author     Dominik del Bondio <ddb@bitxtender.com>
	 * @since      0.11.0
	 */
	public function onMatched(array &$parameters, AgaviExecutionContainer $container)
	{
		return true;
	}

	/**
	 * Gets executed when the route of this callback route did not match.
	 *
	 * @param      AgaviExecutionContainer The original execution container.
	 *
	 * @author     Dominik del Bondio <ddb@bitxtender.com>
	 * @since      0.11.0
	 */
	public function onNotMatched(AgaviExecutionContainer $container)
	{
		return;
	}

	/**
	 * Gets executed when the route of this callback is about to be reverse 
	 * generated into an URL.
	 *
	 * @param      array The default parameters stored in the route.
	 * @param      array The parameters the user supplied to AgaviRouting::gen().
	 * @param      array The options the user supplied to AgaviRouting::gen().
	 *
	 * @return     bool  Whether this route part should be generated.
	 *
	 * @author     Dominik del Bondio <ddb@bitxtender.com>
	 * @since      0.11.0
	 */
	public function onGenerate(array $defaultParameters, array &$userParameters, array &$userOptions)
	{
		return true;
	}
}

?>