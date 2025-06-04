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
        name: 'products',
        component: () => import('@/views/Bike/pages/products/index.vue'),
        meta: {
            title: 'Kwapp Phụ tùng',
            layout: DefaultLayout
        },
    },
    {
        path: '/phu-tung/:id',
        name: 'product-detail',
        component: () => import('@/views/Bike/pages/product-detail/index.vue'),
        meta: {
            title: 'Kwapp Phụ tùng',
            layout: DefaultLayout
        },
    },
    {
        path: '/tim-xe',
        name: 'find-bike',
        component: () => import('@/views/Bike/pages/find-bike/index.vue'),
        meta: {
            title: 'Kwapp Tìm kiếm xe',
            layout: DefaultLayout
        }
    },
    {
        path: '/tra-cuu',
        name: 'part-lookup',
        component: () => import('@/views/Bike/pages/part-lookup/index.vue'),
        meta: {
            title: 'Kwapp Tra cứu phụ tùng',
            layout: DefaultLayout
        }
    },
    {
        path: '/dat-lich',
        name: 'dat-lich',
        component: () => import('@/views/Bike/pages/book-service/index.vue'),
        meta: {
            title: 'Kwapp Đặt lịch bảo dưỡng',
            layout: DefaultLayout
        }
    },
    {
        path: '/thong-tin',
        name: 'thong-tin',
        component: () => import('@/views/Bike/pages/about/index.vue'),
        meta: {
            title: 'Kwapp Thông tin',
            layout: DefaultLayout
        }
    },
    {
        path: '/lien-he',
        name: 'lien-he',
        component: () => import('@/views/Bike/pages/contact/index.vue'),
        meta: {
            title: 'Kwapp Liên hệ',
            layout: DefaultLayout
        }
    },
    {
        path: '/faq',
        name: 'faq',
        component: () => import('@/views/Bike/pages/helpcenter/index.vue'),
        meta: {
            title: 'Kwapp Liên hệ',
            layout: DefaultLayout
        }
    },
    {
        path: '/bai-viet',
        name: 'bai-viet',
        component: () => import('@/views/Bike/pages/blog/blog-grid/index.vue'),
        meta: {
            title: 'Kwapp Liên hệ',
            layout: DefaultLayout
        }
    },
    {
        path: '/bai-viet/:slug',
        name: 'bai-viet-chi-tiet',
        component: () => import('@/views/Bike/pages/blog/single-post/index.vue'),
        meta: {
            title: 'Kwapp Liên hệ',
            layout: DefaultLayout
        }
    },
    {
        path: '/bao-duong',
        name: 'bao-duong',
        component: () => import('@/views/Bike/pages/book-service/index.vue'),
        meta: {
            title: 'Kwapp Liên hệ',
            layout: DefaultLayout
        }
    },
    {
        path: '/404',
        name: 'not-found',
        component: () => import('@/views/Bike/pages/404/index.vue'),
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
