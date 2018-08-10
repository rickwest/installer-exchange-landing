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
                        <a class="nav-link" href="/">Installer?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="mb-4 font-weight-bold">Is your business growing?</h1>
                    <div class="h1 mb-4 font-weight-bold">Are you struggling to find the best subcontract Heating Engineers?</div>
                    <p class="mb-4">I got you.</p>
                    <p class="mb-4">I’ve spent the last 10 years installing boilers, subcontracting to various companies including British Gas.</p>
                    <p class="mb-4">I’ve also used subcontractors myself during busy periods or on big jobs.</p>
                    <p class="mb-4">That’s why I understand that <strong>good subcontractors are hard to find</strong>.</p>
                    <p class="mb-4">They don’t advertise, they aren’t listed anywhere. It’s often just a case of who you know. Ringing round Engineers that you have worked with in the past.</p>
                    <p class="mb-4"><em>In 2018, surely there must be a better way?</em></p>
                    <p class="mb-4">There is. I’m building it.</p>
                    <h2 class="mb-4 font-weight-bold">Introducing <em>Installer Exchange</em>.<br>A nationwide network of verified subcontract Heating Engineers.</h2>
                    <p class="mb-4">With the emergence of companies like Boxt, pricing and the competition for work is fierce.</p>
                    <p class="mb-4">It’s not efficient (or environmentally friendly!) sending engineers 100 miles to do a job. Then having to send them 100 miles back to carry out remedial work.</p>
                    <p class="mb-4">However, until now, it’s been virtually impossible to find quality subcontract labour local to the job.</p>
                    <p class="mb-4">With Installer Exchange you can:</p>

                    <ul class="mb-4">
                        <li>Search our network of <strong>quality Heating Engineers.</strong></li>
                        <li>Search based on location, specialism or qualifications.</li>
                        <li>Access copies of subcontractor certifications, helping you <strong>maintain compliance</strong>.</li>
                        <li><strong>Collect reviews</strong> - So engineers know how great you are to work for!</li>
                        <li><strong>Rate subcontractors</strong> - Found a reputable, hard working subbie? Don’t keep them to yourself. Spread the word 😄</li>
                    </ul>
                    <h4 class="mb-4 font-weight-bold">Grow your business and your installer network with Installer Exchange.</h4>

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
                                    <label class="font-weight-bold" for="user_handle_reservation_specialism">Primary area of work</label>
                                    <select id="user_handle_reservation_specialism" name="user_handle_reservation_specialism" title="Your primary area of work" class="form-control">
                                        <option value="">Please select your primary area of work...</option>
                                        <option value="1">Installation</option>
                                        <option value="2">Service</option>
                                        <option value="3">Breakdown & Repair</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" id="user_handle_contractor_reservation_submit">Reserve my handle</button>
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
