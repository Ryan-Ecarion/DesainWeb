
@extends('layouts.app')
@section('title', 'Category Training Center Poliban')
@section('content')


<div class="h-[112px]">
        <nav class="fixed top-0 flex items-center w-full justify-between p-8 bg-white z-30">
            <a href="index.html">
                <img src="{{assets('assets/images/logos/Logo.svg')}}" class="flex shrink-0" alt="logo">
            </a>
            <ul class="flex items-center justify-center gap-8">
                <li class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="view-booking.html">View My Booking</a>
                </li>
                <li class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="">Workshop</a>
                </li>
                <li class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="">Community</a>
                </li>
                <li class="font-medium text-aktiv-grey hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                    <a href="">Testimony</a>
                </li>
            </ul>
            <a href="#" class="flex items-center rounded-full h-12 px-6 gap-[10px] w-fit shrink-0 bg-aktiv-green">
                <span class="font-semibold text-white">Contact CS</span>
                <img src="{{asset('assets/images/icons/whatsapp.svg')}}" class="w-6 h-6" alt="icon">
            </a>
        </nav>
    </div>
    <section id="Category" class="w-full max-w-[1280px] mx-auto px-[52px] mt-[52px] mb-[100px]">
        <div class="flex flex-col gap-9">
            <div class="flex flex-col items-center gap-1">
                <h1 class="font-Neue-Plak-bold text-[32px] leading-[44.54px] capitalize">Self Improvement (9)</h1>
                    {{$category->name}} {{{$category->workshops->count()}}}
</h1>
                <div class="flex items-center gap-2 ">
                    <a class="font-medium text-aktiv-grey last:font-semibold last:text-aktiv-black">Homepage</a>
                    <span>></span>
                    <a class="font-medium text-aktiv-grey last:font-semibold last:text-aktiv-black">Category Workshop</a>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
            
            @forelse ($category->workshops as $itemNewWorkshop)
