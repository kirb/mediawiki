<?php

use MediaWiki\Page\PageCommandFactory;

/**
 * @covers MediaWiki\Page\PageCommandFactory
 */
class MovePageFactoryTest extends MediaWikiUnitTestCase {
	use FactoryArgTestTrait;

	protected static function getFactoryClass() {
		return PageCommandFactory::class;
	}

	protected static function getInstanceClass() {
		return MovePage::class;
	}

	protected static function getExtraClassArgCount() {
		// $to and $from - $permissionManager
		return 1;
	}

	protected function getIgnoredParamNames() {
		return [ 'hookContainer', 'permissionManager' ];
	}
}
