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
        path: '/parts',
        name: 'parts',
        component: () => import('@/views/Bike/pages/parts/index.vue'),
        meta: {
            title: 'Kwapp Phụ tùng',
            layout: DefaultLayout
        }
    },
    {
        path: '/find-bike',
        name: 'find-bike',
        component: () => import('@/views/Bike/pages/find-bike/index.vue'),
        meta: {
            title: 'Kwapp Tìm kiếm xe',
            layout: DefaultLayout
        }
    },
    {
        path: '/part-lookup',
        name: 'part-lookup',
        component: () => import('@/views/Bike/pages/part-lookup/index.vue'),
        meta: {
            title: 'Kwapp Tra cứu phụ tùng',
            layout: DefaultLayout
        }
    },
    {
        path: '/book-service',
        name: 'book-service',
        component: () => import('@/views/Bike/pages/book-service/index.vue'),
        meta: {
            title: 'Kwapp Đặt lịch bảo dưỡng',
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
