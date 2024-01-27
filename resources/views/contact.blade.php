<x-app-layout withoutBanner hasLatestPosts="true">
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-10 col-md-8 col-lg-5">
                    <h1 class="fw-semibold display-4">Talk to a <span class="text-primary">human</span>, let’s talk.
                    </h1>
                    <p class="px-4">It's always a pleasure to hear from you.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-8 col-lg-7 card p-4 py-5 p-md-5 border-light shadow rounded-4 bg-dark">
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="name" class="form-label ps-3 text-light">{{ __('Full name') }}</label>
                                <input type="text" class="form-control rounded-4" name="name" id="name"
                                    placeholder="">
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email"
                                    class="form-label ps-3 text-light">{{ __('Email address') }}</label>
                                <input type="email" class="form-control rounded-4" name="email" id="email"
                                    placeholder="">
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone"
                                    class="form-label ps-3 text-light">{{ __('Phone number') }}</label>
                                <input type="tel" class="form-control rounded-4" name="phone" id="phone"
                                    placeholder="">
                                @error('phone')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="referer"
                                    class="form-label ps-3 text-light">{{ __('How\'d you find me?') }}</label>
                                <select class="form-select rounded-4" name="referer" id="referer">
                                    <option selected disabled>Select one</option>
                                    <option value="IG">Instagram</option>
                                    <option value="FB">Facebook</option>
                                    <option value="X">Twitter</option>
                                    <option value="Google">Google</option>
                                    <option value="WhatsApp">WhatsApp</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Others">Others</option>
                                </select>
                                @error('referer')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label ps-3 text-light">{{ __('Subject') }}</label>
                                <input type="text" class="form-control rounded-4" name="subject" id="subject"
                                    placeholder="">
                                @error('subject')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label ps-3 text-light">{{ __('Message') }}</label>
                                <textarea id="message" class="form-control rounded-4" name="message" placeholder="Lets know how we can assist you..."></textarea>
                                @error('message')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" name="submit" id="submit"
                                    class="btn btn-primary rounded-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</x-app-layout>
