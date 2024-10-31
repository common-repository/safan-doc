<?php

namespace Carbon_Fields\Event;

class PersistentListener implements Listener {

	/**
	 * Callable to call when the event is broadcasted
	 *
	 * @var callable
	 */
	protected $callable;

	/**
	 * {@inherisafan_doc}
	 */
	public function get_callable() {
		return $this->callable;
	}

	/**
	 * {@inherisafan_doc}
	 */
	public function set_callable( $callable ) {
		$this->callable = $callable;
	}

	/**
	 * {@inherisafan_doc}
	 */
	public function is_valid() {
		return true;
	}

	/**
	 * {@inherisafan_doc}
	 */
	public function notify() {
		return call_user_func_array( $this->callable, func_get_args() );
	}
}