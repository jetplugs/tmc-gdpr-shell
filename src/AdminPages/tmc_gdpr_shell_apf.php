<?php

use tmc\gdprshell\src\AdminPages\TabBasics;
use tmc\gdprshell\src\AdminPages\TabTools;
use tmc\gdprshell\src\App;

/**
 * @author jakubkuranda@gmail.com
 * Date: 13.07.2018
 * Time: 13:58
 */

class tmc_gdpr_shell_apf extends TMC_v1_0_3_AdminPageFramework {

	/** @var string */
	public $pageSlug;

	public function setUp() {

		//  ----------------------------------------
		//  Properties
		//  ----------------------------------------

		$this->pageSlug = App::s()->getPrefix( '_settings' );

		//  ----------------------------------------
		//  Definition
		//  ----------------------------------------

		$this->oProp->bShowDebugInfo = false;
		$this->setRootMenuPage( 'Settings' );
		$this->setInPageTabTag( 'h2' );

		$this->addSubMenuItem( array(
			'title'         =>  'GDPR Shell TMC',
			'page_slug'     =>  $this->pageSlug,
		) );

	}

	public function load() {

		//  ----------------------------------------
		//  Scripts
		//  ----------------------------------------

		$this->enqueueStyle(
			App::s()->getUrl( 'lib/ShellPress/assets/css/AdminPage/style.css' ),
			'',
			'',
			array( 'version' => App::s()->getFullPluginVersion() )
		);

		//  ----------------------------------------
		//  Tabs
		//  ----------------------------------------

		new TabBasics( $this, $this->pageSlug, 'basics' );
		new TabTools( $this, $this->pageSlug, 'tools' );

	}

}