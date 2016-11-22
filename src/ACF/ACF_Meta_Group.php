<?php


namespace Tribe\Libs\ACF;

use Tribe\Libs\Object_Meta\Meta_Group;

abstract class ACF_Meta_Group extends Meta_Group {

	public function hook() {
		add_action( 'acf/init', [ $this, 'register_group' ], 10, 0 );
	}

	public function register_group() {
		$config = $this->get_group_config();
		acf_add_local_field_group( $config );
	}

	/**
	 * @return array The ACF config array for the field group
	 */
	abstract protected function get_group_config();
}