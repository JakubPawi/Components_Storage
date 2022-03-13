
        
<?php $__env->startSection('content'); ?>

       

            <section class="page-section" id="contact">
            <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj nowy komponent</h2>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        
                        <form action="<?php echo e(route ('store')); ?>" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e(old('name')); ?>" class="form-control" id="name" name="name" type="text" placeholder="Nazwa komponentu" data-sb-validations="required" />
                                <label for="name">Nazwa</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Podaj nazwe.</div>
                            </div>
                            <?php if($errors->has('name')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('name')); ?> </div>
                        <?php endif; ?>
                            <!-- Kod input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e(old('code')); ?>" class="form-control" id="code" name="code" type="text" placeholder="Kod komponentu" data-sb-validations="required" />
                                <label for="code">Kod</label>
                                <div class="invalid-feedback" data-sb-feedback="code:required">Podaj kod.</div>
                            </div>
                            <?php if($errors->has('code')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('code')); ?> </div>
                        <?php endif; ?>
                            <!-- Ilosc input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e(old('que')); ?>" class="form-control" id="que" name="que" type="text" placeholder="Ilosc komponentu" data-sb-validations="required" />
                                <label for="que">Ilosc</label>
                                <div class="invalid-feedback" data-sb-feedback="que:required">Podaj ilosc.</div>
                            </div>
                            <?php if($errors->has('que')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('que')); ?> </div>
                        <?php endif; ?>
                            <!-- Lokacja input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e(old('location')); ?>" class="form-control" id="location" name="location" type="text" placeholder="Lokacja komponentu" data-sb-validations="required" />
                                <label for="location">Lokacja</label>
                                <div class="invalid-feedback" data-sb-feedback="location:required">Podaj lokacje.</div>
                            </div>
                            <?php if($errors->has('location')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('location')); ?> </div>
                        <?php endif; ?>
                            </br>
                            
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Dodaj nowy komponent</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/MainPage/nowy.blade.php ENDPATH**/ ?>