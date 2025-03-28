<template>
    <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
            <div class="mb-md-5 mb-4 pb-md-4">
                <h1 class="mb-md-4 text-light">Contact us</h1>
                <p class="mb-0 fs-lg text-light opacity-70">Fill out the form and out team will try to get back to you within 24 hours.</p>
            </div>
            <div class="d-flex align-items-start mb-4 pb-md-3"><img class="me-3 flex-shrink-0" src="@/assets/img/car-finder/icons/envelope.svg" width="32" alt="Envelope icon">
                <div>
                    <h3 class="h6 mb-2 pb-1 text-light">General communication</h3>
                    <p class="mb-0 text-light"><span class="opacity-70">For general queries, including partnership opportunities, please email</span><router-link class="ms-1 text-nowrap" to="mailto:example@email.com">example@email.com</router-link></p>
                </div>
            </div>
            <div class="d-flex align-items-start mb-4 pb-md-3"><img class="me-3 flex-shrink-0" src="@/assets/img/car-finder/icons/chat.svg" width="32" alt="Chat icon">
                <div>
                    <h3 class="h6 mb-2 pb-1 text-light">General communication</h3>
                    <p class="mb-0 text-light"><span class="opacity-70">We’re here to help! If you have technical issues</span><router-link class="ms-1 text-nowrap" to="/car-finder-help-center">contact support</router-link></p>
                </div>
            </div>
            <div class="d-flex align-items-start mb-4 pb-md-3"><img class="me-3 flex-shrink-0" src="@/assets/img/car-finder/icons/map-pin.svg" width="32" alt="Map pin icon">
                <div>
                    <h3 class="h6 mb-2 pb-1 text-light">Our headquarters</h3>
                    <p class="mb-0 text-light"><span class="opacity-70">8502 Preston Rd. Inglewood, Maine 98380</span><router-link class="ms-1 text-nowrap" to="#map-location" data-scroll>get directions</router-link></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 offset-lg-2">
            <!-- Contact form-->
            <form class="needs-validation" novalidate>
                <div class="mb-4">
                    <label class="form-label text-light" for="c-name">Full Name</label>
                    <input class="form-control form-control-lg form-control-light" id="c-name" type="text" required>
                    <div class="invalid-feedback">Please, enter your name</div>
                </div>
                <div class="mb-4">
                    <label class="form-label text-light" for="c-email">Your Email</label>
                    <input class="form-control form-control-lg form-control-light" id="c-email" type="email" required>
                    <div class="invalid-feedback">Please, enter your email</div>
                </div>
                <div class="mb-4">
                    <label class="form-label text-light" for="c-subject">Subject</label>
                    <select class="form-select form-select-lg form-select-light" id="c-subject" required>
                        <option value="" selected disabled>Choose subject</option>
                        <option value="Subject 1">Subject 1</option>
                        <option value="Subject 2">Subject 2</option>
                        <option value="Subject 3">Subject 3</option>
                    </select>
                    <div class="invalid-feedback">Please, choose subject</div>
                </div>
                <div class="mb-4">
                    <label class="form-label text-light" for="c-message">Message</label>
                    <textarea class="form-control form-control-lg form-control-light" id="c-message" rows="4" placeholder="Leave your message" required></textarea>
                    <div class="invalid-feedback">Please, leave your message</div>
                </div>
                <div class="pt-2">
                    <button class="btn btn-lg btn-primary w-sm-auto w-100" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</template>