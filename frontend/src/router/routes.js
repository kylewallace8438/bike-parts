import DefaultLayout from '@/layouts/Default.vue'
import ProfileLayout from '@/layouts/Profile.vue'

export const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('@/views/Bike/home/index.vue'),
        meta: {
            title: 'Kwapp Trang chủ',
            layout: DefaultLayout
        }
    },
    {
        path: '/phu-tung',
        name: 'parts',
        component: () => import('@/views/Bike/pages/parts/index.vue'),
        meta: {
            title: 'Kwapp Phụ tùng',
            layout: DefaultLayout
        }
    },
    {
        path: '/404',
        name: 'Car 404',
        component: () => import('@/views/Car/pages/404/index.vue'),
        meta: {
            title: 'Car Finder | 404 ',
        }
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'NotFound',
        component: () => import('@/components/NotFound.vue'),
        meta: {
            title: '404',
        }
    }
]
