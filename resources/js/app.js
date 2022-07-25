/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import axios from 'axios';
import Vue from 'vue';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('add-modals', require('./components/modals/AddModalComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

export const bus = new Vue()


var btns = document.getElementsByClassName("snippet");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', function () {
            navigator.clipboard.writeText(this.textContent).then(
                function () {
                    alert("Copying to clipboard was successful!");
                },
                function (err) {
                    alert("Could not copy text: ", err);
                }
            );
            
        })
    }


    

