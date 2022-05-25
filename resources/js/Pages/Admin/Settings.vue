<template>
    <div>
        <Navbar />
        <!--Body-->
        <div class="grid grid-cols-6 gap-4 m-2">
            <!--Side bar-->

            <SideMenu />
            <!--Right Side-->
            <div class="col-span-5 ... m-2">
                <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Password Reset</h1>

                
            </div>
        </div>
    </div>
</template>
<script>

import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/Admin/Navbar";
import SideMenu from "../../Components/Admin/SideMenu";

//import axios from "axios";
export default {
    components: {
        Link,
        Navbar,
        SideMenu,
    },
    
};
</script>
