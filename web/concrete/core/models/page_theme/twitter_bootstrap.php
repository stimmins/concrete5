<?
defined('C5_EXECUTE') or die("Access Denied.");
class Concrete5_Model_PageTheme_TwitterBootstrap extends PageTheme {

	protected $ptGridFrameworkHandle = 'bootstrap2';

	public function getThemeGatheringGridItemMargin() {
		return 20;
	}

	public function getThemeGatheringGridItemWidth() {
		return 146;
	}

	public function getThemeGatheringGridItemHeight() {
		return 146;
	}

}