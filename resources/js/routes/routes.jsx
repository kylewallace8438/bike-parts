import HomePage from "../pages/HomePage";
import JobsPage from "../pages/JobsPage";
import JobPage from "../pages/JobPage";

const routes = [
    {
        index: true,
        path: '/',
        element: <HomePage />,
        title: 'Home page'
    },
    {
        index: false,
        path: '/jobs',
        element: <JobsPage />,
        title: 'Jobs page'
    },
    {
        index: false,
        path: '/job/:id',
        element: <JobPage />,
        title: 'Job page'
    },


];


export default routes
