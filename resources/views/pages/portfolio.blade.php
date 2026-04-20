@extends('layouts.app')

@section('content')
{{-- Portfolio Header --}}
<section class="pt-32 pb-12 bg-gradient-to-b from-primary/20 to-secondary/50">
    <div class="max-w-7xl mx-auto px-6">
        <h4 class="text-secondary font-bold tracking-[0.2em] uppercase text-sm mb-4">Our Track Record</h4>
        <h1 class="text-4xl md:text-6xl font-black text-primary uppercase italic leading-none">Our <span class="text-outline">Projects</span></h1>

        {{-- Filter Buttons --}}
        <div class="flex flex-wrap gap-4 mt-12 border-b border-slate-100 pb-8">
            <button class="px-6 py-2 rounded-full bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20">All Projects</button>
            <button class="px-6 py-2 rounded-full bg-slate-200 text-slate-500 text-sm font-bold hover:bg-primary hover:text-white transition-all uppercase text-[10px] tracking-widest">Automation</button>
            <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-500 text-sm font-bold hover:bg-primary hover:text-white transition-all uppercase text-[10px] tracking-widest">Software</button>
            <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-500 text-sm font-bold hover:bg-primary hover:text-white transition-all uppercase text-[10px] tracking-widest">Maintenance</button>
        </div>
    </div>
</section>

