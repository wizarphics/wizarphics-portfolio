<x-app-layout hasLatestPosts="true">

    <section
        class="px-4 z-n1 py-5 m-2 m-md-4 rounded-5 overflow-x-hidden d-flex position-relative align-items-center
    bg-black"
        style="height:650px;">

        <div class="area h-100 w-100 position-absolute z-0">
            <ul class="circles">
                <li><img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap Logo"
                        class="w-100 h-100"></li>
                <li><img src="https://logodownload.org/wp-content/uploads/2019/10/adobe-photoshop-logo-0.png"
                        alt="Photoshop Logo" class="w-100 h-100"></li>
                <li><img src="https://en.logodownload.org/wp-content/uploads/2019/10/adobe-Illustrator-logo-4-11.png"
                        alt="Adobe Illustrator Logo" class="w-100 h-100"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/PhpStorm_Icon.svg"
                        alt="Php Storm Logo" class="w-100 h-100"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Visual_Studio_Code_1.35_icon.svg"
                        alt="VSCode Logo" class="w-100 h-100"></li>
                <li><img src="https://discover.strongdm.com/hs-fs/hubfs/google-cloud-logo.png?width=300&height=300&name=google-cloud-logo.png"
                        style="" alt="Google Cloud Logo" class="w-100 h-100"></li>
                <li><img src="https://codeigniter.com/assets/icons/44521256.png" alt="Codeigniter Logo"
                        class="w-100 h-100"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/LaravelLogo.png" alt="Laravel Logo"
                        class="w-100 h-100"></li>
                <li><img src="https://cdn.worldvectorlogo.com/logos/react-2.svg" alt="React Logo" class="w-100 h-100">
                </li>
                <li><img src="https://cdn.worldvectorlogo.com/logos/nodejs-1.svg" alt="NodeJs Logo" class="w-100 h-100">
                </li>
                <li><img src="https://cdn.worldvectorlogo.com/logos/php-1.svg" alt="PHP Logo" class="w-100 h-100"></li>
            </ul>
        </div>
        <div class="container z-2">
            <div class="row">
                <div class="col-md-8 text-center mx-auto">
                    <h1 class="mb-2 text-light display-5 fw-bold">I am
                        <span class="dynamic-type text-primary"
                            data-variants="a Software Developer, a Problem Solver, a Graphics Designer, an Experience Shaper, an Innovator"></span>.
                    </h1>
                    <p class="col-11 mx-auto text-white-50">I am Ademola Adeola, the creative mind behind
                        Wizarphics. With
                        creativity as my extra-soul, I craft exceptional digital solutions that captivate audiences and
                        drive meaningful results.</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative bg-light py-5" id="offers">
        <div class="bitmoji-container">
            {{-- TODO: Add Catch me while you can slider and make the bitmoji impossible to catch after 2s of hover --}}
            <img src="/bitmoji.jpg" alt="" class="bitmoji img-thumbnail rounded-circle shadow-sm">
        </div>

        <div class="container my-5 pt-5">
            <div class="row justify-content-between flex-column flex-md-row">
                <div class="col-md-6 col-lg-6 col-xl-6 p-4">
                    <h2 class="display-7 fw-bold">What I Can Offer Your Brand/Business
                        <span role="button" class="d-none d-md-inline">👉</span>
                        <span role="button" class="d-inline d-md-none">👇</span>
                    </h2>
                    <p>Experience the power of your brand/business unleashed. Discover my comprehensive range of
                        services and unlock new possibilities. View my offers and let's embark on a transformative
                        journey together. <span role="button" class="d-none d-md-inline">👉</span>
                        <span role="button" class="d-inline d-md-none">👇</span>
                    </p>
                    <div class="row mt-5">
                        <div class="col-6">
                            <h3 class="mb-0 text-primary">50+</h3>
                            <p>Completed Projects</p>
                        </div>
                        <div class="col-6">
                            <h3 class="mb-0 text-primary">200+</h3>
                            <p>Community Network</p>
                        </div>
                        <div class="col-6">
                            <h3 class="mb-0 text-primary">20+</h3>
                            <p>Recent Clients</p>
                        </div>
                        <div class="col-6">
                            <h3 class="mb-0 text-primary">4+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-4">
                    <div class="vstack d-none d-md-flex">
                        <div href="#" class="d-flex gap-4 align-items-center">
                            <!--suppress CheckImageSize -->
                            <img src="/6716438.png" alt="" height="70">
                            <div class="vstack justify-content-center">
                                <h3 class="mb-1 fs-5">Software Development</h3>
                                <small>10+ Projects</small>
                            </div>
                            <a class="icon-link icon-link-hover link-body-emphasis link-underline link-underline-opacity-0
                            link-underline-opacity-75-hover col-2"
                                href="#">
                                See more
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                        <hr>
                        <div href="#" class="d-flex gap-4 align-items-center">
                            <!--suppress CheckImageSize -->
                            <img src="/5604309.png" alt="" height="70">
                            <div class="vstack justify-content-center">
                                <h3 class="mb-1 fs-5">Graphics Design</h3>
                                <small>30+ Projects</small>
                            </div>
                            <a class="icon-link icon-link-hover link-body-emphasis link-underline link-underline-opacity-0
                            link-underline-opacity-75-hover col-2"
                                href="#">
                                See more
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                        <hr>
                        <div href="#" class="d-flex gap-4 align-items-center">
                            <!--suppress CheckImageSize -->
                            <img src="/edit.svg" alt="" height="70">
                            <div class="vstack justify-content-center col-5">
                                <h3 class="mb-1 fs-5">Rich Blog Contents</h3>
                                <small>10+ Blog Posts</small>
                            </div>
                            <a class="icon-link icon-link-hover link-body-emphasis link-underline link-underline-opacity-0
                            link-underline-opacity-75-hover col-2"
                                href="{{ env('APP_BLOG') }}" target="_blank">
                                Visit Blog
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="caseStudies">
        <div class="container py-5 my-5">
            <div class="row justify-content-between align-items-center mb-5">
                <div class="col-8">
                    <h2 class="fs-1 fw-bold">Featured projects</h2>
                </div>
                <div class="col-4 mt-n2 mt-md-0 visually-hidden">
                    <a class="icon-link icon-link-hover link-body-emphasis link-underline link-underline-opacity-0
                            link-underline-opacity-75-hover float-end fs-5 me-3"
                        href="#">
                        View all
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row justify-content-between gap-4 gy-5 gx-4">
                @foreach ($cases as $case)
                    <x-col-card title="{{$case->title}}" subtext="{{ $case->short_desc }}" :image="$case->image" link="{{ $case->link }}" cta="View" />
                @endforeach
            </div>
        </div>
    </section>

    <section id="clients-testimonials" class="py-5 mb-0 bg-black position-relative">
        <div class="container my-5">
            <div class="col-md-7 pb-3">
                <h2 class="fw-semibold display-4 text-white">Feedbacks</h2>
                <p class="text-white-50 fs-5">I had the pleasure of collaborating with these amazing individuals, and
                    their feedback
                    speaks
                    volumes...</p>
            </div>
        </div>
        <div class="slide-overlay d-none"></div>
        <div class="slider mb-4">
            <div class="slide-track gap-5">
                @for ($i = 0; $i < 15; $i++)
                    <div class="slide card border-0 rounded-4">
                        <div class="row justify-content-between p-3 pb-0">
                            <div class="col-7 d-flex align-items-center gap-1">
                                <div style="height: 24px; width: 24px;" class="rounded-circle avatar overflow-hidden">
                                    <img src="/bitmoji.jpg" alt="User Image"
                                        class="object-fit-contain h-100 w-100" />
                                </div>
                                <span class="fw-medium small text-white-50"
                                    style="font-size: 12px;">@wizarphics</span>
                            </div>
                            <div class="col-2">
                                <a href="https://github.com/wizarphics" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="#378fe9" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-2 px-3 text-white fw-semibold">
                            <p class="mb-0 small" style="font-size: 9px">
                                Wizarphics provided exceptional UI/UX design services for our project...
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="slider second mb-4">
            <div class="slide-track gap-5">
                @for ($i = 0; $i < 10; $i++)
                    <div class="slide card border-0 rounded-4">
                        <div class="row justify-content-between p-3 pb-0">
                            <div class="col-7 d-flex align-items-center gap-1">
                                <div style="height: 24px; width: 24px;" class="rounded-circle avatar overflow-hidden">
                                    <img src="https://pbs.twimg.com/profile_images/1484692654155776001/mrnBx-My_400x400.jpg"
                                        alt="User Image" class="object-fit-contain h-100 w-100" />
                                </div>
                                <span class="fw-medium small text-white-50"
                                    style="font-size: 12px;">@just_2_wise</span>
                            </div>
                            <div class="col-2">
                                <a href="https://github.com/wizarphics" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="rgb(29, 155, 240)" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-2 px-3 text-white fw-semibold">
                            <p class="mb-0 small" style="font-size: 9px">
                                Wizarphics provided exceptional UI/UX design services for our project...
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="my-5"></div>
    </section>

</x-app-layout>
