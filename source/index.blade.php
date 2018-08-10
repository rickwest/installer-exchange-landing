@extends('_layouts.master')

@section('body')
    <nav class="navbar navbar-expand-lg pt-4">
        <div class="container">
            <img alt="Installer Exchange" class="block" src="/assets/images/installer-exchange-logo.png" height="50px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subeaseNavbarToggler" aria-controls="subeaseNavbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="subeaseNavbarToggler">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/contractors">Contractor?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="mb-4 font-weight-bold">Are you a subcontract Heating Engineer, Gas Installer or Service & Breakdown Guru?</h1>
                    <p class="mb-4">I am too 😃.</p>
                    <p class="mb-4">I’ve spent the last 10 years installing boilers, subcontracting to various companies including British Gas.</p>
                    <p class="mb-4">What many people don’t realise is that, in our industry, subcontracting is a specialist job in itself.</p>
                    <p class="mb-4">The thing is...not every self-employed Plumbing & Heating Engineer wants to be fitting outside taps, tiling bathrooms and pricing jobs in an evening.</p>
                    <p class="mb-4">Some of us just want to do the work we enjoy, whilst earning a decent living. In my case that's fitting boilers, but for others it’s breakdown and repair or servicing.</p>

                    <h4 class="mb-4 font-weight-bold">It used to be the jobs that were rare. Now it's us.</h4>
                    <p class="mb-4">Due to the volatile nature of the industry, more and more installation and maintenance companies are using subcontractors to grow their businesses.</p>
                    <p class="mb-4">However, as subcontractors, <strong>we can be quite hard to find!</strong></p>

                    <p class="mb-4">We’re not on Checkatrade or My Builder. That’s not the work we do or the type of customer that we work for. Our customers are other businesses.</p>
                    <p class="mb-4">So...<em>Why doesn't a platform exist, where our customers can find us?</em></p>
                    <p class="mb-4">That is why I’m building a directory of the nations best subcontract Heating Engineers.</p>

                    <h2 class="mb-4 font-weight-bold">Introducing Installer Exchange.<br>A nationwide network of verified subcontract Heating Engineers.</h2>
                    <p class="mb-4">Registering on Installer Exchange will enable you to:</p>

                    <ul class="mb-4">
                        <li>Build an <strong>online profile and portfolio</strong> of your work.</li>
                        <li><strong>Get discovered</strong> by contractors with work in your area.</li>
                        <li><strong>Manage your qualifications</strong> and certifications.</li>
                        <li><strong>Collect reviews</strong>, so contractors know just how good you are!</li>
                        <li><strong>Rate contractors</strong> that you have worked for.</li>
                    </ul>
                    <p class="mb-4"><strong>Installer Exchange is totally FREE</strong>, so you have no reason not to join!</p>
                    <h2 class="mb-4 font-weight-bold">Reserve your handle today</h2>
                    <div id="reserve-your-handle">
                        <p class="mb-4">Installer Exchange is under active development and is not yet launched. However, you can still claim your little slice of real estate on installerexchange.co.uk</p>
                        <p class="mb-4">Join <span class="font-weight-bold" id="reservation_count"></span> other people who have already reserved their handle.</p>
                        <div class="mb-3">
                            <form method="post" name="user_handle_reservation">
                                <div class="form-group">
                                    <label class="font-weight-bold required" for="user_handle_reservation_email">Your Email Address</label>
                                    <input type="email" id="user_handle_reservation_email" name="user_handle_reservation_email" required="required" placeholder="awesomeboilerinstaller@gmail.com" title="Your Email Address" class="form-control">
                                    <div id="user_handle_reservation_email_feedback" class='invalid-feedback'></div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold required" for="user_handle_reservation_handle">Your Handle</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">https://www.installerexchange.co.uk/</span>
                                        </div>
                                        <input type="text" id="user_handle_reservation_handle" name="user_handle_reservation_handle" required="required" placeholder="awesomeboilerinstaller" title="Your handle" class="form-control">
                                        <div id="user_handle_reservation_handle_feedback" class='invalid-feedback'></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="user_handle_reservation_specialism">Preferred Work</label>
                                    <select id="user_handle_reservation_specialism" name="user_handle_reservation_specialism" title="Your preferred type of work" class="form-control">
                                        <option value="">Please select your preferred type of work...</option>
                                        <option value="1">Installation</option>
                                        <option value="2">Service</option>
                                        <option value="3">Breakdown & Repair</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" id="user_handle_reservation_submit">Reserve my handle</button>
                            </form>
                        </div>
                        <p class="text-muted small">I will send out periodic updates to keep you in the loop. No spam, guaranteed!</p>
                    </div>
                    <div id="reserve-your-handle-success" class="alert alert-success" style="display: none;">
                        <p class="mb-4">🎉 <span class="font-weight-bold">Sweet!</span> We'll save the @<span id="successfully-reserved_handle" class="font-weight-bold"></span> handle for you.</p>
                        <p class="mb-4">The success of Installer Exchange relies on building a large network of engineers and contractors.</p>
                        <p class="mb-4">If you don't mind, it would help us a ton if you share this with your friends, followers and anyone else you know in the trade.</p>

                        <div class="d-flex justify-content-start">
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                               class="twitter-share-button"
                               data-size="large"
                               data-text="🔥 I just reserved my handle on Installer Exchange. A nationwide network of verified subcontract Heating Engineers."
                               data-show-count="false"
                            >Tweet
                            </a>
                            <div class="fb-share-button ml-2" data-href="https://www.installerexchange.co.uk" data-layout="button" data-size="large" data-mobile-iframe="true">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.installerexchange.co.uk%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
