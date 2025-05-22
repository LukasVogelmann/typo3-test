import '../scss/style.scss';

import Layout from './layout/layout';

window.addEventListener('load', () => {
    new Layout();

    window.dispatchEvent(new Event('scroll'));
});
