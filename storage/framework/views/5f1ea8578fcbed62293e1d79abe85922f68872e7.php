        
<?php $__env->startSection('content'); ?>

            <div class="container">

            <div class="divider-custom"></div>

<div class="jumbotron">
    <h1 class="display-4"><b>Szczegoły</b></h1>
    <hr class="my-4">
    <p><table class="table table-striped">
    <thead>
        <tr>
            <th>
                Klient:           
            </th>
            <th>
                Miasto:            
            </th>
            <th>
                Nr listu przewozowego:            
            </th>
            <th>
                Wprowadził:         
            </th>
            <th>
                Typ:
            </th>
            <th>
                Waga:
            </th>
            <th>
                Ilość:
            </th>
            <th>
                Cena:
            </th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>
                    <dd class="col-sm-10">
                        <?php echo e($wyslij->klient); ?>                    
                    </dd>
                </td>

                <td>
                    <dd class="col-sm-10">
                        <?php echo e($wyslij->miasto); ?>                    
                    </dd>
                </td>

                <td>
                    <dd class="col-sm-10">
                        <?php echo e($wyslij->numer); ?>                    
                    </dd>
                </td>

                <td>
                    <dd class="col-sm-10">
                        <?php echo e($wyslij->wprowadzil); ?>                    
                    </dd>
                </td>

                <td>
                    <dd class="col-sm-10">
                        <?php echo e($wyslij->typ); ?>                    
                    </dd>
                </td>

                <td>
                    <dd class="col-sm-10">
                        <?php echo e($wyslij->waga); ?>                    
                    </dd>
                </td>

                <td>
                    <dd class="col-sm-10">
                        <?php echo e($wyslij->ilosc); ?>                    
                    </dd>
                </td>

                <td>
                    <dd class="col-sm-10">
                        <?php echo e($wyslij->cena); ?>                    
                    </dd>
                </td>
            </tr>
    </tbody>
</table></p>
<p class="lead">
        <dt class="col-sm-2">
            Komentarz:
        </dt>
        <dd class="col-sm-10">
            <?php echo e($wyslij->komentarz); ?>                    
        </dd>
    </p>
    <p class="lead">
       <a class="btn btn-primary btn-lg" href="<?php echo e(url('/order')); ?>" role="button">Wróć</a>
       <a class="btn btn-primary btn-lg" href="<?php echo e(route('editt',['id'=> $wyslij->id])); ?>" role="button">Edytuj</a>
       <div>

</div>
    </p>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/Order/details.blade.php ENDPATH**/ ?>