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
      <a
        href="/"
        class="px-3 py-2 font-bold rounded-md  text-1xl hover:bg-gray-200 hover:text-gray-900 ml-60"
        :class="
          checkIfWeAreOnSamePage('/user/dashboard')
            ? 'bg-gray-900 text-white'
            : 'bg-gray-500 text-white'
        "
        >List of Books</a
      >
      <a
        href="/books/requests"
        class="px-3 py-2 ml-10 font-bold rounded-md  text-1xl hover:bg-gray-200 hover:text-gray-900"
        :class="
          checkIfWeAreOnSamePage('/books/requests')
            ? 'bg-gray-900 text-white'
            : 'bg-gray-500 text-white'
        "
        >List of Request</a
      >
    </div>
    <div class="m-auto ml-60">
      <Link
        href="/logout"
        type="button"
        class="px-3 py-2 ml-10 font-bold text-gray-100 bg-gray-700 rounded-md  text-1xl hover:bg-gray-200 hover:text-gray-900"
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