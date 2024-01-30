import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue/dist/vue.esm-bundler';
import LinkVue from './components/LinkVue.vue';

const app = createApp({
    components: {
        'link-vue' : LinkVue,
    }
});
app.mount('#app');
