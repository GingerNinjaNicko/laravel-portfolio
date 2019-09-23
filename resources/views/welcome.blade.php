@extends('layouts.app')

@section('title')
    Portfolio
@endsection

@section('content')
    <!-- Main intro image & greeting -->
    <div id="landing" class="vert-center">
        <div class="container">
            <article class="jumbotron row vert-center">
                <section class="col-lg-8 col-md-7 text-center">
                    <h1 class="display-3">
                        Nicko Here!
                    </h1>
                    <p>
                        Passionate about creating clean, readable code for all things web. 
                        <br>
                        I enjoy full-stack development with user experience always at the forefront of my mind.
                    </p>
                    <hr class="divider">
                    <p>
                        Laravel, Vue.js, HTML, CSS, Git
                    </p>
                    <p>
					<a href="#contact">
						<button class="btn btn-success btn-lg" tabindex="-1">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							Contact me
						</button>
					</a>
                </p>
                </section>
                <section class="col-lg-4 col-md-5">
                    <img src="{{ asset('images/avatar_2019.jpg') }}" class="rounded-circle img-fluid" alt="Photo of Nicko J. Ruddock">
                </section>
            </article>
        </div>
    </div>

    <!-- portfolio section -->
    <article id="portfolio" class="container">
        
        <div class="row">
            <section class="col">
                <h2 class="text-center">
                    Portfolio
                </h2>
            </section>
        </div>
        
        <div class="row justify-content-center">

            @component('components.portfolio_card', [
                'title' => 'Portfolio',
                'subtitle' => 'Putting my stamp on the web',
                'screenshotName' => 'portfolio.png',
                'links' => [
                    [
                        'verb' => 'View',
                        'source' => 'codepen',
                        'url' => '/',
                    ],
                    [
                        'verb' => 'Code',
                        'source' => 'bitbucket',
                        'url' => 'https://bitbucket.org/GingerNinjaNicko/laravel-portfolio/src/master/',
                    ],
                ]
            ])
                Transferring my portfolio over to a Laravel backend has improved speed, security &amp; enabled easier creation of my personal blog. I pushed to improve myself by hosting my new site on <a href="https://www.digitalocean.com/">Digital Ocean</a>. This meant researching Linux commands &amp; the joys of push-to-deploy with <a href="https://deployhq.com">DeployHQ</a> in the process. I see every project as a chance to push my knowledge further and as a result, my skill-set has broadened to encompass the complex world of DevOps.
            @endcomponent

            @component('components.portfolio_card', [
                'title' => 'SN KAPAP',
                'subtitle' => 'Supporting local business',
                'screenshotName' => 'snkapap_screenshot.png',
                'links' => [
                    [
                        'verb' => 'View',
                        'source' => 'wordpress',
                        'url' => 'https://snkapap.co.uk',
                    ],
                ]
            ])
                When <a href="https://snkapap.co.uk">SN KAPAP</a> were looking to create a website, I knew they needed was a simple Wordpress site with a professional yet friendly look. Wordpress allows just the right amount of content customisation for the client, whilst locking off the vital backend for myself to administrate. This website uses a pre-built theme with customisation to meet the client's exact specification. We continue to work together, looking to improve SEO and grow the club.
            @endcomponent

            @component('components.portfolio_card', [
                'title' => 'Merch Manager',
                'subtitle' => 'Keeping track',
                'screenshotName' => 'merch_manager.png',
                'links' => [
                    [
                        'verb' => 'View',
                        'source' => 'codepen',
                        'url' => route('examples.merch.index'),
                    ],
                    [
                        'verb' => 'Code',
                        'source' => 'bitbucket',
                        'url' => 'https://bitbucket.org/GingerNinjaNicko/laravel-portfolio/src/master/',
                    ],
                ]
            ])
                Created as a proof of concept, managing merchandise became easy! Add new merch, edit & view exiting merch or delete merch you no longer stock. You can even update the stock by either adding, subtracting or setting an absolute amount. Built with Laravel & bootstrap as a bolt-on to this portfolio site as a way to demonstrate clean code and what's possible with the finesse of Laravel. You can <a href="https://bitbucket.org/GingerNinjaNicko/laravel-portfolio/src/master/">view the source code on BitBucket</a>.
            @endcomponent

            @component('components.portfolio_card', [
                'title' => 'TL Email Generator',
                'subtitle' => 'Killing complexity',
                'screenshotName' => 'tl_email.png',
                'links' => [
                    [
                        'verb' => 'View',
                        'source' => 'codepen',
                        'url' => 'https://codepen.io/GingerNinjaNicko/full/MoMPam',
                    ],
                    [
                        'verb' => 'Code',
                        'source' => 'codepen',
                        'url' => 'https://codepen.io/GingerNinjaNicko/full/MoMPam',
                    ],
                ]
            ])
                I love identifying problems and tackling them head on, which is why I tackled the complexity of total loss emails, creating this app to minimise user error. JavaScript is used to update the template in real time, activating the logic for calculations and adding legal text where necessary to create a comprehensive &amp; accurate document. The entire process takes around one minute compared to over five if written from scratch!
            @endcomponent

            @component('components.portfolio_card', [
                'title' => 'The Customer Journey Map',
                'subtitle' => 'Interactive user experiences',
                'screenshotName' => 'claims_journey.png',
                'links' => [
                    [
                        'verb' => 'View',
                        'source' => 'codepen',
                        'url' => 'https://codepen.io/GingerNinjaNicko/full/EvYzJQ',
                    ],
                    [
                        'verb' => 'Code',
                        'source' => 'codepen',
                        'url' => 'https://codepen.io/GingerNinjaNicko/full/EvYzJQ',
                    ],
                ]
            ])
                I am passionate about building fantastic user experiences which are responsive on all devices. For example, when I took my colleagues design for the ‘Motor Claims Journey’ and transformed it into an exciting user map with a mix of CSS animation, media queries and a touch of JavaScript to organise the data in a way that’s easy to follow. I've changed the data for demo purposes, but this app was a hit with higher management.
            @endcomponent

        </div>
    </article>

    <!-- contact section -->
    <article id="contact" class="container">
        <div class="row justify-content-md-center">
            <section class="col  col-lg-10">
                <h2 class="text-center">
                    Contact
                </h2>
                <div class="row">
                    <!-- description text -->
                    <section class="col-md-6 vert-center text-center">
                        <div>
                            <p>
                                 Thank you for your time spent viewing my domain.
                            </p>
                            <p>
                                If you like what you see, feel free to contact me using the contact form below.
                                I always try to respond to messages within 48 hours so you know your message is in safe hands!
                            </p>
                            <p>
                                <a href="https://codepen.io/GingerNinjaNicko/" target="_blank" rel="noopener" aria-label="Visit my Codepen page">
                                    <i title="Visit my Codepen page" class="fa fa-codepen" aria-hidden="true"></i>
                                </a>
                                <a href="https://bitbucket.org/GingerNinjaNicko" target="_blank" rel="noopener" aria-label="Visit my Bitbucket page">
                                    <i title="Visit my Bitbucket page" class="fa fa-bitbucket" aria-hidden="true"></i>
                                </a>
                                <!--
                                <a href="https://github.com/GingerNinjaNicko" target="_blank" rel="noopener" aria-label="Visit my Github page">
                                    <i title="Visit my Github page" class="fa fa-github" aria-hidden="true"></i>
                                </a>
                                -->
                                <!--
                                <a href="https://medium.com/@GingerNinjaNick" target="_blank" rel="noopener" aria-label="Visit my Medium page">
                                    <i title="Visit my Medium page" class="fa fa-medium" aria-hidden="true"></i>
                                </a>
                                -->
                                <a href="https://www.linkedin.com/in/GingerNinjaNicko/" target="_blank" rel="noopener" aria-label="Visit my Linkedin page">
                                    <i title="Visit my Linkedin page" class="fa fa-linkedin-square" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.facebook.com/GingerNinjaNicko" target="_blank" rel="noopener" aria-label="Visit my Facebook page">
                                    <i title="Visit my Facebook page" class="fa fa-facebook-official" aria-hidden="true"></i>
                                </a>
                            </p>
                        </div>
                    </section>
                    
                    <section class="col-md-6">
                        <!-- img source: https://pixabay.com/en/contact-visit-letters-email-mail-2794680/ -->
                        <div class="vert-center">
                            <img src="{{ asset('images/contact-crop.png') }}" id="contact-img" class="img-fluid" alt="Flying mail image">
                        </div>
                    </section>
                </div>
                <div class="row">
                    @component('components.alert', [
                        'check' => session('message'),
                        'type' => session('status') ?? 'success',
                    ])
                        {{ session('message') }}
                    @endcomponent

                    @component('components.alert', [
                        'check' => $errors->any(),
                        'type' => 'danger',
                    ])
                        <ul>
                            @foreach ($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endcomponent

                    <!-- Form submits to itself with no action tag if JavaScript disabled -->
                    <!-- Each input uses php to check whether field present in error array after submission & also to keep value after page reload  -->
                    <section class="col-12">
                        <form method="POST" action="{{ route('contact-us') }}" class="row">
                            @csrf
                            <div class="col-md-6">
                                <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Your name" aria-label="Your name" value="{{ old('name') }}">
                                <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="Your email" aria-label="Your email" value="{{ old('email') }}">
                            </div>
                            
                            <div class="col-md-6">
                                <textarea id="message" name="message" class="form-control form-control-lg" placeholder="Your message" aria-label="Your message">{{ old('message') }}</textarea>
                            </div>
                            <label for="robot" class="d-none">
                                Are you a Robot?
                            </label>
                            <div class="col-md-6 input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Are you a Robot?</span>
                                </div>
                                <input type="text" id="robot" name="robot" class="form-control" placeholder="Type 'no'" value="{{ old('robot') }}">
                            </div>

                            <div class="col-md-6">
                                <input type="submit" id="submit" class="form-control  btn btn-lg btn-success" value="Send message">
                            </div>
                        </form>
                    </section>
                </div>
            </section> <!-- ./col -->
        </div> <!-- ./row -->
    </article>
@endsection