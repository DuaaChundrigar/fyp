<template>
    <div>
        <Navbar />
        <!--Body-->
        <div class="grid grid-cols-6 gap-4 m-2">
            <!--Side bar-->

            <SideMenu />
            <!--Right Side-->
            <div class="col-span-5 ... m-2">

                <div>
                    <button 
                        @click="
                            show('Hello' , 'error')
                        "    
                        class="px-12 py-1 text-white bg-gray-800 rounded shadow-md"
                    >
                        Click me
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/Admin/Navbar";
import SideMenu from "../../Components/Admin/SideMenu";
import Swal from "sweetalert2";

//import axios from "axios";
export default {
    components: {
        Link,
        Navbar,
        SideMenu,
        Swal,
    },
    
    methods:{
        show(message , type) {
        Swal.fire({
            icon: type,
            title: "Message",
            text: message,
            footer: '<a href="">Why do I have this issue?</a>'
            })
                }
    }
};
</script>
