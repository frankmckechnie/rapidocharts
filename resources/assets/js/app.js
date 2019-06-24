
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App.vue'

import './mixins/polyfill'
import jscolor from 'jscolor'
import Chart from 'chart.js';

Vue.config.productionTip = false

new Vue({
  el: '#rapido',
  components: { App },
  template: '<App/>'
});
