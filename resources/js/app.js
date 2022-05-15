/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import {createApp} from 'vue'
import PagesReasonsShow from './vue/pages/reasons/Show.vue'
import Reason from './vue/components/Reason.vue'

const app = createApp({});

// Pages
app.component('pages-reasons-show', PagesReasonsShow);

// Components
app.component('reason', Reason);

app.mount('#app');
