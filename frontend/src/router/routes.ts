import DefaultLayout from '@/layouts/Default.vue'
import ProfileLayout from '@/layouts/Profile.vue'

export const routes = [
    {
        path: '/',
        name: 'Home-1',
        component: () => import('@/views/Car/home/home-1/index.vue'),
        meta: {
            title: 'Job Finder | Home v.1',
            layout: DefaultLayout
        }
    },
   {
        path: '/car-finder-catalog-list',
        name: 'Catalog ( List Car )',
        component: () => import('@/views/Car/catalog/list_car/index.vue'),
        meta: {
            title: 'Car Finder | Catalog (List of Car)',
            layout: DefaultLayout

        }
    },
    {
        path: '/car-finder-catalog-grid',
        name: 'Catalog ( Grid Car )',
        component: () => import('@/views/Car/catalog/grid_car/index.vue'),
        meta: {
            title: 'Car Finder | Catalog (Grid of Car)',
            layout: DefaultLayout

        }
    },
    {
        path: '/car-finder-single',
        name: 'Car Single Page',
        component: () => import('@/views/Car/catalog/single_car/index.vue'),
        meta: {
            title: 'Car Finder | Car Single Page',
            layout: DefaultLayout

        }
    },
     
    {
        path: '/car-finder-account-info',
        name: 'Car Finder | Account Personal Info',
        component: () => import('@/views/Car/account/personal/index.vue'),
        meta: {
            title: 'Car Finder | Account Personal Info',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-account-security',
        name: 'Car Finder | Account Password & Security',
        component: () => import('@/views/Car/account/password/index.vue'),
        meta: {
            title: 'Car Finder | Account Password & Security',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-account-cars',
        name: 'Car Finder | Account My Cars',
        component: () => import('@/views/Car/account/mycar/index.vue'),
        meta: {
            title: 'Car Finder | Account My Cars',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-account-wishlist',
        name: 'Car Finder | Account Wishlist',
        component: () => import('@/views/Car/account/wishlist/index.vue'),
        meta: {
            title: 'Car Finder | Account Wishlist',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-account-reviews',
        name: 'Car Finder | Account reviews',
        component: () => import('@/views/Car/account/review/index.vue'),
        meta: {
            title: 'Car Finder | Account reviews',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-account-notifications',
        name: 'Car Finder | Notifications',
        component: () => import('@/views/Car/account/notifications/index.vue'),
        meta: {
            title: 'Car Finder | Notifications',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-sell-car',
        name: 'Car Finder | Sell Car',
        component: () => import('@/views/Car/vendor/sell/index.vue'),
        meta: {
            title: 'Car Finder | Sell Car',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-promotion',
        name: 'Car Finder | Promotion',
        component: () => import('@/views/Car/vendor/promotion/index.vue'),
        meta: {
            title: 'Car Finder | Promotion',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-vendor',
        name: 'Car Finder | Vendor',
        component: () => import('@/views/Car/vendor/pages/index.vue'),
        meta: {
            title: 'Car Finder | Promotion',
            layout: ProfileLayout

        }
    },
    {
        path: '/car-finder-about',
        name: 'Car Finder | About',
        component: () => import('@/views/Car/pages/about/index.vue'),
        meta: {
            title: 'Car Finder | About',
            layout: DefaultLayout

        }
    },
    {
        path: '/car-finder-blog',
        name: 'Blog',
        component: () => import('@/views/Car/pages/blog/blog-grid/index.vue'),
        meta: {
            title: 'Car Finder | Blog',
            layout: DefaultLayout

        }
    },
    {
        path: '/car-finder-blog-single',
        name: 'Single Post',
        component: () => import('@/views/Car/pages/blog/single-post/index.vue'),
        meta: {
            title: 'Car Finder | Single Post',
            layout: DefaultLayout

        }
    },
    {
        path: '/car-finder-contacts',
        name: 'Contacts',
        component: () => import('@/views/Car/pages/contact/index.vue'),
        meta: {
            title: 'Car Finder | Contact Us',
            layout: DefaultLayout

        }
    },
    {
        path: '/car-finder-help-center',
        name: 'Help Center',
        component: () => import('@/views/Car/pages/helpcenter/index.vue'),
        meta: {
            title: 'Car Finder | Help Center',
            layout: DefaultLayout

        }
    },
    {
        path: '/signin-dark',
        name: 'Sign In Page',
        component: () => import('@/views/Car/account/signin-dark/index.vue'),
        meta: {
            title: 'Car Finder | Sign In Page',
        }
    },
    {
        path: '/signup-dark',
        name: 'Sign Up Page',
        component: () => import('@/views/Car/account/signup-dark/index.vue'),
        meta: {
            title: 'Car Finder | Sign Up Page',
        }
    },
    {
        path: '/car-finder-404',
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
