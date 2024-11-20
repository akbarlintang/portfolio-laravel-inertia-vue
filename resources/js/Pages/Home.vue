<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Typed from 'typed.js';
import { onMounted, onBeforeUnmount } from 'vue';

defineProps({
    
});

// Initialize Typed.js when the component is mounted
onMounted(() => {
    const options = {
        strings: ['Software Engineer', 'Fullstack Developer', 'Web Developer', 'Backend Developer'],
        typeSpeed: 50,
        backSpeed: 25,
        loop: true,
    };

    const typed = new Typed('#typed-element', options);

    // Cleanup Typed.js instance when the component is unmounted
    onBeforeUnmount(() => {
        typed.destroy();
    });
});
</script>

<template>
    <Head title="Home" />
    <div class="bg-zinc-800 text-white/50">
        <section class="h-screen flex flex-col justify-center items-center align-middle text-white">
            <div>
                <div class="mt-6">
                    <h1 id="banner-name" class="font-bold">Akbar</h1>
                    <h1 id="banner-subname" class="font-bold">Lintang Aji</h1>

                    <br>
                    <span id="typed-element"></span>
                    <h3 class="text-3xl">2+ years of experience</h3>
                </div>

                <div class="absolute left-0 top-0 start-0 mt-6 ms-12">
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td width="30px"><i class="lni lni-envelope-1"></i></td>
                                    <td>lintangajiakbar@gmail.com</td>
                                </tr>
                                <tr>
                                    <td width="30px"><i class="lni lni-map-marker-5"></i></td>
                                    <td>Semarang, Indonesia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- About me -->
        <section id="about-me" class="flex flex-col justify-center items-center align-middle text-white">
            <div>
                <div class="mb-12 text-center flex justify-center items-center align-middle text-white text-5xl font-bold">
                    <div><i class="lni lni-user-4"></i></div>
                    <div class="ml-3">About Me</div>
                </div>

                <div class="container">
                    <h4 class="introduction">I am a Full Stack Web Developer with over two years of professional experience, proficient in a diverse range of web development technologies. I have a strong foundation in HTML, CSS (Bootstrap and Tailwind), JavaScript (jQuery and Vue.js), PHP (Laravel and CodeIgniter), Python (Django), and MySQL. <br><br> My expertise extends across the entire web development process, with a particular focus on back-end implementation. I am dedicated to delivering efficient and innovative solutions, continuously adapting to industry trends and emerging technologies.</h4>
                </div>
            </div>
        </section>

        <section id="works" class="flex flex-col justify-center items-center align-middle text-white section-break">
            <div>
                <div class="mb-12 text-center flex justify-center items-center align-middle text-white text-5xl font-bold">
                    <div><i class="lni lni-briefcase-2"></i></div>
                    <div class="ml-3">Work Experience</div>
                </div>

                <div class="card mb-5 work-card mx-3 mx-sm-0 rounded-lg">
                    <div class="grid grid-cols-3 gap-0">
                        <div class="col-span-1 text-center p-6">
                            <div class="work-card-img-container flex justify-center">
                                <img src="images/nim_logo.png" class="img-fluid work-card-img" alt="Logo Nimnet">
                            </div>
                        </div>
                        <div class="col-span-2 p-6">
                            <div class="card-body h-full flex flex-col justify-center">
                                <div class="card-title font-bold text-2xl">Full Stack Developer</div>
                                <div class="card-subtitle">PT. Nesta Indo Media</div>
                                <div class="mt-3">
                                    <div>May 2024 - Present</div>
                                    <div>Semarang, Indonesia · On-site</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-5 work-card mx-3 mx-sm-0 rounded-lg">
                    <div class="grid grid-cols-3 gap-0">
                        <div class="col-span-1 text-center p-6">
                            <div class="work-card-img-container flex justify-center">
                                <img src="images/saraga_logo.svg" class="img-fluid work-card-img" alt="Logo Saraga">
                            </div>
                        </div>
                        <div class="col-span-2 p-6">
                            <div class="card-body h-full flex flex-col justify-center">
                                <div class="card-title font-bold text-2xl">Full Stack Developer</div>
                                <div class="card-subtitle">Saraga</div>
                                <div class="mt-3">
                                    <div>February 2024 - May 2024</div>
                                    <div>Jakarta, Indonesia · Remote</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-5 work-card mx-3 mx-sm-0 rounded-lg">
                    <div class="grid grid-cols-3 gap-0">
                        <div class="col-span-1 text-center p-6">
                            <div class="work-card-img-container flex justify-center">
                                <img src="images/techarea_logo2.png" class="img-fluid work-card-img" alt="Logo Techarea">
                            </div>
                        </div>
                        <div class="col-span-2 p-6">
                            <div class="card-body h-full flex flex-col justify-center">
                                <div class="card-title font-bold text-2xl">Web Developer</div>
                                <div class="card-subtitle">Techarea Indonesia</div>
                                <div class="mt-3">
                                    <div>November 2021 - August 2023</div>
                                    <div>Semarang, Indonesia · On-site</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-5 work-card mx-3 mx-sm-0 rounded-lg">
                    <div class="grid grid-cols-3 gap-0">
                        <div class="col-span-1 text-center p-6">
                            <div class="work-card-img-container flex justify-center">
                                <img src="images/techarea_logo2.png" class="img-fluid work-card-img" alt="Logo Techarea">
                            </div>
                        </div>
                        <div class="col-span-2 p-6">
                            <div class="card-body h-full flex flex-col justify-center">
                                <div class="card-title font-bold text-2xl">Web Developer Intern</div>
                                <div class="card-subtitle">Techarea Indonesia</div>
                                <div class="mt-3">
                                    <div>March 2021 - May 2021</div>
                                    <div>Semarang, Indonesia · On-site</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Logo clouds
        <section>
            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world’s most innovative teams</h2>
                    <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48" />
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48" />
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48" />
                        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48" />
                        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48" />
                    </div>
                </div>
            </div>
        </section> -->
    </div>
</template>
