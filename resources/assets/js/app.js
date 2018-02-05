
require('./bootstrap');

// NProgress
import NProgress from 'nprogress';

// Fast Click
import FastClick from 'fastclick';

// Full Calendar
import Moment from 'moment';
import FullCalendar from 'fullcalendar';

import Vue from 'vue';

export const EventBus = new Vue();

// Vue
window.Vue = require('vue');

Vue.component('lists-component',require('./components/ListContainer.vue'));
Vue.component('modal',require('./components/ModalComponent.vue'));
Vue.component('builder-component',require('./components/BuilderComponent.vue'));