<?php

use tmc\gpdrshell\src\App;

/**
 * @author jakubkuranda@gmail.com
 * Date: 13.07.2018
 * Time: 13:58
 */

class tmc_gpdr_shell_apf extends TMC_v1_0_3_AdminPageFramework {

	public function setUp() {

		//  ----------------------------------------
		//  Definition
		//  ----------------------------------------

		$this->oProp->bShowDebugInfo = false;
		$this->setRootMenuPage( 'Settings' );

		$this->addSubMenuItem( array(
			'title'         =>  'GPDR Shell TMC',
			'page_slug'     =>  App::s()->getPrefix( '-settings' ),
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

	}

}