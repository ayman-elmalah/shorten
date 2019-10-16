<?php $__env->startSection('content'); ?>
    <!--Start Hero Section-->
    <section class="hero text-center">
        <div class="container">
            <div class="col-md-12">
                <div class="hero-text">

                    <h1>URL Shortener</h1>
                    <p class="lead">Simplify your links, track & manage them
                    </p>
                    <form action="<?php echo e(url('links/store')); ?>" method="POST" id="link_store">
                        <div class="alert" id="link_message"></div>
                        <div class="input-group mb-3">
                            <input type="text" name="full_url" class="form-control" placeholder="Please Long URl And Shorten It">
                            <div class="input-group-append">
                                <button class="btn btn-short" type="submit">Shorten</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <p class="lead term">By using our service you accept the Terms and Privacy.

        </p>

    </section>
    <!--Section About us-->
    <section class="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h2>Simple and fast URL shortener!
                    </h2>
                    <p>
                        ShortURL allows to reduce a social network link, just paste the long URL and click the Shorten
                        URL button. On the next screen, copy the shortened URL and share it on websites like Facebook,
                        YouTube, Twitter and Linked In. After shortening the URL, you can know how many clicks it
                        received.


                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Shorten, share and track
                    </h2>
                    <p>

                        Your shortened URLs can be used in publications, advertisements, blogs, forums, e-mails, instant
                        messages, and other locations. Track statistics for your business and projects by monitoring the
                        number of hits from your URL with the click counter, you do not have to register.


                    </p>
                </div>

            </div>

        </div>
    </section>


    <!--End About us -->
    <!--Start Featuers-->
    <div class="featuers">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="box">
                        <i class="lni-thumbs-up size-lg"></i>
                        <h3>Easy</h3>
                        <p>
                            ShortURL is easy and fast, enter the long link to get your shortened link
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <i class="lni-laptop-phone size-lg"></i>
                        <h3>Devices</h3>
                        <p>
                            Compatible with smartphones, tablets and desktop


                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <i class="lni-link size-lg"></i>
                        <h3>ShortEnd</h3>
                        <p>
                            Use any link, no matter what size, ShortURL always shortens


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shorten\views/web/home/index.blade.php ENDPATH**/ ?>