<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
        <a href="/notes" class="text-blue-500 underline">Go back...</a>
    </p>

    <p><?= htmlspecialchars($note['body']) ?></p>

    <form method="post" class="mt-6">
        <input type="hidden" name="id" value="<?= $note['id'] ?>" />
        <button class="text-sm text-red-500" type="submit">Delete</button>
    </form>
</main>

<?php require base_path('views/partials/footer.php'); ?>
