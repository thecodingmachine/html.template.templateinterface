<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Html\Template;

use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\HtmlElement\Scopable;

/**
 * Template interface that should be implemented by any template.
 * The documentation on using a template can be found at http://www.thecodingmachine.com/ext/splash/doc/templates/index.html
 */
interface TemplateInterface extends HtmlElementInterface {

	/**
	 * Sets the title for the HTML page
	 * @return SplashTemplate
	 */
	public function setTitle($title);

	/**
	 * Returns the WebLibraryManager object that can be used to add JS/CSS files to this template.
	 * 
	 * @return WebLibraryManager
	 */
	public function getWebLibraryManager();
}
?>