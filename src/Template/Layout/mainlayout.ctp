
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

        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
            passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.


        </p>

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
