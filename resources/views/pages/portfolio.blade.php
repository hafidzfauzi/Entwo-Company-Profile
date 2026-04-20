@extends('layouts.app')

@section('content')
<div class="relative bg-primary pt-24 min-h-screen overflow-hidden">
    {{-- Decorative Glow Effects --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-secondary/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/10 rounded-full blur-3xl translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
    
    {{-- Portfolio Header --}}
    <section class="relative pt-24 pb-12 z-10">
        <div class="max-w-7xl mx-auto px-6">
            <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm mb-4">Our Track Record</h4>
            <h1 class="text-4xl md:text-6xl font-black text-white uppercase leading-none">
                Our <span class="text-transparent" style="-webkit-text-stroke: 1px #38BDF8;">Projects</span>
            </h1>
            <p class="mt-4 text-slate-400 max-w-2xl text-sm leading-relaxed">
                Menghadirkan solusi teknologi dan rekayasa terbaik untuk masa depan industri yang lebih efisien dan aman.
            </p>

            {{-- Filter Buttons --}}
            <div class="flex flex-wrap gap-4 mt-12 border-b border-slate-800 pb-8">
                <button class="px-6 py-2 rounded-full bg-secondary text-primary text-sm font-black shadow-lg shadow-secondary/20">All Projects</button>
                <button class="px-6 py-2 rounded-full bg-slate-800/50 text-slate-400 text-sm font-bold hover:bg-secondary hover:text-primary transition-all uppercase text-[10px] tracking-widest border border-slate-700">Automation</button>
                <button class="px-6 py-2 rounded-full bg-slate-800/50 text-slate-400 text-sm font-bold hover:bg-secondary hover:text-primary transition-all uppercase text-[10px] tracking-widest border border-slate-700">Software</button>
                <button class="px-6 py-2 rounded-full bg-slate-800/50 text-slate-400 text-sm font-bold hover:bg-secondary hover:text-primary transition-all uppercase text-[10px] tracking-widest border border-slate-700">Maintenance</button>
            </div>
        </div>
    </section>

    {{-- Portfolio Grid Section --}}
    {{-- PERBAIKAN 1: Tambahkan x-data di sini --}}
    <section id="portfolio" class="relative pb-24 z-10" x-data="{ page: 1 }">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                {{-- ============================== --}}
                {{-- HALAMAN 1 (Projects 1 - 6) --}}
                {{-- ============================== --}}

                {{-- Project 1: Perpustakaan Cilacap --}}
                <div x-show="page === 1" x-transition.duration.500ms class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectPerpus.png') }}" alt="Perpustakaan Cilacap" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Monitoring</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            PERPUSTAKAAN CILACAP
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Changing the existing system that uses paper to record fire equipment such as fire extinguishers, hydrant boxes and others by using mobile and web applications for scheduled recording and monitoring. In recording using a mobile application, it is assisted by QRcode and RFID tagging as a mark on fire equipment assets.
                        </p>
                    </div>
                </div>

                {{-- Project 2: Spray Taman --}}
                <div x-show="page === 1" x-transition.duration.500ms class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectSpray.png') }}" alt="Spray Taman" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Smart Irrigation</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            SPRAY TAMAN 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            A garden spray system is an ideal solution to ensure plants get the right amount of water, while minimizing waste of resources. This garden spray system installation project aims to create a healthy and beautiful environment by providing a smart and efficient watering solution by utilizing the latest technology in irrigation systems. With this project, we can ensure that the plants in the garden receive the right amount of water at the right time, which can help improve plant health and growth while also conserving water resources.
                        </p>
                    </div>
                </div>

                {{-- Project 3: Weighbridge Calibration --}}
                <div x-show="page === 1" x-transition.duration.500ms class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectWeighbridge.png') }}" alt="Weighbridge Calibration" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Calibration</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            WEIGHBRIDGE CALIBRATION 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Weighbridge calibration is the process of testing or calibrating a weighbridge to ensure that the scale provides accurate and reliable results in weighing vehicles. The results of these scales are important for trading, shipping or safe load management purposes. 
                        </p>
                    </div>
                </div>

                {{-- Project 4: FO Jetty --}}
                <div x-show="page === 1" x-transition.duration.500ms class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectFO.png') }}" alt="Fiber Optic Jetty to COB" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Infrastructure</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            INSTALLATION FIBER OPTIC JETTY TO COB 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            A project that involves installing fiber optic network infrastructure that connects the jetty to the control center or head office (COB) that manages the communications network. Jetties are important points where there is a need to facilitate communication and data transfer, especially in maritime facilities, while COB acts as the operational center.                    
                        </p>
                    </div>
                </div>

                {{-- Project 5: Damkar Apps --}}
                <div x-show="page === 1" x-transition.duration.500ms class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectDamkar.png') }}" alt="Digital Damkar" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            DEVELOPMENT APPS DIGITAL DAMKAR
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Changing the existing system that uses paper to record fire equipment such as fire extinguishers and hydrant boxes by using mobile and web applications for scheduled recording and monitoring. The recording process using a mobile application is assisted by QRcode and RFID tagging as a mark on fire equipment assets.                    
                        </p>
                    </div>
                </div>

                {{-- Project 6: Face Detection --}}
                <div x-show="page === 1" x-transition.duration.500ms class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectFaceDetection.png') }}" alt="Face Detection" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Security System</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            FACE DETECTION INSTALLATION IN THE FILTER BUILDING 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            The installation portal in the PLTU parking area uses a barrier gate, which is a system installed at the entrance or exit of the Steam Power Plant (PLTU) parking area which is equipped with a barrier gate or automatic door bar.
                        </p>
                    </div>
                </div>

                {{-- ============================== --}}
                {{-- HALAMAN 2 (Projects 7 - 12) --}}
                {{-- ============================== --}}

                {{-- Project 7: Portal Installation --}}
                <div x-show="page === 2" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectPortal.png') }}" alt="Portal Installation" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Automation & Security</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            PORTAL INSTALLATION 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            The installation portal in the PLTU parking area uses a barrier gate, which is a system installed at the entrance or exit of the Steam Power Plant (PLTU) parking area which is equipped with a barrier gate or automatic door bar.
                        </p>
                    </div>
                </div>

                {{-- Project 8: HSE Performance --}}
                <div x-show="page === 2" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectHSE.png') }}" alt="HSE Performance" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software & Monitoring</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            HSE PERFORMANCE
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            application or platform to determine the performance of the K3 department regarding data on K3 activities such as work accidents. K3 performance monitoring and data analysis. to provide a trend or graph.
                        </p>
                    </div>
                </div>

                {{-- Project 9: K3 Reporter --}}
                <div x-show="page === 2" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectK3Reporter.png') }}" alt="K3 Reporter" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Safety & Reporting</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            K3 REPORTER 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Report incidents, accidents, or near-accidents that occur at work. This report helps companies conduct investigations and take preventive measures to avoid similar incidents in the future.
                        </p>
                    </div>
                </div>

                {{-- Project 10: Operator License --}}
                <div x-show="page === 2" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectLicense.png') }}" alt="Operator License" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Information System</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            OPERATOR LICENSE 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Operator's license information system for. monitoring official documents given to individuals or companies to do certain things. Provide notifications to users if the license has expired.
                        </p>
                    </div>
                </div>

                {{-- Project 11: Monitoring Batubara --}}
                <div x-show="page === 2" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectCoal.png') }}" alt="Aplikasi Monitoring Batubara" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Resource Management</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            APLIKASI MONITORING BATUBARA 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            software application designed to monitor various aspects related to coal production, transportation, storage and distribution. Apart from that, it is used to monitor the coal stock inventory available at the coal yard and display HOP stock information on the monitoring dashboard and monitor ship arrivals at the Cilacap PLTU.
                        </p>
                    </div>
                </div>

                {{-- Project 12: CCTV Ship Unloader --}}
                <div x-show="page === 2" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectShipUnloader.png') }}" alt="CCTV Ship Unloader" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Visual Surveillance</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            INSTALLATION OF CCTV SYSTEM FOR SHIP UNLOADER (SU) UNITS 1&2 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            The installation of a CCTV system aims to enable better visual monitoring of the process of collecting ship cargo from ship to land or vice versa. By using cameras installed in strategic locations around the ship loading unit, operators or officers can monitor these activities in real-time remotely.
                        </p>
                    </div>
                </div>

                {{-- ============================== --}}
                {{-- HALAMAN 3 (Projects 13 - 18) --}}
                {{-- ============================== --}}

                {{-- Project 13: EBS Transfer --}}
                <div x-show="page === 3" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectEBS.png') }}" alt="EBS Transfer Services" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Industrial Electronics</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            EBS TRANSFER SERVICE
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Electronic systems are used in various industries, especially in the mining industry, mineral processing, and industries that involve the transportation of large amounts of material using conveyor belts.
                        </p>
                    </div>
                </div>

                {{-- Project 14: Software Perizinan --}}
                <div x-show="page === 3" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectPerizinan.png') }}" alt="Software Perizinan" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Licensing & Approval</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            SOFTWARE PERIZINAN
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            A project that aims to build a software platform that allows the licensing process to be carried out online. This platform is usually designed to facilitate the process of applying, evaluating and issuing permits by the authorities so that they can monitor all permits in PLTU.
                        </p>
                    </div>
                </div>

                {{-- Project 15: Wall Display --}}
                <div x-show="page === 3" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectWallDisplay.png') }}" alt="Wall Display CCR" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Control Room</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            WALL DISPLAY
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Improve the visibility, readability and accessibility of important operational information for PLTU operators. By using effective wall displays, operators can quickly respond to changing conditions and take necessary actions to keep power plant operations running smoothly and efficiently.
                        </p>
                    </div>
                </div>

                {{-- Project 16: Condensor CCTV --}}
                <div x-show="page === 3" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectCondensor.png') }}" alt="Condensor CCTV" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">CCTV Technology</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            CONDENSOR CCTV 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            CCTV condenser is an electronic component used in CCTV cameras to convert analog video signals into digital signals. It helps in processing and transmitting video data over coaxial cable or network.
                        </p>
                    </div>
                </div>

                {{-- Project 17: Solar Cell --}}
                <div x-show="page === 3" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectSolarCell.png') }}" alt="Solar Cell" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Renewable Energy</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            SOLAR CELL 
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Projects that involve the installation and use of solar panel or solar cell technology to generate electricity from solar energy. Solar panels consist of solar cells that capture solar energy and convert it into electrical energy that can be used to supply power to homes, commercial buildings, industrial facilities, or even the electric grid.
                        </p>
                    </div>
                </div>

                {{-- Project 18: Aplikasi Absensi Online --}}
                <div x-show="page === 3" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectAbsen.png') }}" alt="Aplikasi Absensi Online" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software Development</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2020</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            APLIKASI ABSENSI ONLINE
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            Software application used to record PLTU employee attendance digitally and in real-time via an online platform. This application is usually used as a replacement or complement to traditional manual attendance systems such as attendance cards or attendance books.
                    </div>
                </div>

                {{-- ============================== --}}
                {{-- HALAMAN 4 (Project 19) --}}
                {{-- ============================== --}}

                {{-- Project 19: PIMS OSISOFT Optimization --}}
                <div x-show="page === 4" x-transition.duration.500ms style="display: none;" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 hover:shadow-secondary/10 transition-all duration-500">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ Vite::asset('resources/images/projectPIMS.png') }}" alt="PIMS OSISOFT" class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110 opacity-90 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-primary/40 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center"></div>
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">System Integrator</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2020</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase   leading-tight mb-3">
                            OPTIMALISASI FUNGSI PIMS OSISOFT
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6  line-clamp-17">
                            To increase operational efficiency, improve system reliability, and optimize overall performance. This can be achieved by ensuring accurate and timely data collection and analysis, identifying areas where efficiency can be improved, and optimizing operational processes. by monitoring in real time and wherever you are 24/7 using mobile apps.
                        </p>
                    </div>
                </div>
            </div>
            {{-- UI PAGINATION (Versi Dark Mode) --}}
            <div class="flex justify-center items-center mt-16 space-x-3">
                <button @click="if(page > 1) { page--; document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' }) }"
                        class="px-4 py-2 rounded-lg bg-slate-800 border-2 border-slate-700 border-b-4 text-slate-400 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px] transition-all font-bold text-sm shadow-sm disabled:opacity-50 disabled:cursor-not-allowed"
                        :disabled="page === 1">
                    Prev
                </button>

                {{-- Tombol Nomor --}}
                <button @click="page = 1; document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' })" :class="page === 1 ? 'bg-secondary text-primary border-secondary border-b-4' : 'bg-slate-800 text-slate-400 border-slate-700 border-b-4 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px]'" class="w-10 h-10 rounded-lg border-2 transition-all font-bold text-sm flex items-center justify-center">1</button>
                <button @click="page = 2; document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' })" :class="page === 2 ? 'bg-secondary text-primary border-secondary border-b-4' : 'bg-slate-800 text-slate-400 border-slate-700 border-b-4 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px]'" class="w-10 h-10 rounded-lg border-2 transition-all font-bold text-sm flex items-center justify-center">2</button>
                <button @click="page = 3; document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' })" :class="page === 3 ? 'bg-secondary text-primary border-secondary border-b-4' : 'bg-slate-800 text-slate-400 border-slate-700 border-b-4 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px]'" class="w-10 h-10 rounded-lg border-2 transition-all font-bold text-sm flex items-center justify-center">3</button>
                <button @click="page = 4; document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' })" :class="page === 4 ? 'bg-secondary text-primary border-secondary border-b-4' : 'bg-slate-800 text-slate-400 border-slate-700 border-b-4 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px]'" class="w-10 h-10 rounded-lg border-2 transition-all font-bold text-sm flex items-center justify-center">4</button>

                <button @click="if(page < 4) { page++; document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' }) }"
                        class="px-4 py-2 rounded-lg bg-slate-800 border-2 border-slate-700 border-b-4 text-slate-400 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px] transition-all font-bold text-sm shadow-sm disabled:opacity-50 disabled:cursor-not-allowed"
                        :disabled="page === 4">
                    Next
                </button>
            </div>

        </div>
    </section>
    {{-- Glow tambahan di dasar agar tidak terputus di footer --}}
    <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>
</div>
@endsection
