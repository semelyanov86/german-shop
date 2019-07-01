/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        total: {0 : [0, 0]},
        checked: false,
        sum: 0,
        saving: 0
    },
    methods: {
        calcPrices: function (e) {
            let curid = e.currentTarget.getAttribute('data-productid');
            let price = e.currentTarget.getAttribute('data-price');
            let value = e.currentTarget.value;
            let type = e.currentTarget.getAttribute('data-type');
            let total = value * price;
            let tyre24 = document.getElementById(curid + 'tyre24').value * value;
            let curModel = document.getElementById('total-' + curid + '-' + type);
            curModel.innerText = '€' + total.toLocaleString('de-DE', {minimumFractionDigits: 2});
            this.total[curid + type] = [total, tyre24];
            this.totalSum();
        },
        totalSum: function () {
            var sum = 0;
            var saving = 0;
            for( var el in this.total ) {
                if( this.total.hasOwnProperty( el ) ) {
                    sum += parseFloat( this.total[el][0] );
                    saving += this.total[el][1] - parseFloat( this.total[el][0] );
                }
            }
            this.sum = sum.toLocaleString('de-DE', {minimumFractionDigits: 2});
            this.saving = saving.toLocaleString('de-DE', {minimumFractionDigits: 2});
        }
    },

});
