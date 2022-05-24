<template>
    <div class="...">
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
            >
                <Link href="/" class="">Dashboard</Link>
            </button>
        </div>
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
            >
                <Link href="/admin/books" class="">Books</Link>
            </button>
        </div>
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
            >
                <Link href="/admin/categories" class="Categories"
                    >Categories</Link
                >
            </button>
        </div>
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
            >
                <Link href="/admin/borrowDetails" class="">Borrow Details</Link>
            </button>
        </div>
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
            >
                <Link href="/admin/students" class="">Students</Link>
            </button>
        </div>
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
            >
                <Link href="/admin/contact" class="">Contact</Link>
            </button>
        </div>
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
            >
                <Link href="/admin/report" class="">Report</Link>
            </button>
        </div>
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                id="login"
            >
                <Link href="/admin/settings" class="">Settings</Link>
            </button>
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

<style lang="scss" scoped></style>
