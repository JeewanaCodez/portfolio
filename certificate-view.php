<?php include 'includes/header.php'; ?>

<section class="page">

    <div class="container">

        <?php

        $certificate = $_GET['certificate'];

        ?>

        <div class="certificate-view">

            <h1 class="section-title">

                <?php echo ucfirst(str_replace("-", " ", $certificate)); ?>

            </h1>

            <img src="images/certificates/<?php echo $certificate; ?>.jpg"
                 alt="certificate">

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>