import Home from './components/Home';
import About from './components/About';
import Contact from './components/Contact';
import Services from './components/Services';

const routes = [
    {path: '/', component: Home},
    {path:  '/about', component: About},
    {path: '/contact', component: Contact},
    {path: '/services', component: Services},
];

export default routes;