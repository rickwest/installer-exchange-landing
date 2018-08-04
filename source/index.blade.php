@extends('_layouts.master')

@section('body')
    <nav class="navbar navbar-light pb-5 pt-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img alt="Subease" class="block" src="/assets/images/subease-logo.png" height="40px">
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Subbies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contractors</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="display-4 mb-4 font-weight-bold">Fed up of travelling, late payments and days with no work?</h1>
                    <p class="mb-4">I was too and it made me 😥</p>

                    <p class="mb-4">That's why I'm on a mission to change it.</p>

                    <p class="mb-4">I’ve spent the last 10 years as a subcontract heating engineer and, during that time, I've encountered the same old problems time and time again...</p>

                    <p class="mb-4">That promise of 6 months work, only to get a text at 10pm on a Sunday night ‘<strong>jobs gone down, sorry</strong>.’</p>

                    <p class="mb-4">Working my b*****ks off all week, only to get to Friday, check my bank and nothing’s there. <strong>Paid late again</strong>. Do they even realise the ear ache this causes?!</p>

                    <p class="mb-4">Then there's the travelling. Forced to <strong>travel 100+ miles</strong> to do a job, with no extra pay or fuel money. But I'm a subbie, I can’t afford a day off and I don’t have a way to find alternative work at short notice. Owt's better than nowt, as they say!</p>

                    <p class="mb-4"><a data-toggle="modal" href="#btg-post-modal">This facebook post</a>, pretty much sums it up.</p>

                    <!-- Modal -->
                    <div class="modal fade" id="btg-post-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Posted in #BuildersTalkGroup</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="/assets/images/subcontractors.png" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="mb-4">Ok, so I'm painting a pretty bleak picture, It's definitely not all bad!</p>

                    <p class="mb-4">But what are we supposed to do in these situations? Where do we look for work after being let down at the last minute? Where do we find the local jobs?</p>

                    <h2 class="mb-4 font-weight-bold">Introducing Subease. Subcontracting made Simple.</h2>

                    <p class="mb-4">Subease is a web based application that will:</p>

                    <ul class="mb-4">
                        <li><strong>Facilitate payment</strong>, so you get paid on time every time!</li>
                        <li>Enable you to <strong>discover local jobs</strong>.</li>
                        <li>Help you <strong>find last minute work</strong> and fill those quiet weeks.</li>
                        <li>Allow you to <strong>build an online profile</strong> and portfolio of you work.</li>
                        <li>Manage your qualifications and certifications.</li>
                        <li><strong>Collect reviews</strong>, so contractors know just how good you are!</li>
                        <li>Connect you with contractors and other subbies in your area</li>
                    </ul>

                    <p class="mb-4">The best part about Subease, <strong>it's totally FREE</strong>. It isn't about making money it's about, connecting the best subbies with the best contractors, helping you find work and get paid.</p>

                    <p class="mb-4">This is just a side project</p>

                    <h2 class="mb-4 font-weight-bold">Reserve your handle today</h2>

                    <div id="reserve-your-handle">
                        <p class="mb-4">Subease is under active development and is not yet launched (I'm working as fast as I can!). However, you can still claim your little slice of real estate on subease.app.</p>
                        <p class="mb-4">Join <span class="font-weight-bold" id="reservation_count">100's</span> other people who have reserved their handle.</p>

                        <div class="mb-3">
                            <form method="post" name="user_handle_reservation">
                                <div class="form-group">
                                    <label class="font-weight-bold required" for="user_handle_reservation_email">Your Email Address</label>
                                    <input type="email" id="user_handle_reservation_email" name="user_handle_reservation[email]" required="required" placeholder="jess@hooli.xyz" title="Your Email Address" class="form-control">
                                    <div id="user_handle_reservation_email_feedback" class='invalid-feedback'></div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold required" for="user_handle_reservation_handle">Your Handle</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">https://subease.app/</span>
                                        </div>
                                        <input type="text" id="user_handle_reservation_handle" name="user_handle_reservation[handle]" required="required" placeholder="abc-heating" title="Your handle" class="form-control">
                                        <div id="user_handle_reservation_handle_feedback" class='invalid-feedback'></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="user_handle_reservation_trade">Trade</label>
                                    <select id="user_handle_reservation_trade" name="user_handle_reservation[trade]" title="Your Trade" class="form-control">
                                        <option value="">Please select your trade...</option>
                                        <option value="1">Plumber</option>
                                        <option value="2">Electrician</option>
                                        <option value="3">Joiner</option>
                                        <option value="4">Builder</option>
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
