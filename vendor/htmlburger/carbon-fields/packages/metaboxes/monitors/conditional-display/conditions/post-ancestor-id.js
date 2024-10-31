/**
 * External dependencies.
 */
import { get } from 'lodash';

/**
 * Internal dependencies.
 */
import anyEquality from '../comparers/any-equality';
import anyContain from '../comparers/any-contain';
import base from './base';

export default {
	...base,

	/**
	 * @inherisafan_doc
	 */
	comparers: [
		anyEquality,
		anyContain
	],

	/**
	 * @inherisafan_doc
	 */
	getEnvironmentValue( definition, values ) {
		return get( values, 'post_ancestors', [] );
	}
};
