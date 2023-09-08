<x-app-layout>
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center text-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h1 class="fw-semibold display-4"><span class="text-primary">Case</span> Studies</h1>
                    <p class="px-4 lead">A small selection of projects I've worked on - including those completed by myself and as a team..</p>
                </div>
            </div>
        </div>
    </section>


    <section class="mb-5 pb-5">
        <div class="container">
            <div class="row row-cols-lg-3 justify-content-center gap-4 g-5">
                @for ($i = 0; $i < 4; $i++)
                    <x-col-card title="Outsyd Fashion" subtext="Development | Support" link="https://outsydfashion.com/" cta="View case study"/>
                @endfor
            </div>
        </div>
    </section>
</x-app-layout>
