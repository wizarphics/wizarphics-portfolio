<section id="latestPosts" class="text-bg-primary py-5">
    <div class="container py-5">
        <div class="row justify-content-between align-items-center mb-5">
            <div class="col-8">
                <h2 class="fs-1 fw-bold">Latest blog posts</h2>
            </div>
            <div class="col-4 mt-n2 mt-md-0">
                <a class="icon-link icon-link-hover link-body-emphasis link-underline link-underline-opacity-0
                            link-underline-opacity-75-hover float-end fs-5 me-3"
                    href="{{ $link }}">
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
            @foreach ($posts as $post)
                <div class="col-md card border-light-subtle shadow rounded-4">
                    <div class="card-img-top mt-n4 bg-black rounded-4 overflow-hidden" style="height: 300px;">
                        <img src="{{ $post['thumbnail'] }}"
                            class="object-fit-cover h-100 w-100" alt="{{ $post['title'] }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['title'] }}</h5>
                        <p class="card-text">{!! $post['short_body'] !!}</p>
                        <a class="icon-link icon-link-hover link-body-emphasis link-underline link-underline-opacity-0
                            link-underline-opacity-75-hover float-end"
                            href="{{ $post['link'] }}" target="_blank">
                            Visit website
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
