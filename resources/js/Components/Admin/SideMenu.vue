<template>
    <div class="...">
        <div
            :class="
                checkIfWeAreOnSamePage('/admin/dashboard')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-700 text-white'
            "
            class="w-full px-24 py-4 m-2 text-center rounded-md text-1xl"
        >
            <Link href="/admin/dashboard"> Dashboard </Link>
        </div>
        <div
            :class="
                checkIfWeAreOnSamePage('/admin/books')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-700 text-white'
            "
            class="w-full px-24 py-4 m-2 text-center rounded-md text-1xl"
        >
            <Link href="/admin/books"> Books </Link>
        </div>
        <div 
            :class="
                checkIfWeAreOnSamePage('/admin/categories')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-700 text-white'
            "
            class="w-full px-24 py-4 m-2 text-center rounded-md text-1xl">
            <Link
                href="/admin/categories"
        >
                Categories
            </Link>
        </div>
        <div 
            :class="
                checkIfWeAreOnSamePage('/admin/borrowDetails')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-700 text-white'
            "
            class="w-full px-10 py-4 m-2 text-center rounded-md text-1xl">
            <Link
                href="/admin/borrowDetails"
        >
                Borrow Details
            </Link>
        </div>
        <div 
        :class="
                checkIfWeAreOnSamePage('/admin/students')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-700 text-white'
            "
            class="w-full px-24 py-4 m-2 text-center rounded-md text-1xl">
            <Link
                href="/admin/students"
        >
                Students
            </Link>
        </div>
        <div 
        :class="
                checkIfWeAreOnSamePage('/admin/contact')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-700 text-white'
            "
            class="w-full px-24 py-4 m-2 text-center rounded-md text-1xl">
            <Link
                href="/admin/contact"
            >
                Contact
            </Link>
        </div>
        <div 
            :class="
                    checkIfWeAreOnSamePage('/admin/report')
                        ? 'bg-gray-900 text-white'
                        : 'bg-gray-700 text-white'
                "
            class="w-full px-24 py-4 m-2 text-center rounded-md text-1xl">
            <Link
                href="/admin/report"
            >
                Report
            </Link>
        </div>
        <div :class="
                checkIfWeAreOnSamePage('/admin/settings')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-700 text-white'
            "
            class="w-full px-16 py-4 m-2 text-center rounded-md text-1xl">
            <Link
                href="/admin/settings"
            >
                Password Reset
            </Link>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },

    methods: {
        checkIfWeAreOnSamePage(url) {
            console.log(url);
            return window.location.pathname === url;
        },
    },
};
</script>
