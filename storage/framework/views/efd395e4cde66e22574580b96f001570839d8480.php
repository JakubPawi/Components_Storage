<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Cześć,')); ?> <?php echo e(Auth::user()->name); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Jesteś zalogowany!')); ?>

                </div>
                
            </div>
        </div>
    </div>
</div>
     <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="<?php echo e(url('/komponenty')); ?>"><img class="card-img-top" src="assets\img\komponenty.jpg" alt="Komponenty" width="200" height="150"  /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" ><a class="navbar-brand" href="<?php echo e(url('/komponenty')); ?>" style="color:black"> 
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" >Komponenty</h5>
                                    <!-- Product price-->
                                </a>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo e(url('/komponenty')); ?>">Wejdz</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="<?php echo e(url('/nowy')); ?>"><img class="card-img-top" src="assets\img\new.jpg" alt="..." width="200" height="150" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" ><a class="navbar-brand" href="<?php echo e(url('/nowy')); ?>" style="color:black"> 
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" >Dodaj komponent</h5>
                                    <!-- Product price-->
                                </a>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo e(url('/nowy')); ?>">Wejdz</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="<?php echo e(url('/order')); ?>"><img class="card-img-top" src="assets\img\dostawa.jpg" alt="..." width="200" height="150" /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" ><a class="navbar-brand" href="<?php echo e(url('/order')); ?>" style="color:black"> 
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" >Dostawy</h5>
                                    <!-- Product price-->
                                </a>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo e(url('/order')); ?>">Wejdz</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="<?php echo e(url('/nowaDostawa')); ?>"> <img class="card-img-top" src="assets\img\zamowienia.jpg" alt="..." width="200" height="150" /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center" ><a class="navbar-brand" href="<?php echo e(url('/nowaDostawa')); ?>" style="color:black"> 
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" >Dodaj dostawe</h5>
                                    <!-- Product price-->
                                </a>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo e(url('/nowaDostawa')); ?>">Wejdz</a></div>
                            </div>
                        </div>
                    </div>
                 
            </div>
        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/home.blade.php ENDPATH**/ ?>