<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <p class="eyebrow">Point of Sale Starter</p>
    <div>
        <h1>Your first CodeIgniter POS application</h1>
        <p class="lead">
            This starter site demonstrates routing, controllers, views, shared navigation,
            and temporary static-array data for a basic POS system.
        </p>
    </div>
    <div class="actions">
        <a class="button" href="<?= site_url('customers') ?>">View Customers</a>
        <a class="button secondary" href="<?= site_url('users') ?>">View Users</a>
    </div>
</section>

<section class="grid" aria-label="Application sections">
    <article class="card">
        <h2>Landing Page</h2>
        <p>The home route introduces the application and links to the main account pages.</p>
    </article>
    <article class="card">
        <h2>About Page</h2>
        <p>The about route explains the purpose of this first POS foundation build.</p>
    </article>
    <article class="card">
        <h2>Static Data</h2>
        <p>Customer and user records are stored in PHP arrays before a database is added.</p>
    </article>
</section>
<?= $this->endSection() ?>
