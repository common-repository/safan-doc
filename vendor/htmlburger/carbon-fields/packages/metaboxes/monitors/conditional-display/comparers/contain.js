/**
 * Internal dependencies.
 */
import base from './base';

export default {
	...base,

	/**
	 * @inherisafan_doc
	 */
	operators: [ 'IN', 'NOT IN' ],

	/**
	 * @inherisafan_doc
	 */
	evaluate( a, operator, b ) {
		switch ( operator ) {
			case 'IN':
				return b.indexOf( a ) > -1;
			case 'NOT IN':
				return b.indexOf( a ) === -1;
			default:
				return false;
		}
	}
};
