<template>
    <div>
        <Navbar2 />

        <!--Body-->
        <!-- <div class="grid grid-cols-6 gap-4 m-2"> -->
            <!--Side bar-->
<!-- 
            <SideMenu /> -->

            <!--Right Side-->
            <!-- <div class="col-span-5 ... m-2"> -->
                <h1
                    class="m-10 mb-5 font-serif text-3xl font-bold text-center text-gray-800"
                >
                    Dashboard
                </h1>

                <div
                    class="grid h-24 grid-cols-3 gap-4 m-10 text-2xl font-bold text-center text-white"
                >
                    <div class="col-span-1 ... rounded-md p-6 bg-red-600 ">
                        Check-in Books
                        <h1 class="my-4 text-3xl">{{ checkin }}</h1>
                    </div>

                    <div class="col-span-1 ... rounded-md p-6 bg-blue-600 ">
                        Check-out Books
                        <h1 class="my-4 text-3xl">{{ checkout }}</h1>
                    </div>

                    <div class="col-span-1 ... rounded-md p-6 bg-green-700 ">
                        Booking Books
                        <h1 class="my-4 text-3xl">{{ count }}</h1>
                    </div>

                </div>

                
            </div>
        <!-- </div>
    </div> -->
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/Admin/Navbar";
import Navbar2 from "../../Components/Admin/Navbar2";
// import SideMenu from "../../Components/Admin/SideMenu";
export default {
    components: {
        Link,
        Navbar2,
        // SideMenu,
    },

    props: {
        count: {
            type: Number,
            default: 0,
        },
        checkin:{
            type: Number,
            default: 0,
        },
        checkout:{
            type: Number,
            default: 0,
        },
    },
};
</script>
