
        
<?php $__env->startSection('content'); ?>

       
        <!-- dostawy Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj nowy komponent</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="<?php echo e(route ('store')); ?>" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Nazwa komponentu" data-sb-validations="required" />
                                <label for="name">Nazwa</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Podaj nazwe.</div>
                            </div>
                            <?php if($errors->has('name')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('name')); ?> </div>
                        <?php endif; ?>
                            <!-- Cide input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="code" name="code" type="text" placeholder="Kod komponentu" data-sb-validations="required" />
                                <label for="code">Kod</label>
                                <div class="invalid-feedback" data-sb-feedback="code:required">Podaj kod.</div>
                            </div>
                            <?php if($errors->has('code')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('code')); ?> </div>
                        <?php endif; ?>
                            <!-- Que input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="que" name="que" type="text" placeholder="Ilosc komponentu" data-sb-validations="required" />
                                <label for="que">Ilosc</label>
                                <div class="invalid-feedback" data-sb-feedback="que:required">Podaj ilosc.</div>
                            </div>
                            <?php if($errors->has('que')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('que')); ?> </div>
                        <?php endif; ?>
                            <!-- Location input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="location" name="location" type="text" placeholder="Lokacja komponentu" data-sb-validations="required" />
                                <label for="location">Lokacja</label>
                                <div class="invalid-feedback" data-sb-feedback="location:required">Podaj lokacje.</div>
                            </div>
                            <?php if($errors->has('location')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('location')); ?> </div>
                        <?php endif; ?>
                            </br>
                            <!-- Message input
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div> -->
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <!-- <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    
                                </div>
                            </div> -->
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Dodaj nowy komponent</button></div>
                            <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
                            <!-- Submit Button-->
                            <!-- <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Dodaj fakture</button> -->
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/MainPage/dostawy.blade.php ENDPATH**/ ?>