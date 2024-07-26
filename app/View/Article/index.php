<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card px-3 pt-3" style="max-width: 50rem">
        <div class="card-header text-center bg-primary text-white">
        </div>
        <!-- News block -->
        <div class="card-body">
            <!-- Featured image -->
            <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                <img src="<?= $model['article']['photo_url'] ?>" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>

            <!-- Article data -->
            <div class="row mb-3">
                <div class="col-6">
                    <a href="" class="text-info">
                        <i class="fas fa-motorcycle"></i>
                        <?= $model['article']['title'] ?>
                    </a>
                </div>

                <div class="col-6 text-end">
                    <u>  <?= $model['article']['publication_date'] ?> </u>
                </div>
            </div>

            <!-- Article title and description -->
            <a href="" class="text-dark">
                <h5>Service <?= $model['article']['title'] ?></h5>
                <p>
                    <?= $model['article']['content'] ?>
                </p>
            </a>

            <hr />
            <!-- News -->
            <?php
            foreach ($model['articleDetail'] as $articleDetail) {
            ?>
                <a href="" class="text-dark">
                    <div class="row mb-4 border-bottom pb-2">
                        <div class="col-3">
                            <img src="<?= $articleDetail->cover_url ?>"
                                 class="img-fluid shadow-1-strong rounded" alt="Touring Event 2" />
                        </div>

                        <div class="col-9">
                            <p class="mb-2"><strong><?= $articleDetail->name?></strong></p>
                            <p> <?= \clubMotor\Helper\TextHelper::truncateText($articleDetail->description, 100) ?></p>
                            <p>
                                <u> <?= $model['article']['publication_date'] ?></u>
                            </p>
                        </div>
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
        <!-- News block -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>