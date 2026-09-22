<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="section-header">
    <div>
        <h1>Customer Accounts</h1>
        <p>Sample customer records are displayed from a static PHP array in the Customers controller.</p>
    </div>
    <span class="tag"><?= count($customers) ?> records</span>
</section>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
