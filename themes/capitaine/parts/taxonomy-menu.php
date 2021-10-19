<?php
    $actualites = get_terms(['taxonomy' => 'actualite']);
?>

<?php if (is_array($actualites)): ?>
    <ul class="nav nav-pills mt-4">
        <?php foreach ($actualites as $actualite): ?>
            <li class="nav-item">
                <a href="<?= get_term_link($actualite) ?>" class="nav-link <?= is_tax('actualite', $actualite->term_id) ? 'active' : '' ?>" ><?= $actualite->name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
