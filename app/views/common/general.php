<?php ob_start(); ?>
    <h1>Articles</h1>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Author</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $article['id'] ?></td>
                <td><?= htmlspecialchars($article['title']) ?></td>
                <td><?= $article['date'] ?></td>
                <td><?= htmlspecialchars($article['author']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php
$content = ob_get_clean();
include __DIR__ . '/../main_template/main.php';
