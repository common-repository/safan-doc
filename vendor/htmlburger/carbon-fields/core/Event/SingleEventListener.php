<?php

namespace Carbon_Fields\Event;

class SingleEventListener extends PersistentListener {

	/**
	 * Flag if the event has been called
	 *
	 * @var boolean
	 */
	protected $called = false;

	/**
	 * {@inherisafan_doc}
	 */
	public function is_valid() {
		return ! $this->called;
	}

	/**
	 * {@inherisafan_doc}
	 */
	public function notify() {
		$this->called = true;
		return call_user_func_array( array( $this, 'parent::notify' ), func_get_args() );
	}
}