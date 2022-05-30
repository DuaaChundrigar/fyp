<template>
    <div>
        <Navbar />
        <!--Body-->
        <div class="grid grid-cols-6 gap-4 m-2">
            <!--Side bar-->

            <SideMenu />
            <!--Right Side-->
            <div class="col-span-5 ... m-2">
                
                <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Students List</h1>
                <div
                    class="relative flex flex-wrap items-stretch w-6/12 m-10 ml-60 input-group"
                >
                    <input
                        type="search"
                        class="form-control relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded focus:bg-white focus:border-blue-600"
                        placeholder="Search for Student"
                        aria-label="Search"
                        v-model="searchTerm"
                        @keyup="search()"
                    />
                    <!-- <button
                        class="btn px-6 py-2.5 bg-blue-600 text-white rounded shadow-md hover:bg-blue-700 active:bg-blue-800"
                        type="button"
                        id=""
                    >
                        <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="search"
                            class="w-4"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path
                                fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                            ></path>
                        </svg>
                    </button> -->
                </div>

                <!-- Table  -->

                <div class="flex flex-col ">
                                <table class="text-center border ">
                                    <thead class="bg-white border-b ">
                                        <tr>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-gray-900"
                                            >
                                                S.No
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-gray-900"
                                            >
                                                Student Picture
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-gray-900"
                                            >
                                                Student Reg No.
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-gray-900"
                                            >
                                                Student Name
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-gray-900"
                                            >
                                                Email
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-gray-900"
                                            >
                                                Batch
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-gray-900"
                                            >
                                                Program
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-gray-900"
                                            >
                                                Delete Student
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr
                                            v-for="(student, index) in filteredstudents"
                                            :key="student.id"
                                            class="px-6 py-4 text-sm font-medium text-center bg-white border-b text-gray-50ay-900 whitespace-nowrap hover:bg-gray-100"
                                        >
                                            <td
                                                class=""
                                            >
                                                {{ index + 1 }}
                                            </td>
                                            <td
                                                class=""
                                            >
                                                <div class="ml-32">
                                                    <a
                                                    target="_blank"
                                                    :href="
                                                        '/storage/profile_images/' +
                                                        student.profile_image
                                                    "
                                                    >
                                                    <img
                                                        class="w-16 h-16 border-2 rounded-full shadow-lg "
                                                        :src="
                                                            '/storage/profile_images/' +
                                                            student.profile_image
                                                        "
                                                    />
                                                    </a>
                                                </div>
                                            </td>
                                            <td
                                                class=""
                                            >
                                                {{ student.regno }}
                                            </td>
                                            <td
                                                class=""
                                            >
                                                {{ student.name }}
                                            </td>
                                            <td
                                                class=""
                                            >
                                                {{ student.email }}
                                            </td>
                                            <td
                                                class=""
                                            >
                                                {{ student.batch }}
                                            </td>
                                            <td
                                                class=""
                                            >
                                                {{ student.program }}
                                            </td>
                                            <td
                                                class=""
                                            >
                                                <button
                                                    type="button"
                                                    @click="
                                                        deleteStudent(
                                                            student.id
                                                        )
                                                    "
                                                    class="px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-md"
                                                >
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/Admin/Navbar";
import SideMenu from "../../Components/Admin/SideMenu";
import axios from "axios";
import Swal from 'sweetalert2';

export default {
    components: {
        Link,
        Navbar,
        SideMenu,
        Swal,
    },
    props: {
        students: {
            type: Array,
            default: [],
        },
    },

    data() {
        return {
            students: this.students,
            filteredstudents: this.students,
            searchTerm: "",
        };
    },

    methods: {
        deleteStudent(student_id) {
            var vm = this;
            axios
                .post("/admin/students/delete/" + student_id)
                .then((response) => {
                    vm.showNotification("Student Deleted Successfully", "success");
                    this.students = response.data;
                });
        },

        showNotification(message, type) {
            Swal.fire({
                icon: type,
                text: message,
                showConfirmButton: true,
            });
        },

        search() {
            if (this.searchTerm == "") {
                this.filteredstudents = this.students;
            } else {
                this.filteredstudents = this.students.filter((student) => {
                    return (
                        student.regno
                            .toLowerCase()
                            .includes(this.searchTerm.toLowerCase()) ||
                        student.name
                            .toLowerCase()
                            .includes(this.searchTerm.toLowerCase())
                        
                    );
                });
            }
        },

        
    },
};
</script>
