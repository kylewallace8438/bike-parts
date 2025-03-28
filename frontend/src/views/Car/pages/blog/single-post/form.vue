<template>
    <!-- Comment form-->
    <div class="bg-secondary py-5">
        <div class="container py-md-2 py-lg-4">
            <div class="row justify-content-center">
                <div class="col-md-10 col-xl-8">
                    <h3 class="text-center mb-4 pb-sm-2">Leave your comment</h3>
                    <form class="needs-validation row gy-md-4 gy-3 pb-sm-2" novalidate>
                        <div class="col-sm-6">
                            <label class="form-label" for="comment-name">Name</label>
                            <input class="form-control form-control-lg" type="text" id="comment-name" placeholder="Enter your name" required>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="comment-email">Email</label>
                            <input class="form-control form-control-lg" type="email" id="comment-email" placeholder="Enter your email" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="comment-text">Comment</label>
                            <textarea class="form-control form-control-lg" id="comment-text" rows="4" placeholder="Type comment here" required></textarea>
                            <div class="invalid-feedback">Please type your comment.</div>
                        </div>
                        <div class="col-12 text-center pt-2">
                            <button class="btn btn-lg btn-primary rounded-pill" type="submit">Post comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>