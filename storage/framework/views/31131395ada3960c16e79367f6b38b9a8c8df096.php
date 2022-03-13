<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Places</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-default mt-1 mb-2">

        <div class="container">

            <div class="navbar-header">

                <h1>

                    <a href="/home" class="">API</a>

                </h1>

            </div>

        </div>
    </nav>

    <div class="container align-self-center">

        <div class="card mb-4">

            <div class="card-body">

                <form action="/simple/findPlace" method="get" enctype="multipart/form-data" class="row">

                    <div class="row col-12 align-items-end justify-content-right ml-2 ">

                    </div>

                        <div class="row col-12">

                        <div class="form-group col-5">

                            <label>
                                Lokacja:
                            </label>

                            <input type="text" name="location" value="<?php echo e(!empty($location) ? $location : ''); ?>" class="form-control">

                        </div>

                        <div class="form-group col-5">

                            <label>
                                Typ Miejsca:
                            </label>

                            <input type="text" name="placeType" value="<?php echo e(!empty($placeType) ? $placeType : ''); ?>" class="form-control">

                        </div>

                        <div class="form-group col-2 row align-items-end justify-content-center pr-0">

                            <button class="btn btn-success">
                                <i class="fas fa-search"></i>
                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <div class="container-fluid p-0">

        <?php if(!empty($places)): ?>

            <div class="row justify-content-center">

                <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if(!empty($place->highlightedVicinity)): ?>
                            <div style="overflow: hidden;" class="col-10 col-md-3 card m-3 mb-3">

                                <div class="card-body">

                                    <div
                                        style="min-height: 120px">

                                        <div
                                            style="min-height: 86px"
                                            class="row">

                                            <h1>
                                                <?php echo e($place->title); ?>

                                            </h1>
                                        </div>

                                        <div class="row justify-content-start mb-4">
                                            <?php echo $place->highlightedVicinity; ?>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        <?php else: ?>

            <?php if(!empty($location) && !empty($placeType)): ?>

                <div class="container p-0">

                    <div class="row justify-content-center pt-4">

                        <h3>
                            <b>
                                Not found
                            </b>
                        </h3>

                    </div>

                </div>

            <?php endif; ?>

        <?php endif; ?>

    </div>


</body>

</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kubak\OneDrive\Pulpit\pro lar php\Pro\resources\views/place-simple.blade.php ENDPATH**/ ?>