{{-- Portfolio Grid Section --}}
<section class="pt-32 pb-12 bg-gradient-to-b from-secondary/50 to-primary/20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            {{-- Project: Perpustakaan Cilacap --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                {{-- Card Image --}}
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectPerpus.png') }}"
                        alt="Perpustakaan Cilacap"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">

                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                {{-- Card Content --}}
                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Monitoring & Asset Management</span>
                        <span class="text-slate-400 text-[10px] font-bold">2023</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        PERPUSTAKAAN CILACAP
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Changing the existing system that uses paper to record fire equipment such as fire extinguishers, hydrant boxes and others by using mobile and web applications for scheduled recording and monitoring. In recording using a mobile application, it is assisted by QRcode and RFID tagging as a mark on fire equipment assets.
                    </p>
                </div>
            </div>

            {{-- Project: Spray Taman --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectSpray.png') }}"
                        alt="Spray Taman"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Smart Irrigation</span>
                        <span class="text-slate-400 text-[10px] font-bold">2023</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        SPRAY TAMAN
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        A garden spray system is an ideal solution to ensure plants get the right amount of water, while minimizing waste of resources. This garden spray system installation project aims to create a healthy and beautiful environment by providing a smart and efficient watering solution by utilizing the latest technology in irrigation.
                    </p>
                </div>
            </div>

            {{-- Project: Weighbridge Calibration --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectWeighbridge.png') }}"
                        alt="Weighbridge Calibration"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Calibration Services</span>
                        <span class="text-slate-400 text-[10px] font-bold">2023</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        WEIGHBRIDGE CALIBRATION
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Weighbridge calibration is the process of testing or calibrating a weighbridge to ensure that the scale provides accurate and reliable results in weighing vehicles. The results of these scales are important for trading, shipping or safe load management purposes.
                    </p>
                </div>
            </div>
            {{-- Project: Installation Fiber Optic Jetty to COB (2023) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectFO.png') }}"
                        alt="Fiber Optic Jetty to COB"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Infrastructure & Network</span>
                        <span class="text-slate-400 text-[10px] font-bold">2023</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        INSTALLATION FIBER OPTIC JETTY TO COB
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        A project that involves installing fiber optic network infrastructure that connects the jetty to the control center or head office (COB) that manages the communications network. Jetties are important points where there is a need to facilitate communication and data transfer, especially in maritime facilities, while COB acts as the operational center.
                    </p>
                </div>
            </div>

            {{-- Project: Development Apps Digital Damkar (2023) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectDamkar.png') }}"
                        alt="Digital Damkar"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software Development</span>
                        <span class="text-slate-400 text-[10px] font-bold">2023</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        DEVELOPMENT APPS DIGITAL DAMKAR
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Changing the existing system that uses paper to record fire equipment such as fire extinguishers and hydrant boxes by using mobile and web applications for scheduled recording and monitoring. The recording process using a mobile application is assisted by QRcode and RFID tagging as a mark on fire equipment assets.
                    </p>
                </div>
            </div>

            {{-- Project: Face Detection Installation (2022) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectFaceDetection.png') }}"
                        alt="Face Detection Installation"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Security System</span>
                        <span class="text-slate-400 text-[10px] font-bold">2022</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        FACE DETECTION INSTALLATION IN THE FILTER BUILDING
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Installation of a face detection system at the Steam Power Plant (PLTU) filter building, equipped with a barrier gate or automatic door bar. This system aims to control vehicle or personnel access entering or leaving the area in an orderly and automated manner to enhance security.
                    </p>
                </div>
            </div>
            {{-- Project: Portal Installation (2022) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectPortal.png') }}"
                        alt="Portal Installation"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Automation & Security</span>
                        <span class="text-slate-400 text-[10px] font-bold">2022</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        PORTAL INSTALLATION
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        The installation portal in the PLTU parking area uses a barrier gate, which is a system installed at the entrance or exit of the Steam Power Plant (PLTU) parking area which is equipped with a barrier gate or automatic door bar. This system aims to control vehicle access entering or leaving the parking area in an orderly and automated manner.
                    </p>
                </div>
            </div>

            {{-- Project: HSE Performance (2022) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectHSE.png') }}"
                        alt="HSE Performance"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software & Monitoring</span>
                        <span class="text-slate-400 text-[10px] font-bold">2022</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        HSE PERFORMANCE
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Application or platform to determine the performance of the K3 department regarding data on K3 activities such as work accidents. It provides K3 performance monitoring and data analysis to provide a trend or graph, used to assess the effectiveness of an organization's health, safety, and environmental management system.
                    </p>
                </div>
            </div>

            {{-- Project: K3 Reporter (2022) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectK3Reporter.png') }}"
                        alt="K3 Reporter"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-grow flex-col">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Safety & Reporting</span>
                        <span class="text-slate-400 text-[10px] font-bold">2022</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        K3 REPORTER
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Report incidents, accidents, or near-accidents that occur at work. This report helps companies conduct investigations and take preventive measures to avoid similar incidents in the future, supporting monitoring and approval workflows for Patrol K3.
                    </p>
                </div>
            </div>
            {{-- Project: Operator License (2022) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                {{-- Card Image --}}
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectLicense.png') }}"
                        alt="Operator License"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">

                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                {{-- Card Content --}}
                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Monitoring & Reporting</span>
                        <span class="text-slate-400 text-[10px] font-bold">2022</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        OPERATOR LICENSE
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Operator's license information system for monitoring official documents given to individuals or companies to do certain things. This system provides notifications to users if the license has expired, ensuring compliance and organized reporting.
                    </p>
                </div>
            </div>

            {{-- Project: Aplikasi Monitoring Batubara (2021) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectCoal.png') }}"
                        alt="Aplikasi Monitoring Batubara"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Resource Management</span>
                        <span class="text-slate-400 text-[10px] font-bold">2021</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        APLIKASI MONITORING BATUBARA
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        A software application designed to monitor various aspects related to coal production, transportation, storage, and distribution. It is used to monitor the coal stock inventory available at the coal yard and display HOP stock information on the monitoring dashboard as well as ship arrivals at the Cilacap PLTU.
                    </p>
                </div>
            </div>

            {{-- Project: CCTV System for Ship Unloader (2021) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectShipUnloader.png') }}"
                        alt="CCTV Ship Unloader"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Visual Surveillance</span>
                        <span class="text-slate-400 text-[10px] font-bold">2021</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        CCTV SYSTEM FOR SHIP UNLOADER (SU) UNITS 1&2
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        The installation of a CCTV system aims to enable better visual monitoring of the process of collecting ship cargo from ship to land or vice versa. By using cameras installed in strategic locations around the ship loading unit, operators or officers can monitor these activities in real-time remotely.
                    </p>
                </div>
            </div>
            {{-- Project: EBS Transfer Services (2021) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                {{-- Card Image --}}
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectEBS.png') }}"
                        alt="EBS Transfer Services"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">

                    {{-- Decorative Tag (Desktop Only Hover) --}}
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                {{-- Card Content (Penjelasan di Bawah Gambar) --}}
                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Industrial Electronics</span>
                        <span class="text-slate-400 text-[10px] font-bold">2021</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        EBS TRANSFER SERVICES
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Electronic systems are used in various industries, especially in the mining industry, mineral processing, and industries that involve the transportation of large amounts of material using conveyor belts.
                    </p>
                </div>
            </div>
            {{-- Project: Software Perizinan (2021) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectPerizinan.png') }}"
                        alt="Software Perizinan"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Licensing & Approval</span>
                        <span class="text-slate-400 text-[10px] font-bold">2021</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        SOFTWARE PERIZINAN
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        A project that aims to build a software platform that allows the licensing process to be carried out online. This platform is designed to facilitate the process of applying, evaluating, and issuing permits by the authorities so that they can monitor all permits in PLTU.
                    </p>
                </div>
            </div>

            {{-- Project: Wall Display (2021) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectWallDisplay.png') }}"
                        alt="Wall Display CCR"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Control Room Visualization</span>
                        <span class="text-slate-400 text-[10px] font-bold">2021</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        WALL DISPLAY
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Improves the visibility, readability, and accessibility of important operational information for PLTU operators in the Central Control Room (CCR). Operators can quickly respond to changing conditions and take necessary actions to keep power plant operations running smoothly.
                    </p>
                </div>
            </div>
            {{-- Project: Condensor CCTV (2021) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectCondensor.png') }}"
                        alt="Condensor CCTV"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">CCTV Technology</span>
                        <span class="text-slate-400 text-[10px] font-bold">2021</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        CONDENSOR CCTV
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        CCTV condenser is an electronic component used in CCTV cameras to convert analog video signals into digital signals. It helps in processing and transmitting video data over coaxial cable or network, improving image quality and adjusting light in various conditions.
                    </p>
                </div>
            </div>

            {{-- Project: Solar Cell (2021) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectSolarCell.png') }}"
                        alt="Solar Cell"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Renewable Energy</span>
                        <span class="text-slate-400 text-[10px] font-bold">2021</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        SOLAR CELL
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Projects that involve the installation and use of solar panel or solar cell technology to generate electricity from solar energy. These panels capture solar energy and convert it into electrical energy to supply power to homes, commercial buildings, or industrial facilities.
                    </p>
                </div>
            </div>

            {{-- Project: Aplikasi Absensi Online (2020) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectAbsen.png') }}"
                        alt="Aplikasi Absensi Online"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">Software Development</span>
                        <span class="text-slate-400 text-[10px] font-bold">2020</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        APLIKASI ABSENSI ONLINE
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Software application used to record PLTU employee attendance digitally and in real-time via an online platform. This application is usually used as a replacement or complement to traditional manual attendance systems.
                    </p>
                </div>
            </div>

            {{-- Project: PIMS OSISOFT Optimization (2020) --}}
            <div class="group flex flex-col bg-slate-50 rounded-[2.5rem] p-4 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-[2rem] aspect-video shadow-inner bg-slate-200">
                    <img src="{{ Vite::asset('resources/images/projectPIMS.png') }}"
                        alt="PIMS OSISOFT"
                        class="w-full h-full object-cover transition duration-700 md:group-hover:scale-110">
                    <div class="absolute inset-0 bg-primary/60 opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <span></span>
                    </div>
                </div>

                <div class="mt-6 px-4 pb-4 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em]">System Integrator</span>
                        <span class="text-slate-400 text-[10px] font-bold">2020</span>
                    </div>

                    <h3 class="text-primary text-xl font-bold uppercase italic leading-tight mb-3">
                        OPTIMALISASI FUNGSI PIMS OSISOFT
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-50">
                        Designed to increase operational efficiency, improve system reliability, and optimize overall performance. This is achieved by ensuring accurate data collection and analysis, identifying efficiency areas, and monitoring in real time 24/7 using mobile apps.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
