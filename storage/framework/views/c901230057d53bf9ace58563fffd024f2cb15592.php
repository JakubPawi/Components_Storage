
        
<?php $__env->startSection('content'); ?>

               <section class="page-section" id="contact">
            <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj Dostawe  <?php echo e($wyslij->Typ); ?></h2>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">

                        <form action="<?php echo e(route ('updatee', ['id'=>$wyslij->id])); ?>" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <?php echo e(csrf_field()); ?>

                            <?php echo method_field('PUT'); ?>
                            <!-- Klient input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->klient); ?>" class="form-control" id="klient" name="klient" type="text" placeholder="Klient komponentu" data-sb-validations="required" />
                                <label for="klient">Klient</label>
                                <div class="invalid-feedback" data-sb-feedback="klient:required">Podaj nazwe klienta.</div>
                            </div>
                            <?php if($errors->has('klient')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('klient')); ?> </div>
                        <?php endif; ?>
                        <!-- Miasto input-->
                        <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->miasto); ?>" class="form-control" id="miasto" name="miasto" type="text" placeholder="miasto" data-sb-validations="required" />
                                <label for="miasto">Miasto</label>
                                <div class="invalid-feedback" data-sb-feedback="waga:required">Podaj miasto.</div>
                            </div>
                            <?php if($errors->has('miasto')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('miasto')); ?> </div>
                        <?php endif; ?>
                         <!-- Numer input-->
                         <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->numer); ?>" class="form-control" id="numer" name="numer" type="text" placeholder="numer" data-sb-validations="required" />
                                <label for="numer">Nr listu przewozowego</label>
                                <div class="invalid-feedback" data-sb-feedback="numer:required">Podaj numer.</div>
                            </div>
                            <?php if($errors->has('numer')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('numer')); ?> </div>
                        <?php endif; ?>
                            <!-- Wprowadzil input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->wprowadzil); ?>" class="form-control" id="wprowadzil" name="wprowadzil" type="text" placeholder="wprowadzil" data-sb-validations="required" readonly />
                                <label for="wprowadzil">Wprowadzil</label>
                                <div class="invalid-feedback" data-sb-feedback="wprowadzil:required">Wprowadzil.</div>
                            </div>
                            <?php if($errors->has('wprowadzil')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('wprowadzil')); ?> </div>
                        <?php endif; ?>
                            <!-- Typ input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->typ); ?>" class="form-control" id="typ" name="typ" type="text" placeholder="typ" data-sb-validations="required" />
                                <label for="typ">Typ</label>
                                <div class="invalid-feedback" data-sb-feedback="typ:required">Podaj typ.</div>
                            </div>
                            <?php if($errors->has('typ')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('typ')); ?> </div>
                        <?php endif; ?>
                            <!-- Waga input-->
                            <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->waga); ?>" class="form-control" id="waga" name="waga" type="text" placeholder="waga" data-sb-validations="required" />
                                <label for="waga">Waga</label>
                                <div class="invalid-feedback" data-sb-feedback="waga:required">Podaj wage.</div>
                            </div>
                            <?php if($errors->has('waga')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('waga')); ?> </div>
                        <?php endif; ?>
                        <!-- Ilosc input-->
                        <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->ilosc); ?>" class="form-control" id="ilosc" name="ilosc" type="text" placeholder="ilosc" data-sb-validations="required" />
                                <label for="ilosc">Ilosc</label>
                                <div class="invalid-feedback" data-sb-feedback="ilosc:required">Podaj ilosc.</div>
                            </div>
                            <?php if($errors->has('ilosc')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('ilosc')); ?> </div>
                        <?php endif; ?>
                        <!-- Cena input-->
                        <div class="form-floating mb-3">
                                <input value="<?php echo e($wyslij->cena); ?>" class="form-control" id="cena" name="cena" type="text" placeholder="cena" data-sb-validations="required" />
                                <label for="cena">Cena</label>
                                <div class="invalid-feedback" data-sb-feedback="cena:required">Podaj cena.</div>
                            </div>
                            <?php if($errors->has('cena')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('cena')); ?> </div>
                        <?php endif; ?>
                        <!-- Komentarz input-->
                        <div class="form-floating mb-3" >
                        <input value="<?php echo e($wyslij->komentarz); ?>" class="form-control" id="komentarz" name="komentarz" type="text" placeholder="komentarz" style="height: 10rem" data-sb-validations="required"></input>
                                <label for="komentarz">Komentarz</label>
                                <div class="invalid-feedback" data-sb-feedback="komentarz:required">Podaj komentarz.</div>
                            </div>
                            <?php if($errors->has('komentarz')): ?>
                            <div style="color: red;"> <?php echo e($errors->first('komentarz')); ?> </div>
                        <?php endif; ?>
                         
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Zapisz dostawe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/Order/editDostawa.blade.php ENDPATH**/ ?>