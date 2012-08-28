<?php
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Html\Template\BaseTemplate;

use Mouf\Html\Template\TemplateInterface;
use Mouf\Html\Utils\WebLibraryManager\WebLibraryManagerInterface;


/**
 * Base class that can be used by any Splash template.
 * A template only needs to implement the TemplateInterface interface, but this class provides
 * sensible default behaviours for most methods.
 * Classes extending the BaseTemplate only need to implement the "draw" method.
 * 
 */
abstract class BaseTemplate implements TemplateInterface {

	/**
	 * The HTML elements that will be displayed on the center of the screen.
	 *
	 * @var array<HtmlElementInterface>
	 */
	private $content;

	/**
	 * The title of the HTML page
	 * 
	 * @var string
	 */
	private $title;
	
	/**
	 * The weblibrarymanager is in charge of handing JS files.
	 * 
	 * @var WebLibraryManagerInterface
	 */
	private $webLibraryManager;

	/**
	 * Default constructor
	 */
	public function __construct() {
		$this->content = array();
	}
	
	/**
	 * Sets the title for the HTML page
	 * 
	 * @Property
	 * @param string $title
	 * @return BaseTemplate
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * Gets the title for the HTML page
	 * 
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the web library manager for this template.
	 *
	 * @Property
	 * @param WebLibraryManagerInterface $webLibraryManager
	 * @return BaseTemplate
	 */
	public function setWebLibraryManager(WebLibraryManagerInterface $webLibraryManager) {
		$this->webLibraryManager = $webLibraryManager;
		return $this;
	}
	
	/**
	 * Returns the WebLibraryManager object that can be used to add JS/CSS files to this template.
	 * 
	 * @return WebLibraryManager
	 */
	public function getWebLibraryManager() {
		return $this->webLibraryManager;
	}
	
}
?>