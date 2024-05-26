<template>
    <Layout>
        <div class="w-full">
            <div class="flex justify-center">  <!--flex justify-center ให้อยู่บรรเดียวกัน อยู่กึ่งกลาง-->
                <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-700">เอกสารประกอบการสอน</h1>
                <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-blue-600">(PowerPoint)</h1>
            </div>
            <div class="grid grid-cols-4 gap-6 px-16 mt-10"> <!--แสดง 4 คอลัมป์-->
                <div v-for="(subject,index) in subjectData" :key="subject.id">
                    <TeachingMaterialCard :subject="subject"/>
                </div>

            </div>
        </div>
    </Layout>
</template>


<script>
import Layout from "@/Pages/Layout/Layout.vue";
import TeachingMaterialCard from "@/Pages/Components/TeachingMaterialCard.vue";
import { Link } from "@inertiajs/inertia-vue3";



export default {
    name: "Index",
    components: {Layout, TeachingMaterialCard, Link},
    props: {
        subjects:{
            typ:Object,
            required:true
        }
    },
    data() {
        return {
            subjectData: null,
            pagination: null
        }
    },
    mounted() {
        this.subjectData = this.subjects.data
        this.pagination = this.subjects.meta.pagination;


        // console.log('...............');
        // console.log(this.pagination);
        // console.log('...............');
    },



};
</script>


