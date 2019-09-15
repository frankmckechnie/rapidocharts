/**
 * All global compoents
 */

import Vue from 'vue';

import Clock from '../modules/clock';

import callout from './layout/callout';
import navigation from './layout/navigation';

Vue.component('callout', callout);
Vue.component('navigation', navigation);


export default {}