<a href="{{route('front.details', $itemNewWorkshop->slug)}}" class="card">
                    <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-9 bg-white">
                        <div class="flex flex-col gap-[18px]">
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-16 rounded-full flex shrink-0 overflow-hidden">
                                    <img src="assets/images/photos/photo1.png" class="w-full h-full object-cover" alt="avatar">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-semibold text-lg leading-[27px]">Megamore S Qie</p>
                                    <p class="font-medium text-aktiv-grey">Motivator Intructor</p>
                                </div>
                            </div>
                            <div class="thumbnail-container relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="assets/images/thumbnails/thumbnail1.png" class="w-full h-full object-cover" alt="thumbnail">
                                <div class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-green text-white z-10">
                                    <img src="assets/images/icons/medal-star.svg" class="w-6 h-6" alt="icon">
                                    <span class="font-semibold">OPEN</span>
                                </div>
                            </div>
                            <div class="card-detail flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/calendar-2.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">Tue, 30 May 2024</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/timer.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">09:30 AM</span>
                                    </div>
                                </div>
                                <h3 class="title min-h-[56px] font-semibold text-xl line-clamp-2 hover:line-clamp-none">Mastering the Art of Public Speaking: Practical Tips and Powerful Techniques</h3>
                                <p class="font-medium text-aktiv-grey">Self Improvement</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-[6px]">
                                <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp160.000</p>
                                <p class="font-medium text-aktiv-grey">/person</p>
                            </div>
                            <img src="assets/images/icons/arrow-right.svg" class="w-12 h-12 flex shrink-0" alt="icon">
                        </div>
                    </div>
                </a>
                <a href="details-started.html" class="card">
                    <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-9 bg-white">
                        <div class="flex flex-col gap-[18px]">
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-16 rounded-full flex shrink-0 overflow-hidden">
                                    <img src="assets/images/photos/photo2.png" class="w-full h-full object-cover" alt="avatar">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-semibold text-lg leading-[27px]">Feri Ahmad</p>
                                    <p class="font-medium text-aktiv-grey">Full-Stack Dev Insturctor</p>
                                </div>
                            </div>
                            <div class="thumbnail-container relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="assets/images/thumbnails/thumbnail2.png" class="w-full h-full object-cover" alt="thumbnail">
                                <div class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-orange text-white z-10">
                                    <img src="assets/images/icons/timer-start.svg" class="w-6 h-6" alt="icon">
                                    <span class="font-semibold">STARTED</span>
                                </div>
                            </div>
                            <div class="card-detail flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/calendar-2.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">Fri, 24 May 2024</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/timer.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">09:30 AM</span>
                                    </div>
                                </div>
                                <h3 class="title min-h-[56px] font-semibold text-xl line-clamp-2 hover:line-clamp-none">Mastering HTML & CSS: Intensive Workshop for Beginners</h3>
                                <p class="font-medium text-aktiv-grey">Programming</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-[6px]">
                                <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp160.000</p>
                                <p class="font-medium text-aktiv-grey">/person</p>
                            </div>
                            <img src="{{asset('assets/images/icons/Logo-blue.svg')}}" class="w-12 h-12 flex shrink-0" alt="icon">
                        </div>
                    </div>
                </a>
                <a href="details-closed.html" class="card">
                    <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-9 bg-white">
                        <div class="flex flex-col gap-[18px]">
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-16 rounded-full flex shrink-0 overflow-hidden">
                                    <img src="assets/images/photos/photo3.png" class="w-full h-full object-cover" alt="avatar">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-semibold text-lg leading-[27px]">Ichsan Smth</p>
                                    <p class="font-medium text-aktiv-grey">UIUX Designer Insturctor</p>
                                </div>
                            </div>
                            <div class="thumbnail-container relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="assets/images/thumbnails/thumbnail3.png" class="w-full h-full object-cover" alt="thumbnail">
                                <div class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-red text-white z-10">
                                    <img src="assets/images/icons/sand-timer.svg" class="w-6 h-6" alt="icon">
                                    <span class="font-semibold">CLOSED</span>
                                </div>
                            </div>
                            <div class="card-detail flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/calendar-2.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">Tue, 30 May 2024</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/timer.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">09:30 AM</span>
                                    </div>
                                </div>
                                <h3 class="title min-h-[56px] font-semibold text-xl line-clamp-2 hover:line-clamp-none">UX/UI Design: Creating Amazing User Experiences</h3>
                                <p class="font-medium text-aktiv-grey">Art & Design</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-[6px]">
                                <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp160.000</p>
                                <p class="font-medium text-aktiv-grey">/person</p>
                            </div>
                            <img src="assets/images/icons/arrow-right.svg" class="w-12 h-12 flex shrink-0" alt="icon">
                        </div>
                    </div>
                </a>
                <a href="details.html" class="card">
                    <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-9 bg-white">
                        <div class="flex flex-col gap-[18px]">
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-16 rounded-full flex shrink-0 overflow-hidden">
                                    <img src="assets/images/photos/photo4.png" class="w-full h-full object-cover" alt="avatar">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-semibold text-lg leading-[27px]">Andika Nerd</p>
                                    <p class="font-medium text-aktiv-grey">Musician Instructor</p>
                                </div>
                            </div>
                            <div class="thumbnail-container relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="assets/images/thumbnails/thumbnail4.png" class="w-full h-full object-cover" alt="thumbnail">
                                <div class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-green text-white z-10">
                                    <img src="assets/images/icons/medal-star.svg" class="w-6 h-6" alt="icon">
                                    <span class="font-semibold">OPEN</span>
                                </div>
                            </div>
                            <div class="card-detail flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/calendar-2.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">Tue, 30 May 2024</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/timer.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">09:30 AM</span>
                                    </div>
                                </div>
                                <h3 class="title min-h-[56px] font-semibold text-xl line-clamp-2 hover:line-clamp-none">Creativity in Music: Developing New Ideas and Inspiration</h3>
                                <p class="font-medium text-aktiv-grey">Music</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-[6px]">
                                <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp160.000</p>
                                <p class="font-medium text-aktiv-grey">/person</p>
                            </div>
                            <img src="assets/images/icons/arrow-right.svg" class="w-12 h-12 flex shrink-0" alt="icon">
                        </div>
                    </div>
                </a>
                <a href="details.html" class="card">
                    <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-9 bg-white">
                        <div class="flex flex-col gap-[18px]">
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-16 rounded-full flex shrink-0 overflow-hidden">
                                    <img src="assets/images/photos/photo5.png" class="w-full h-full object-cover" alt="avatar">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-semibold text-lg leading-[27px]">Topikih Hoode Luicy</p>
                                    <p class="font-medium text-aktiv-grey">Orator Instructor</p>
                                </div>
                            </div>
                            <div class="thumbnail-container relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="assets/images/thumbnails/thumbnail5.png" class="w-full h-full object-cover" alt="thumbnail">
                                <div class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-green text-white z-10">
                                    <img src="assets/images/icons/medal-star.svg" class="w-6 h-6" alt="icon">
                                    <span class="font-semibold">OPEN</span>
                                </div>
                            </div>
                            <div class="card-detail flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/calendar-2.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">Tue, 30 May 2024</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/timer.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">09:30 AM</span>
                                    </div>
                                </div>
                                <h3 class="title min-h-[56px] font-semibold text-xl line-clamp-2 hover:line-clamp-none">Building Confidence and Mastering Sales Techniques: A Complete Guide for Sales Professionals to Achieve Outstanding Results</h3>
                                <p class="font-medium text-aktiv-grey">Self Improvement</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-[6px]">
                                <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp160.000</p>
                                <p class="font-medium text-aktiv-grey">/person</p>
                            </div>
                            <img src="assets/images/icons/arrow-right.svg" class="w-12 h-12 flex shrink-0" alt="icon">
                        </div>
                    </div>
                </a>
                <a href="details.html" class="card">
                    <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-9 bg-white">
                        <div class="flex flex-col gap-[18px]">
                            <div class="flex items-center gap-3">
                                <div class="w-16 h-16 rounded-full flex shrink-0 overflow-hidden">
                                    <img src="assets/images/photos/photo6.png" class="w-full h-full object-cover" alt="avatar">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-semibold text-lg leading-[27px]">Bociel Raez</p>
                                    <p class="font-medium text-aktiv-grey">Psychology Instructor</p>
                                </div>
                            </div>
                            <div class="thumbnail-container relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="assets/images/thumbnails/thumbnail6.png" class="w-full h-full object-cover" alt="thumbnail">
                                <div class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-green text-white z-10">
                                    <img src="assets/images/icons/medal-star.svg" class="w-6 h-6" alt="icon">
                                    <span class="font-semibold">OPEN</span>
                                </div>
                            </div>
                            <div class="card-detail flex flex-col gap-2">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/calendar-2.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">Tue, 30 May 2024</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <img src="assets/images/icons/timer.svg" class="w-6 h-6 flex shrink-0" alt="icon">
                                        <span class="font-medium text-aktiv-grey">09:30 AM</span>
                                    </div>
                                </div>
                                <h3 class="title min-h-[56px] font-semibold text-xl line-clamp-2 hover:line-clamp-none">Managing Stress and Mental Health in the Music Industry</h3>
                                <p class="font-medium text-aktiv-grey">Self Improvement</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-[6px]">
                                <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp160.000</p>
                                <p class="font-medium text-aktiv-grey">/person</p>
                            </div>
                            <img src="assets/images/icons/arrow-right.svg" class="w-12 h-12 flex shrink-0" alt="icon">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <footer class="w-full p-[52px] bg-white">
        <div class="flex flex-col w-full max-w-[1176px] mx-auto gap-8">
            <div class="flex flex-col items-center gap-4">
                <img src="assets/images/logos/Logo-blue.svg" class="h-10" alt="logo">
                <p class="font-medium text-aktiv-grey">Ipsum is a company engaged in offline education.</p>
            </div>
            <hr class="border-[#E6E7EB]">
            <div class="grid grid-cols-3 items-center">
                <p class="flex font-medium text-aktiv-grey">© 2024 Workflow Copyright</p>
                <ul class="flex items-center justify-center gap-6">
                    <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Workshop</a>
                    </li>
                    <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Community</a>
                    </li>
                    <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Testimony</a>
                    </li>
                    <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">About Us</a>
                    </li>
                </ul>
                <ul class="flex items-center justify-end gap-6">
                    <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Instagram</a>
                    </li>
                    <li class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Twitter</a>

                    </li>
                </ul>
            </div>
        </div>
    </footer>

    @endsection