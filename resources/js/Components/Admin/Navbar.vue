<template>
    <div class="bg-gray-100 shadow-lg">
            <div
                class="container flex justify-between m-auto mx-auto space-x-8"
            >
                <div class="flex">
                    <img
                        class="flex-shrink-0 w-auto h-20"
                        src="/storage/logo/logo.png"
                        alt="Logo"
                    />
                </div>

                <div class="flex items-center justify-center">
                    <Link
                        href="/logout"
                        type="button"
                        class="px-3 py-2 font-bold text-gray-700 rounded-md text-1xl hover:bg-gray-200"
                    >
                        Logout
                    </Link>
                </div>
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
