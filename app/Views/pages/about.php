<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <p class="eyebrow">About The Project</p>
    <div>
        <h1>Four pages built with MVC basics</h1>
        <p class="lead">
            This activity focuses on the first working layer of a POS system. Routes connect
            browser URLs to controller methods, controllers prepare page data, and views
            display the final HTML.
        </p>
    </div>
</section>

<section class="grid" aria-label="MVC responsibilities">
    <article class="card">
        <h2>Routes</h2>
        <p>The Routes file maps /, /about, /customers, and /users to matching controller methods.</p>
    </article>
    <article class="card">
        <h2>Controllers</h2>
        <p>Pages, Customers, and Users controllers return the views required by the activity.</p>
    </article>
    <article class="card">
        <h2>Views</h2>
        <p>The views render page content and loop through static arrays for account listings.</p>
    </article>
</section>
<?= $this->endSection() ?>
