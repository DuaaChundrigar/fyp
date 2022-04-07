<template>
    <div>
    <p class="text-4xl">Admin Dashboard</p>

    <Link href="/logout" class="px-12 py-2 text-white bg-red-500 rounded-md shadow-md "
        >Logout</Link
    >
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
export default {
        components: {
            Link,
        },
};
</script>