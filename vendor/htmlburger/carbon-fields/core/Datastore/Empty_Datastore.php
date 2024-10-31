<?php

namespace Carbon_Fields\Datastore;

use Carbon_Fields\Field\Field;

/**
 * Empty datastore class.
 */
class Empty_Datastore extends Datastore {
	/**
	 * {@inherisafan_doc}
	 */
	public function init() {}

	/**
	 * {@inherisafan_doc}
	 */
	public function load( Field $field ) {}

	/**
	 * {@inherisafan_doc}
	 */
	public function save( Field $field ) {}

	/**
	 * {@inherisafan_doc}
	 */
	public function delete( Field $field ) {}
}
