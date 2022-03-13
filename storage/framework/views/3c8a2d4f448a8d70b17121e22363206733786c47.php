
        
<?php $__env->startSection('content'); ?>

       

            <section class="page-section" id="contact">
            <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj dostawe</h2>

            <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                       
                        <form action="<?php echo e(route ('storee')); ?>" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                        <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e(old('klient')); ?>" class="form-control" id="klient" name="klient" type="text" placeholder="Nazwa klienta" data-sb-validations="required" />
                                <label for="klient">Klient</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Podaj nazwe klienta.</div>
                            </div>
                            <?php if($errors->has('klient')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('klient')); ?> </div>
                        <?php endif; ?>
                        <!-- Miasto input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e(old('miasto')); ?>" class="form-control" id="miasto" name="miasto" type="text" placeholder="miasto" data-sb-validations="required" />
                                <label for="miasto">Miasto</label>
                                <div class="invalid-feedback" data-sb-feedback="code:required">Podaj miasto.</div>
                            </div>
                            <?php if($errors->has('miasto')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('miasto')); ?> </div>
                        <?php endif; ?>
                        <!-- Numer input-->
                        <div class="form-floating mb-3">
                                <input value="<?php echo e(old('numer')); ?>" class="form-control" id="numer" name="numer" type="text" placeholder="numer" data-sb-validations="required" />
                                <label for="numer">Nr listu przewozowego</label>
                                <div class="invalid-feedback" data-sb-feedback="numer:required">Nr listu przewozowego.</div>
                            </div>
                            <?php if($errors->has('numer')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('numer')); ?> </div>
                        <?php endif; ?>
                        <!-- Wprowadził input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="wprowadzil" name="wprowadzil" type="text" value="<?php echo e(Auth::user()->name); ?>" placeholder="wprowadzil" data-sb-validations="required" readonly/>
                                <label for="wprowadzil">Wprowadził</label>
                                <div class="invalid-feedback" data-sb-feedback="wprowadzil:required">Wprowadził.</div>
                            </div>
                            <?php if($errors->has('wprowadzil')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('wprowadzil')); ?> </div>
                        <?php endif; ?>
                        <!-- Typ input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e(old('typ')); ?>" class="form-control" id="typ" name="typ" type="text" placeholder="Typ" data-sb-validations="required" />
                                <label for="typ">Typ</label>
                                <div class="invalid-feedback" data-sb-feedback="typ:required">Podaj typ.</div>
                            </div>
                            <?php if($errors->has('typ')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('typ')); ?> </div>
                        <?php endif; ?>
                        <!-- Waga input-->
                        <div class="form-floating mb-3">
                                <input value="<?php echo e(old('waga')); ?>" class="form-control" id="waga" name="waga" type="text" placeholder="waga" data-sb-validations="required" />
                                <label for="waga">Waga</label>
                                <div class="invalid-feedback" data-sb-feedback="waga:required">Podaj wage.</div>
                            </div>
                            <?php if($errors->has('waga')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('waga')); ?> </div>
                        <?php endif; ?>
                        <!-- Ilosc input-->
                        <div class="form-floating mb-3">
                                <input value="<?php echo e(old('ilosc')); ?>" class="form-control" id="ilosc" name="ilosc" type="text" placeholder="Ilosc" data-sb-validations="required" />
                                <label for="ilosc">Ilość</label>
                                <div class="invalid-feedback" data-sb-feedback="ilosc:required">Podaj ilosc.</div>
                            </div>
                            <?php if($errors->has('ilosc')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('ilosc')); ?> </div>
                        <?php endif; ?>
                        <!-- Cena input-->
                        <div class="form-floating mb-3">
                                <input value="<?php echo e(old('cena')); ?>" value="<?php echo e(old('cena')); ?>" class="form-control" id="cena" name="cena" type="text" placeholder="Cena" data-sb-validations="required" />
                                <label for="cena">Cena</label>
                                <div class="invalid-feedback" data-sb-feedback="cena:required">Podaj cene.</div>
                            </div>
                            <?php if($errors->has('cena')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('cena')); ?> </div>
                        <?php endif; ?>
                        <!-- Kom input-->
                        <div class="form-floating mb-3">
                                <input value="<?php echo e(old('komentarz')); ?>"  class="form-control" id="komentarz" name="komentarz" type="text" placeholder="Komentarz" data-sb-validations="required" />
                                <label for="komentarz">Komentarz</label>
                                <div class="invalid-feedback" data-sb-feedback="komentarz:required">Podaj komentarz.</div>
                                
                            </div>
                            <?php if($errors->has('komentarz')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('komentarz')); ?> </div>
                        <?php endif; ?>
                            </br>

                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Dodaj dostawe</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/Order/nowaDostawa.blade.php ENDPATH**/ ?>