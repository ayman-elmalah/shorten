<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(isset($title) ? $title : "Home"); ?> | Shorten</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,500i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/style.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body><?php /**PATH E:\xampp\htdocs\shorten\views/web/layouts/head.blade.php ENDPATH**/ ?>