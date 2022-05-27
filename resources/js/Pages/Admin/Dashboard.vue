<template>
<div>

<Navbar/>

    <!--Body-->
    <div class="grid grid-cols-6 gap-4 m-2">
        <!--Side bar-->

        <SideMenu />

        <!--Right Side-->
        <div class="col-span-5 ... m-2">
            <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Dashboard</h1>
            <div
                class="grid h-24 grid-cols-3 gap-4 text-2xl font-bold text-center text-white"
            >
                <div class="col-span-1 ... rounded-md p-6 bg-red-600">
                    Check-in Books
                </div>

                <div class="col-span-1 ... rounded-md p-6 bg-blue-600">
                    Check-out Books
                </div>

                <div class="col-span-1 ... rounded-md p-6 bg-green-700">
                    Booking Books
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/Admin/Navbar";
import SideMenu from "../../Components/Admin/SideMenu";
export default {
    components: {
        Link,
        Navbar,
        SideMenu,
    },
};
</script>
