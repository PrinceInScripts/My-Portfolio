<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sumbhav">
    <meta name="description" content="Graphic India: India's Leading Character Entertainment Company">
    <meta name="keywords" content="creative, modern, graphic, India, animation, cartoons, novels, audio comics">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/GI_favicon_io/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/GI_favicon_io/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="32x32" href="assets/images/GI_favicon_io/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="512x512" href="assets/images/GI_favicon_io/android-chrome-512x512.png">

    <title>Prince Kumar | Hire Freelance Developer</title>

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

     {{-- meta csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

      <style>
       .select {
    background: transparent;
    color: #fff;
    border: none;
    padding: 10px;
    font-size: 15px;
    border-radius: 6px;
    cursor: pointer;
       vertical-align: middle;
    outline: none;
    background: none;
        border-bottom: 1px solid #ccc;
}


.select option {
    background: #111517;  /* gradient inside dropdown */
    color: #fff; 
    padding: 10px;
     border: none;
            border-bottom: 1px solid #ccc;
            font-size: 15px; 
}

/* Custom hover and selected effect */
.select option:checked,
.select option:hover {
    background: red !important;
    color: #fff !important;
}
              
    </style>

	<style>
		.contact_list{
			display: flex;
			gap: 20px;
			margin-top: 20px
		}

		.contact_list li{
			font-size: 24px;
			
		}

		.contact_list li:hover{
			color: red;
		}	

		 form {
            width: 100%;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            margin-top: 40px;
            flex-wrap: wrap;
            /* allows wrapping on small screens */
        }

        .form-group {
            margin-bottom: 40px;
            width: 48%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 16px;
            color: #fff;
        }

        input,
        textarea {
            border: none;
            border-bottom: 1px solid #ccc;
            padding: 10px;
            color: #fff;
            background: transparent;
            font-size: 15px;
            outline: none;
        }

        textarea {
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .form-container {
                flex-direction: column;
                gap: 20px;
            }

            .form-group {
                width: 100%;
                margin-bottom: 20px;
            }
        }
	</style>


    <!-- fonts -->
    <link
        href="css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- styles -->
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <!-- preloader-loading start -->
    <x-loader />

    <!-- pointer start -->
    <!-- <div class="pointer js-pointer" id="js-pointer">
   <i class="pointer__inner fas fa-long-arrow-alt-right"></i>
   <i class="pointer__inner fas fa-search"></i>
   <i class="pointer__inner fas fa-link"></i>
  </div> -->
    <!-- pointer end -->

    <!-- to top btn start -->
    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box">
            <span class="scroll-to-btn__arrow"></span>
        </span>
    </a><!-- to top btn end -->

    <!-- scroll down btn start -->
    <a href="#down"
        class="scroll-to-btn to-down js-headroom js-midnight-color js-smooth-scroll js-pointer-large js-scroll-btn">
        <span class="scroll-to-btn__box">
            <span class="scroll-to-btn__arrow"></span>
        </span>
    </a><!-- scroll down btn end -->

    <x-header />

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        <!-- contact us start -->
        <section id="down" class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-10vh">
                <!-- container start -->
                <div class="padding-top-120 padding-bottom-40 container">
                    <!-- content start -->
                    <div class="js-scrollanim">
                        <h2 class="headline-l">
                            <span class="anim-text-double-fill" data-text="Contact">Contact</span>
                            <span class="anim-text-double-fill tr-delay-02" data-text="Us">Us</span>
                        </h2>
                        <p class="body-text-s margin-top-20 anim-text-reveal tr-delay-04"></p>
                    </div><!-- content end -->

                    <!-- flex-container start -->
                    <div class="flex-container padding-top-30">
                        <!-- column start -->
                        <div class="four-columns column-50-100 padding-top-60">
                            <div class="column-r-margin-20 js-scrollanim">
                                <p class="headline-xs anim-text-double-fill invert" data-text="Email">Email</p>
                                <div class="padding-top-20">
                                    <h6 class="anim-fade tr-delay-01">
                                        <a href="#"
                                            class="subhead-m text-color-dadada text-hover-to-red js-pointer-small">princepk7878kumar@gmail.com</a>
                                    </h6><br>
                                        <ul class="list contact_list list_center list_margin-20px hidden-box">
                                            <li class="list__item">
                                                <div class="hidden-box d-inline-block">
                                                    <a href="https://www.facebook.com/graphicindia"
                                                        class="anim-slide js-pointer-small">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list__item">
                                                <div class="hidden-box d-inline-block">
                                                    <a href="https://twitter.com/graphicindia"
                                                        class="anim-slide tr-delay-02 js-pointer-small">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list__item">
                                                <div class="hidden-box d-inline-block">
                                                    <a href="https://www.instagram.com/graphicindia/"
                                                        class="anim-slide tr-delay-04 js-pointer-small">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="list__item">
                                                <div class="hidden-box d-inline-block">
                                                    <a href="https://www.youtube.com/graphicindia"
                                                        class="anim-slide tr-delay-10 js-pointer-small">
                                                        <i class="fab fa-youtube"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div><!-- column end -->
                        <div class="four-columns column-50-100 padding-top-60">
                            <div class="column-r-margin-20 js-scrollanim">
                                <p class="headline-xs anim-text-double-fill invert" data-text="Phone">Phone</p>
                                <div class="padding-top-20">
                                    <h6 class="anim-fade tr-delay-01">
                                        <a href="#"
                                            class="subhead-m text-color-dadada text-hover-to-red js-pointer-small">+91
                                            89557 83570</a>
                                    </h6><br>
                                </div>
                            </div>
                        </div><!-- column end -->

                        <!-- column start -->
                        <div class="four-columns column-50-100 padding-top-60">
                            <div class="column-r-margin-20 js-scrollanim">
                                <p class="headline-xs anim-text-double-fill invert" data-text="Location">Location</p>
                                <h6 class="list list_margin-1px padding-top-20 text-color-b0b0b0">
                                    <span class="list__item">
                                        <span class="d-inline-block hidden-box">
                                            <span class="subhead-m anim-reveal tr-delay-01">Kota , Rajasthan (India)</span>
                                        </span>

                                    </span>

                            </div><!-- column end -->

                            <!-- column start -->
                            {{-- <div class="four-columns column-50-100 padding-top-60">
								<div class="column-r-margin-20 js-scrollanim">
									<p class="headline-xs anim-text-double-fill invert" data-text="Phone">Phone</p>
									<div class="padding-top-20">
										<h6 class="anim-fade tr-delay-01">
											<a href="#" class="subhead-m text-color-dadada text-hover-to-red js-pointer-small">+91 95380 17665</a>
										</h6><br>
									</div>
								</div>
							</div> --}}
                            <!-- column end -->
                        </div><!-- flex-container end -->
                    </div><!-- container end -->
                </div><!-- pos-rel end -->
        </section><!-- contact us end -->

		<section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-10vh">
                <!-- container start -->
                <div class="padding-top-bottom-10 container">
                    <!-- title start -->
                    <h2 class="headline-l js-scrollanim">
                        <span class="hidden-box d-block">
                            <span class="anim-slide">
                                <span class="text-color-red">Contact</span>
                            </span>
                        </span>

                    </h2><!-- title end -->

                    <div class="padding-top-20">
                        <p class="body-text-m anim-text-reveal js-scrollanim">Feel free to reach out for collaborations
                            or
                            freelance opportunities!</p>

                        <form id="contactForm">
                            @csrf
                            <div class="form-container">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name"
                                        placeholder="Enter Your Name" required>

                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email"
                                        placeholder="Enter Your Email" required>

                                    <label for="contact">Contact Number:</label>
                                    <input type="text" id="contact" name="contact"
                                        placeholder="Enter Your Contact Number" required>
                                </div>

                                <div class="form-group">
                                    <label for="reason">Reason:</label>
                                    <select class="select" id="reason" name="reason" required>
                                        <option value="">Select Reason</option>
                                        <option value="collaboration">Collaboration</option>
                                        <option value="freelance">Freelance Opportunity</option>
                                        <option value="other">Other</option>
                                    </select>

                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" rows="4" required></textarea>
                                </div>
                            </div>

                            <button style="cursor: pointer" type="submit" class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner">Send Message</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </button>
                        </form>
                    </div>

                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>
    </main><!-- main end -->

    <!-- footer start -->
    <x-footer />

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- scripts -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/footer-reveal.js"></script>
    <script src="assets/js/main.js"></script>
      <script src="assets/js/preloader.js"></script>
    <script src="assets/js/footer-reveal_init.js"></script>


<script>
    $(document).ready(function() {
        $('#contactForm').on('submit',function(e){
            e.preventDefault();

            $.ajax({
                url:"{{ route('contact.submit') }}",
                method:"POST",
                data:$(this).serialize(),
                success:function(response){
                    Toastify({
                        text: response.message,
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: '#5cb85c	',
                    }).showToast();

                    $("#contactForm")[0].reset(); // reset form
                },
                error: function(xhr) {
                Toastify({
                    text: "Failed to send message. Try again!",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)"
                }).showToast();
            }
                
            })
        })
    });
</script>
</body>

</html>
