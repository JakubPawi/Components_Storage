<?php $__env->startSection('content'); ?>

        <section class=" page-section komponenty" id="komponenty">
            <div class="container">
        <style>.alert {
        padding: 20px;
        background-color: #90EE90;
        color: black;
        }

        .closebtn {
        margin-left: 15px;
        color: black;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }

        .closebtn:hover {
        color: black;
        }
        </style>

            <?php if(session()->has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dostawy</h2>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Klient:</th>
                    <th scope="col">Miasto:</th>
                    <th scope="col">Wprowadził:</th>
                    <th scope="col">Typ:</th>
                    <th scope="col">Waga:</th>
                    <th scope="col">Ilość:</th>
                    <th scope="col">Cena:</th>
                    <th scope="col">Akcje:</th>
                    

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                    <th scope="row"><?php echo e($x ++); ?>.</th>
                    <td><?php echo e($order->klient); ?></td>
                    <td><?php echo e($order->miasto); ?></td>
                    <td><?php echo e($order->wprowadzil); ?></td>
                    <td><?php echo e($order->typ); ?></td>
                    <td><?php echo e($order->waga); ?> kg</td>
                    <td><?php echo e($order->ilosc); ?> szt.</td> 
                    <td><?php echo e($order->cena); ?> zł</td> 
                    <td><a href="<?php echo e(route('editt',['id'=> $order->id])); ?>" class="btn btn-default" >Edytuj</a>
                    <a href="<?php echo e(route('details',['id'=> $order->id])); ?>" class="btn btn-default" >Szczegóły</a>

                    <form action="<?php echo e(route('destroyy',['id'=> $order->id])); ?>" method="post" id="delete-form-<?php echo e($order->id); ?>" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    </form>
                    <a class="btn btn-default href="" onclick="
                    if(confirm('Czy napewno chcesz usunąć?')){
                        event.preventDefault();
                        document.getElementById('delete-form-<?php echo e($order->id); ?>').submit();
                        }else{
                            event.preventDefault();
                            }">
                    Usuń
                </td>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                </tbody>
                </table>
            </div>
        </section>
        
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentt'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/Order/index.blade.php ENDPATH**/ ?>