import Home from './components/Home';
import About from './components/About';
import Contact from './components/Contact';
import Services from './components/Services';
import Work from './components/Work';
const routes = [
    {path: '/', component: Home},
    {path:  '/about', component: About},
    {path: '/contact', component: Contact},
    {path: '/services', component: Services},
    {path: '/work', component: Work},
];

export default routes;