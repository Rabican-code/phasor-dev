<script setup>
import { router } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Nav from '@/Components/Nav.vue';
import { UserCircleIcon, PaperAirplaneIcon } from '@heroicons/vue/24/outline'

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <AppLayout title="Dashboard" class="hidden" />
    <Nav />
    <div class="flex text-black h-[90vh]">
        <div>
            <div class="bg-white sm-m:hidden w-[12vw] rounded-2xl ml-10 h-[80vh]">

                <div class="p-2 py-8 h-[70vh] overflow-auto">
                    <ul class="">
                        <a href="/feedback" class="py-2 px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200">Leave Feedback</a>
                        <!-- <li class="py-2 px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200">FAQ</li> -->
                        <form @submit.prevent="logout">
                            <button class="w-full text-left">
                                <li class="py-2 px-1 my-0.5 rounded-md cursor-pointer hover:bg-gray-200">Sign out</li>
                            </button>
                        </form>

                    </ul>
                </div>
                <div class="bg-gray-100 p-2 py-3 rounded-full mx-2 flex items-center">
                    <UserCircleIcon class="h-8 w-8" />
                    <p>Username</p>
                </div>
            </div>
        </div>

        <div class="mx-4 bg-gray-100 rounded-md w-[87vw]">
            <div class="text-center">
                <p class="my-2">👋 Welcome to Phasor: Your Australian Electrical Standards AI Chat Companion!</p>
                <p>Greetings! I am Phasor, your AI-powered partner for unraveling the intricacies of Australian Electrical
                    Standards. Whether you're an expert in the field or someone looking to learn, I'm here to assist you with a
                    wealth of knowledge.</p>
            </div>
            <div>
                <div class="absolute bottom-4 w-[80vw]">
                    <div class="bg-white w-[60vw] mx-auto rounded-full flex items-center">
                        <input type="text" class="border-none w-[57vw] rounded-l-full" placeholder="Start typing message...">
                        <button class=""><PaperAirplaneIcon class="h-6 w-6" /></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
