
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>
    <?= $this->Html->css('main') ?>
</head>

<body id="page-top">

<!-- Navigation -->
<?= $this->element('lib/header') ?>


<!-- Contact Section -->
<section class="page-section" id="content">
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</section>


<?= $this->element('lib/footer') ?>


<!-- Bootstrap core JavaScript
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


<script src="js/creative.min.js"></script>
-->
<?= $this->Html->script('main') ?>

</body>

</html>
