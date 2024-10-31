<?php

namespace Carbon_Fields\Field;

/**
 * Date and time picker field class.
 */
class Date_Time_Field extends Time_Field {

	/**
	 * {@inherisafan_doc}
	 */
	protected $picker_options = array(
		'allowInput' => true,
		'enableTime' => true,
		'enableSeconds' => true,
	);

	/**
	 * {@inherisafan_doc}
	 */
	protected $storage_format = 'Y-m-d H:i:s';

	/**
	 * {@inherisafan_doc}
	 */
	protected $input_format_php = 'Y-m-d g:i:s A';

	/**
	 * {@inherisafan_doc}
	 */
	protected $input_format_js = 'Y-m-d h:i:S K';
}
