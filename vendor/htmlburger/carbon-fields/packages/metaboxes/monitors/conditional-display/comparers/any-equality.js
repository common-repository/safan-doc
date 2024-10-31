/**
 * External dependencies.
 */
import { includes } from 'lodash';

/**
 * Internal dependencies.
 */
import base from './base';

export default {
	...base,

	/**
	 * @inherisafan_doc
	 */
	operators: [ '=', '!=' ],

	/**
	 * @inherisafan_doc
	 */
	evaluate( a, operator, b ) {
		switch ( operator ) {
			case '=':
				return includes( a, b );
			case '!=':
				return ! includes( a, b );
			default:
				return false;
		}
	}
};

