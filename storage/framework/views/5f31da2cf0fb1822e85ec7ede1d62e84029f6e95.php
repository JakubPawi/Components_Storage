
        
<?php $__env->startSection('content'); ?>

       
        <!-- dostawy Section-->
        <section class="masthead page-section" id="dostawy">
            <div class="container">
                <!-- dostawy Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">dostawy</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- dostawy Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                    
                        <form action="<?php echo e(route ('komponents', ['code'=>$wyslij->code])); ?>" method="POST" id="dostawyForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                            <?php echo method_field('PUT'); ?>
                            <!-- Cide input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->code); ?>" class="form-control" id="code" name="code" type="text" placeholder="Kod komponentu" data-sb-validations="required" />
                                <label for="code">Kod</label>
                                <div class="invalid-feedback" data-sb-feedback="code:required">Podaj kod.</div>
                            </div>
                            <!-- Que input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->que); ?>" class="form-control" id="que" name="que" type="text" placeholder="Ilosc komponentu" data-sb-validations="required" />
                                <label for="que">Ilosc</label>
                                <div class="invalid-feedback" data-sb-feedback="que:required">Podaj ilosc.</div>
                            </div>

                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Dodaj komponent</button></div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/MainPage\dostawy.blade.php ENDPATH**/ ?>