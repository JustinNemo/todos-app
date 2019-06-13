<!DOCTYPE html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Todos-app</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/todos">Todos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/new-todos">Create Todos <span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
    </nav>
    <div class="container">
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success')); ?>

            </div>
        <?php endif; ?>
    </div>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\todos-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>