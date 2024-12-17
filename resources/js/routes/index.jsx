import { Route, Routes } from 'react-router-dom';
import routes from './routes'
import MainLayout from '../layouts/MainLayout';
const Router = () => {
    const appRoutes = routes.map(route => {
        return <Route index={route.index} key={route.title} path={`/${route.path}`} element={route.element} />
    })
    return <Routes>
        <Route element={<MainLayout />}>
            {appRoutes}
        </Route>
    </Routes>
}

export default Router

