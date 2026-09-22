<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="section-header">
    <div>
        <h1>User Accounts</h1>
        <p>Sample staff records are displayed from a static PHP array in the Users controller.</p>
    </div>
    <span class="tag"><?= count($users) ?> records</span>
</section>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['role']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
