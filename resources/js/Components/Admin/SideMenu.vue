<template>


    <div class="...">
        <div class="mt-4">
            <Link
                href="/"
                class="w-full px-24 py-4 m-1 text-center text-white bg-gray-700 rounded-md text-1xl hover:bg-gray-500"
            >
                    Dashboard
            </Link>
        </div>
        <div class="mt-8">
            <Link
                href="/admin/books"
                class="w-full px-24 py-4 m-1 text-center text-white bg-gray-700 rounded-md text-1xl hover:bg-gray-500"
            >
                    Books
            </Link>
        </div>
        <div class="mt-8">
            <Link
                href="/admin/categories"
                class="w-full px-24 py-4 m-1 text-center text-white bg-gray-700 rounded-md text-1xl hover:bg-gray-500"
            >
                    Categories
                
            </Link>
        </div>
        <div class="mt-8">
            <Link
                href="/admin/borrowDetails"
                class="w-full px-16 py-4 m-1 text-center text-white bg-gray-700 rounded-md text-1xl hover:bg-gray-500"
            >
                Borrow Details
            </Link>
        </div>
        <div class="mt-8">
            <Link
                href="/admin/students"
                class="w-full px-24 py-4 m-1 text-center text-white bg-gray-700 rounded-md text-1xl hover:bg-gray-500"
            >
                    Students
            </Link>
        </div>
        <div class="mt-8">
            <Link
                
                class="w-full px-24 py-4 m-1 text-center text-white bg-gray-700 rounded-md text-1xl hover:bg-gray-500"
            href="/admin/contact" 
            >
                    Contact
            </Link>
        </div>
        <div class="mt-8">
            <Link
                class="w-full px-24 py-4 m-1 text-center text-white bg-gray-700 rounded-md text-1xl hover:bg-gray-500"
                href="/admin/report"
            >
                    Report
            </Link>
        </div>
        <div class="mt-8">
            <Link
                href="/admin/settings"
                class="w-full px-16 py-4 m-1 text-center text-white bg-gray-700 rounded-md text-1xl hover:bg-gray-500"
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
};
</script>

<style>


nav li:active {
  background-color: rgb(22, 21, 21);
  cursor: pointer;
}
</style>
