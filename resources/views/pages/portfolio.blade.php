@extends('layouts.app')

@section('content')
<div class="relative bg-primary min-h-screen overflow-hidden">

    {{-- Decorative Glow --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-secondary/20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

    {{-- Portfolio Header --}}
    <section id="portfolio-top" class="relative pt-24 md:pt-32 pb-12 z-10">
        <div class="max-w-7xl mx-auto px-6">
            <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-xs md:text-sm mb-4">Our Track Record</h4>
            <h1 class="text-4xl md:text-6xl font-black text-white uppercase leading-none">
                Our <span class="text-transparent" style="-webkit-text-stroke: 1px #38BDF8;">Projects</span>
            </h1>
            <p class="mt-4 text-slate-400 max-w-2xl text-sm md:text-base leading-relaxed">
                Delivering cutting-edge technology and engineering solutions to drive a more efficient, sustainable, and secure industrial future.
            </p>

            {{-- Filter Buttons --}}
            <div class="flex flex-wrap gap-3 md:gap-4 mt-12 border-b border-slate-800 pb-8">
                <button class="px-5 py-2 md:px-6 md:py-2 rounded-full bg-secondary text-primary text-xs md:text-sm font-black shadow-lg shadow-secondary/20">All Projects</button>
                <button class="px-5 py-2 md:px-6 md:py-2 rounded-full bg-slate-800/50 text-slate-400 text-xs md:text-sm font-bold hover:bg-secondary hover:text-primary transition-all uppercase tracking-widest border border-slate-700">Automation</button>
                <button class="px-5 py-2 md:px-6 md:py-2 rounded-full bg-slate-800/50 text-slate-400 text-xs md:text-sm font-bold hover:bg-secondary hover:text-primary transition-all uppercase tracking-widest border border-slate-700">Software</button>
                <button class="px-5 py-2 md:px-6 md:py-2 rounded-full bg-slate-800/50 text-slate-400 text-xs md:text-sm font-bold hover:bg-secondary hover:text-primary transition-all uppercase tracking-widest border border-slate-700">Maintenance</button>
            </div>
        </div>
    </section>

    {{-- Portfolio Grid Section --}}
    <section id="portfolio" class="relative pb-24 z-10"
        x-data="{ page: 1 }"
        x-init="$watch('page', value => {
            document.getElementById('portfolio-top').scrollIntoView({ behavior: 'smooth' });
        })">

        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">

                {{-- ============================== --}}
                {{-- PAGE 1 --}}
                {{-- ============================== --}}

                <div x-show="page === 1" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectPerpus.png') }}" alt="Perpustakaan Cilacap" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Monitoring</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">PERPUSTAKAAN CILACAP</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Changing the existing manual system to a mobile and web application for fire asset monitoring using QRcode and RFID tagging.</p>
                    </div>
                </div>

                <div x-show="page === 1" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectSpray.png') }}" alt="Spray Taman" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Smart Irrigation</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">SPRAY TAMAN</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">An automated garden spray system using the latest irrigation technology to optimize water usage and plant health.</p>
                    </div>
                </div>

                <div x-show="page === 1" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectWeighbridge.png') }}" alt="Calibration" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Calibration</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">WEIGHBRIDGE CALIBRATION</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Testing and calibrating weighbridges to ensure accurate vehicle load management.</p>
                    </div>
                </div>

                <div x-show="page === 1" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectFO.png') }}" alt="FO Jetty" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Infrastructure</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">FO JETTY TO COB</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Installation of fiber optic network infrastructure connecting maritime jetty facilities to the central control office.</p>
                    </div>
                </div>

                <div x-show="page === 1" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectDamkar.png') }}" alt="Damkar" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2023</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">DIGITAL DAMKAR APPS</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">App development for fire safety monitoring and assets recording, replacing paper-based workflows.</p>
                    </div>
                </div>

                <div x-show="page === 1" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectFaceDetection.png') }}" alt="Face Detection" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Security System</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">FACE DETECTION FILTER BLDG</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Integrating facial recognition technology into industrial filter building security for enhanced access control.</p>
                    </div>
                </div>

                {{-- ============================== --}}
                {{-- HALAMAN 2 (7 - 12) --}}
                {{-- ============================== --}}

                <div x-show="page === 2" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectPortal.png') }}" alt="Portal Installation" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Automation & Security</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">PORTAL INSTALLATION</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Deployment of automatic barrier gate systems integrated with sensor technology for vehicle access control.</p>
                    </div>
                </div>

                <div x-show="page === 2" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectHSE.png') }}" alt="HSE Performance" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software & Monitoring</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">HSE PERFORMANCE DASHBOARD</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">A digital platform for monitoring K3 metrics, analyzing incident trends, and visualizing safety performance.</p>
                    </div>
                </div>

                <div x-show="page === 2" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectK3Reporter.png') }}" alt="K3 Reporter" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Safety & Reporting</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">K3 REPORTER SYSTEM</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Incident reporting system designed to capture workplace near-misses and accidents for rapid investigation.</p>
                    </div>
                </div>

                <div x-show="page === 2" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectLicense.png') }}" alt="Operator License" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Information System</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2022</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">OPERATOR LICENSE MONITORING</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">A centralized database system to track operator certifications featuring automated renewal notifications.</p>
                    </div>
                </div>

                <div x-show="page === 2" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectCoal.png') }}" alt="Coal Monitoring" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Resource Management</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">COAL YARD MONITORING</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Software solution for tracking coal production, storage, and inventory visuals at PLTU Cilacap.</p>
                    </div>
                </div>

                <div x-show="page === 2" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectShipUnloader.png') }}" alt="CCTV Ship Unloader" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Visual Surveillance</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">SHIP UNLOADER CCTV SYSTEM</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Strategic CCTV installation for visual monitoring of maritime cargo transfer from ship to shore.</p>
                    </div>
                </div>

                {{-- ============================== --}}
                {{-- HALAMAN 3 (13 - 18) --}}
                {{-- ============================== --}}

                <div x-show="page === 3" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectEBS.png') }}" alt="EBS Transfer" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Industrial Electronics</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">EBS TRANSFER SERVICE</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Electronic system optimization for conveyor belt material transportation in mining operations.</p>
                    </div>
                </div>

                <div x-show="page === 3" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectPerizinan.png') }}" alt="Software Perizinan" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Licensing</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">DIGITAL LICENSING PLATFORM</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Web-based portal to digitize the permit application process featuring automated evaluation workflows.</p>
                    </div>
                </div>

                <div x-show="page === 3" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectWallDisplay.png') }}" alt="Wall Display" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Control Room</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">CCR WALL DISPLAY</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Upgrading Central Control Room visibility for operators to manage critical plant data effectively.</p>
                    </div>
                </div>

                <div x-show="page === 3" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectCondensor.png') }}" alt="Condensor CCTV" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">CCTV Tech</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">CONDENSER CCTV</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Installation of precision components to transmit real-time video signals for condenser unit monitoring.</p>
                    </div>
                </div>

                <div x-show="page === 3" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectSolarCell.png') }}" alt="Solar Cell" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Renewable</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2021</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">SOLAR CELL INSTALLATION</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Implementation of advanced solar panel technology to generate sustainable electricity for industrial facilities.</p>
                    </div>
                </div>

                <div x-show="page === 3" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectAbsen.png') }}" alt="Absensi Online" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2020</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">DIGITAL ATTENDANCE</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Deployment of a real-time digital attendance platform effectively replacing manual card-based systems.</p>
                    </div>
                </div>

                {{-- ============================== --}}
                {{-- HALAMAN 4 (19) --}}
                {{-- ============================== --}}

                <div x-show="page === 4" class="group flex flex-col bg-slate-800/40 backdrop-blur-md rounded-[2.5rem] p-4 border border-slate-700/50 shadow-xl hover:border-secondary/50 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-[2rem] aspect-video bg-slate-900 border border-slate-800">
                        <img src="{{ asset('images/projectPIMS.png') }}" alt="PIMS OSISOFT" class="w-full h-full object-cover transition duration-500 md:group-hover:scale-110">
                    </div>
                    <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">System Integrator</span>
                            <span class="text-slate-500 text-[10px] font-bold bg-slate-900 px-3 py-1 rounded-full border border-slate-700">2020</span>
                        </div>
                        <h3 class="text-white group-hover:text-secondary transition-colors text-xl font-bold uppercase leading-tight mb-3">PIMS OSISOFT OPTIMIZATION</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">Enhancing operational efficiency through data analysis and real-time monitoring via mobile applications.</p>
                    </div>
                </div>

            </div>

            {{-- UI PAGINATION --}}
            <div class="flex flex-wrap justify-center items-center mt-16 gap-3">
                <button @click="if(page > 1) page--"
                        class="px-4 py-2 rounded-lg bg-slate-800 border-2 border-slate-700 border-b-4 text-slate-400 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px] transition-all font-bold text-sm shadow-sm disabled:opacity-30 disabled:cursor-not-allowed"
                        :disabled="page === 1">
                    Prev
                </button>

                <template x-for="p in [1,2,3,4]">
                    <button @click="page = p"
                            :class="page === p
                                ? 'bg-secondary text-primary border-secondary border-b-4'
                                : 'bg-slate-800 text-slate-400 border-slate-700 border-b-4 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px]'"
                            class="w-10 h-10 rounded-lg border-2 transition-all font-black text-sm flex items-center justify-center"
                            x-text="p">
                    </button>
                </template>

                <button @click="if(page < 4) page--"
                        class="px-4 py-2 rounded-lg bg-slate-800 border-2 border-slate-700 border-b-4 text-slate-400 hover:border-secondary hover:text-secondary active:border-b-2 active:translate-y-[2px] transition-all font-bold text-sm shadow-sm disabled:opacity-30 disabled:cursor-not-allowed"
                        :disabled="page === 4">
                    Next
                </button>
            </div>
        </div>
    </section>
</div>
@endsection
