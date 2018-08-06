@extends('_layouts.master')

@section('body')
    <nav class="navbar navbar-expand-lg pt-4">
        <div class="container">
            <img alt="Subease" class="block" src="/assets/images/subease-logo.png" height="40px">
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subeaseNavbarToggler" aria-controls="subeaseNavbarToggler" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}
            {{--<div class="collapse navbar-collapse" id="subeaseNavbarToggler">--}}
                {{--<ul class="navbar-nav ml-auto mt-2 mt-lg-0">--}}
                    {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link" href="#">Home</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Link</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Contact</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
    </nav>
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="mb-4 font-weight-bold">Subcontractor?<br>Fed up of travelling, late payment and days with no work?</h1>
                    <p class="mb-4">I was too and it made me 😥. </p>
                    <p class="mb-4">That's why I'm on a mission to change it!</p>
                    <p class="mb-4">I’ve spent the last 10 years as a subcontract Heating Engineer and during that time I've encountered the same old problems time and time again...</p>
                    <p class="mb-4">That promise of 6 months work, only to get a text at 10pm on a Sunday night - ‘<strong>jobs gone down, sorry</strong>.’</p>
                    <p class="mb-4">Working my b*****ks off all week, only to get to Friday, check my bank and nothing’s there. <strong>Paid late again</strong>.</p>
                    <p class="mb-4">Then there's the travelling. <strong>Up and down the country</strong>, often with no extra pay or fuel money.</p>
                    <p class="mb-4">Subbie life - <a data-toggle="modal" href="#btg-post-modal">This facebook post</a> pretty much sums it up.</p>
                    <!-- Modal -->
                    <div class="modal fade" id="btg-post-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Originally posted in <a href="https://builderstalkgroup.com/" target="_blank">#BuildersTalkGroup</a></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="/assets/images/subcontractors.png" class="img-fluid" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Modal -->
                    <p class="mb-4">Ok, so I'm painting a pretty bleak picture, it's definitely not all bad!</p>
                    <p class="mb-4">But...<em>How do we find the local jobs? Where do we look for last minute work? How do we ensure we're always working for reputable contractors that pay correctly and on time?</em></p>
                    <h2 class="mb-4 font-weight-bold">Introducing Subease. Subcontracting Made Simple.</h2>
                    <p class="mb-4">Subease is a Web Application for the Construction Industry. A platform to help the best, hard-working, reliable, subbies (get it?) find work with honest, reputable contractors. Subease will:</p>
                    <ul class="mb-4">
                        <li><strong>Facilitate payment</strong>, so you get paid on time every time!</li>
                        <li>Enable you to <strong>discover local jobs</strong>.</li>
                        <li>Help you <strong>find last minute work</strong> and fill those quiet weeks.</li>
                        <li>Allow you to <strong>build an online profile</strong> and portfolio of your work.</li>
                        <li>Manage your qualifications and certifications.</li>
                        <li><strong>Collect reviews</strong>, so contractors know just how good you are!</li>
                        <li>Connect you with contractors and other subbies in your area</li>
                    </ul>
                    <p class="mb-4">The best part about Subease? <strong>It's totally FREE</strong>.</p>
                    <p class="mb-4">For me, Subease is a passion project. I'm building something that I think the Construction Industry needs, but also something that I want myself!</p>
                    <h2 class="mb-4 font-weight-bold">Reserve your handle today</h2>
                    <div id="reserve-your-handle">
                        <p class="mb-4">Subease is under active development and is not yet launched. However, you can still claim your little slice of real estate on subease.app.</p>
                        <p class="mb-4">Join <span class="font-weight-bold" id="reservation_count"></span> other people who have already reserved their handle.</p>
                        <div class="mb-3">
                            <form method="post" name="user_handle_reservation">
                                <div class="form-group">
                                    <label class="font-weight-bold required" for="user_handle_reservation_email">Your Email Address</label>
                                    <input type="email" id="user_handle_reservation_email" name="user_handle_reservation_email" required="required" placeholder="richard@piedpiper.com" title="Your Email Address" class="form-control">
                                    <div id="user_handle_reservation_email_feedback" class='invalid-feedback'></div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold required" for="user_handle_reservation_handle">Your Handle</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">https://subease.app/</span>
                                        </div>
                                        <input type="text" id="user_handle_reservation_handle" name="user_handle_reservation_handle" required="required" placeholder="PP_Plumbers" title="Your handle" class="form-control">
                                        <div id="user_handle_reservation_handle_feedback" class='invalid-feedback'></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="user_handle_reservation_trade">Trade</label>
                                    <select id="user_handle_reservation_trade" name="user_handle_reservation_trade" title="Your Trade" class="form-control">
                                        <option value="">Please select your trade...</option>
                                        <option value="1">Gas/Heating Engineer</option>
                                        <option value="2">Plumber</option>
                                        <option value="3">Electrician</option>
                                        <option value="4">Joiner</option>
                                        <option value="5">Builder</option>
                                        <option value="6">Plasterer</option>
                                        <option value="7">Tiler</option>
                                        <option value="8">Painter & Decorator</option>
                                        <option value="9">Labourer</option>
                                        <option value="10">Other</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" id="user_handle_reservation_submit">Reserve my handle</button>
                            </form>
                        </div>
                        <p class="text-muted small">I will send out periodic updates to keep you in the loop. No spam, guaranteed!</p>
                    </div>
                    <div id="reserve-your-handle-success" style="display: none;">
                        <p class="mb-4">🎉 <span class="font-weight-bold">Sweet!</span> We'll save the @<span id="successfully-reserved_handle" class="font-weight-bold"></span> handle for you.</p>
                        <p class="mb-4">If you don't mind, it would help us a ton if you share this with your followers. Here's a handy pre-populated tweet for you!</p>
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                            class="twitter-share-button"
                            data-size="large"
                            data-text="🔥 I just reserved my handle on Subease. Helping subbies find work and get paid! Subcontracting made simple."
                            data-show-count="false">
                        Tweet
                        </a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container text-center">
            <span class="text-muted">&copy; 2018 Subease</span>
        </div>
    </footer>
@endsection
