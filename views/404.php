<?php
$is_home = false;
require('partials/head.php');
require('partials/navigation.php')
?>

<main class="container my-6 md:my-12">
    <h1 lang="en" class="text-center font-bold font-mono text-3xl my-4 md:my-8 md:text-5xl">
        404 Not Found
    </h1>
    <h2 class="text-center text-xl md:text-3xl">
        Etsimääsi sivua ei ole olemassa
    </h2>
    <p class="text-center my-8 md:my-16">
        Etsimääsi sivua ei ole olemassa. <a class="underline" href="/">Palaa etusivulle.</a>
    </p>
</main>

<?php require('partials/footer.php') ?>
