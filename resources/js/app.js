/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import axios from 'axios';
import { Chart, registerables } from 'chart.js';
import ChartDataLabels from 'chartjs-plugin-datalabels';
import CxltToastr from 'cxlt-vue2-toastr';
import Vue from 'vue';

require('./bootstrap');

import SmartTable from 'vuejs-smart-table'
Vue.use(SmartTable)

Chart.register(ChartDataLabels, ...registerables)
Vue.prototype.$chart = Chart;

import VueDayjs from 'vue-dayjs-plugin'
Vue.use(VueDayjs)
import 'dayjs/locale/es';

const toastrConfigs = {
    position: 'top right',
    showDuration: 2000
}
Vue.use(CxltToastr, toastrConfigs)

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
Vue.prototype.axios = axios;

import Vuesax from 'vuesax'
import 'vuesax/dist/vuesax.css'
import 'material-icons/iconfont/material-icons.css';
Vue.use(Vuesax)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component('view-test', require('./view/ViewTest.vue').default);
Vue.component('resultados-test', require('./view/ResultadosTest.vue').default);
Vue.component('chart-js', require('./components/ChartJS.vue').default);

Vue.component('dashboard-page', require('./dashboard/Dashboard.vue').default);
// Vue.component('view-test', require('./view/ViewTestBase.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
