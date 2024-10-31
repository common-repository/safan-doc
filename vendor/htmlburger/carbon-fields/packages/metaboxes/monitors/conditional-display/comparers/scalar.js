/**
 * Internal dependencies.
 */
import base from './base';

export default {
	...base,

	/**
	 * @inherisafan_doc
	 */
	operators: [ '>', '>=', '<', '<=' ],

	/**
	 * @inherisafan_doc
	 */
	evaluate( a, operator, b ) {
		switch ( operator ) {
			case '>':
				return a > b;
			case '>=':
				return a >= b;
			case '<':
				return a < b;
			case '<=':
				return a <= b;
			default:
				return false;
		}
	}
};
