<?php /* D:\xampp\htdocs\myfrag\resources\views/website/pages/contact_us.blade.php */ ?>
<?php $__env->startSection('title','Contact Us'); ?>
<?php $__env->startSection('content'); ?>


<body>
<div class="Subscription_area text-center">
        <span><a href="">Send us an email</a></span>
    </div>


    <div class="section_padding">
        <div class="container container-special">
            <div class="row justify-content-left">
                <!-- Contact Form -->
                <div class="col-xl-7 col-lg-7">
                    <?php if(session('message')): ?>
                        <div class="row align-items-center">
                            <div class="col-lg-12 text-center">
                                <p style="color:green; padding:5px;" class="">  <?php echo e(session('message')); ?> </p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="special-form blogger-form">
                        <form class="row" method="POST" action="<?php echo e(url('contact-us')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="inquiry">Type of inquiry</label>
                                    <select name="inquiry" id="inquiry" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="Delivery">Delivery</option>
                                        <option value="Order">Order</option>
                                        <option value="Amber">Amber</option>
                                        <option value="Return/Cancel Order">Return/Cancel Order</option>
                                        <option value="Product & Stock Information">Product & Stock Information</option>
                                        <option value="Website and account">Website and account</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="email">Your Email</label>
                                    <input class="input-box" type="email"  name="email" id="email" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="first_name">First Name</label>
                                    <input class="input-box" type="text" name="first_name" id="first_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single-input">
                                    <label for="first_name">Last Name</label>
                                    <input class="input-box" type="text" name="first_name" id="first_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="single-input">
                                    <label for="inquiry">Mobile Number*</label>
                                    <select name="inquiry" id="inquiry" class="form-control">
                                        <option value="">+971</option>
                                        <option value="">+971</option>
                                        <option value="">+971</option>
                                        <option value="">+971</option>
                                        <option value="">+971</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="single-input">
                                <label for="inquiry"></label>
                                    <input class="input-box" type="text" name="subject" id="subject" placeholder="(0) Phone Number">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                <label for="inquiry">Subject</label>
                                    <input class="input-box" type="text" name="subject" id="subject" placeholder="What's Your Message About ?">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="message">Your Message*</label>
                                    <textarea class="input-box" name="message" id="message" rows="6" placeholder="We want to serve you better. What do you think of our app and service? Let us know and help us improve."></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <label for="subject">Order Id</label>
                                    <input class="input-box" type="number" name="orderId" id="orderId" placeholder="Type in Your order ID">
                                </div>
                            </div>
                            <div class="single-input">
                                <label for="capcha">RECAPTCHA:*</label>
                                <?php echo NoCaptcha::renderJs(); ?>

                                    <?php echo NoCaptcha::display(); ?>

                                <span class="text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></span>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-input">
                                    <button type="submit" class="boxed_btn">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact Info -->
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-info">
                        <div class="contact-tittle">
                            <h2>Contact Us</h2>
                        </div>
                        <!-- Single -->
                        <div class="single-caption mb-20">
                            <div class="caption-icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="caption">
                                <h5>WhatsApp</h5>
                                <p>Chat with us & share media files by adding</p>
                                <p><strong> +971 4 256 61 31</strong> - 10am - 10pm</p>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-caption mb-20">
                            <div class="caption-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="caption">
                                <p>Please contact our Customer Care team from 10am-10pm on our UAE toll free phone number 800 686277, or email: customercare@ounass.com</p>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-caption mb-20">
                            <div class="caption-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="caption">
                                <p>Send us an email at</p>
                                <p><strong>customercare@ounass.com</strong></p>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-caption mb-20">
                            <div class="caption-icon">
                            <i class="ti-help-alt"></i>
                            </div>
                            <div class="caption">
                                <p>Our FAQs cover a variety of topics, where you can find the answers to most questions relating to Ounass.
                                <a href="#"> Checkout our FAQ</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <style>
        select{
            display: none!important;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>