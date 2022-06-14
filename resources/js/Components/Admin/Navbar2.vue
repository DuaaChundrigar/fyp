<template>
<div class="flex justify-between m-auto bg-gray-100 shadow-lg">
        <div class="flex ml-24">
            <img
                class="flex-shrink-0 w-auto h-20"
                src="/storage/logo/logo.png"
                alt="Logo"
            />
        </div>

        <div class="m-auto space-x-4 font-bold text-gray-900 text-1xl">
            
            <a href="/admin/dashboard" 
                class="px-3 py-2 rounded-md hover:bg-gray-900 ml-60 hover:text-white"
                :class="
                checkIfWeAreOnSamePage('/admin/dashboard')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-500 text-white'
            "
                > Dashboard </a
            >
            <a
                href="/admin/books"
                class="px-3 py-2 rounded-md hover:bg-gray-900 ml-60 hover:text-white"
                :class="
                checkIfWeAreOnSamePage('/admin/books')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-500 text-white'
            "
                >Books</a
            >
            
            <a href="/admin/categories" 
                class="px-3 py-2 rounded-md hover:bg-gray-900 ml-60 hover:text-white"
                :class="
                checkIfWeAreOnSamePage('/admin/categories')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-500 text-white'
            "
                >Categories</a
            >
            
            <a href="/admin/borrowDetails" 
                class="px-3 py-2 rounded-md hover:bg-gray-900 ml-60 hover:text-white"
                :class="
                checkIfWeAreOnSamePage('/admin/borrowDetails')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-500 text-white'
            "
                > Borrow Details </a
            >
            
            <a href="/admin/students" 
                class="px-3 py-2 rounded-md hover:bg-gray-900 ml-60 hover:text-white"
                :class="
                checkIfWeAreOnSamePage('/admin/students')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-500 text-white'
            "
                >Students</a
            >
            
            <a href="/admin/contact" 
                class="px-3 py-2 rounded-md hover:bg-gray-900 ml-60 hover:text-white"
                :class="
                checkIfWeAreOnSamePage('/admin/contact')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-500 text-white'
            "
                >Contacts</a
            >
            
            <a href="/admin/report" 
                class="px-3 py-2 rounded-md hover:bg-gray-900 ml-60 hover:text-white"
                :class="
                checkIfWeAreOnSamePage('/admin/report')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-500 text-white'
            "
                > Report</a
            >
            
            <a href="/admin/settings" 
            class="px-3 py-2 rounded-md hover:bg-gray-900 ml-60 hover:text-white"
            :class="
                checkIfWeAreOnSamePage('/admin/settings')
                    ? 'bg-gray-900 text-white'
                    : 'bg-gray-500 text-white'
            "
                >Settings</a
            >
            
        </div>

        <div class="m-auto ml-60">
            <Link
                href="/logout"
                type="button"
                class="px-3 py-2 ml-10 font-bold text-gray-100 bg-gray-700 rounded-md text-1xl hover:bg-gray-200 hover:text-gray-900"
            >
                Logout
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

<style lang="scss" scoped></style>
