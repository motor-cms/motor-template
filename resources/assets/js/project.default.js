// Initialize base store
import store from 'motor-backend/resources/assets/js/motor-backend/store';

// Initialize page component store module
import pageComponentStore from 'motor-cms/resources/assets/js/motor-cms/page-component-store';

store.registerModule('pageComponentStore', pageComponentStore);

// Require modules
require('motor-backend/resources/assets/js/motor-backend/main');
require('motor-cms/resources/assets/js/motor-cms/main');
require('motor-media/resources/assets/js/motor-media/main');

// Initialize global event hub
Vue.prototype.$eventHub = new Vue();

// Initialize vue i18n and load generated locale data
import VueInternationalization from 'vue-i18n';
import Locale from 'vue-i18n-locales.generated';

Vue.use(VueInternationalization);

// Get curent language
const lang = document.documentElement.lang.substr(0, 2);

const i18n = new VueInternationalization({
    locale: lang,
    messages: Locale
});

// Initialize base vue app
const app = new Vue({
    el: '#app',
    i18n,
    store: store,
});
