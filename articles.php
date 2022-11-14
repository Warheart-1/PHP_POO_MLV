<?php 
    require __DIR__ . '/templates/header.php';
    require __DIR__ . '/src/article_fn.php';
    require __DIR__ . '/config.php';
    $articles = getArticles($pdo);
?>
<h1>
    Articles
</h1>
<?php foreach ($articles as $article) : ?>
    <br>
    <section>
        <h2>
            <?= $article['title'] ?>
        </h2>
        <br>
        <p>
            <?= $article['descrption'] ?>
        </p>
        <br>
        <p>
            <?= $article['content'] ?>
        </p>
    </section>
<?php endforeach; ?>
<br>    
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id
    placerat odio. Aliquam in eros id sem ultricies pharetra at eu
    tortor. Etiam viverra, erat vel imperdiet sollicitudin, dui
    justo ornare libero, id blandit velit neque id arcu. Donec
    consequat nisi vestibulum ultricies malesuada. Ut vehicula
    consequat enim, quis accumsan massa luctus vel. In hac habitasse
    platea dictumst. Mauris accumsan nibh mi, et condimentum enim
    facilisis sed. Sed cursus erat leo, nec adipiscing eros at.
</p>
<?php require __DIR__ . '/templates/footer.php'; ?>
