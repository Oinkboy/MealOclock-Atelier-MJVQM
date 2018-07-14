<div id="events-container">
    <section class="card events col-12" id="no-border">
        <div class="event-title">
            <h2>Évènements</h2>
        </div>
            <?php foreach ($array_vars['array_eventsModel'] as $eventsModel):?>
            <section class="card event col-12 p-4 mt-5">
                <div class="row justify-content-between">
                    <article class="col-12 col-md-6">
                        <h4 class=""><?= $eventsModel->getTitle(); ?></h5>
                        <p class=""><?= $eventsModel->getDescription(); ?></p>
                    </article>
                    <aside class="event-details col-12 col-md-3">
                        <h3><span class="date"><?= $eventsModel->getDate(); ?></span></h3>
                        <p class="author"><?= $eventsModel->getUsername(); ?></p>
                        <p><?= $eventsModel->getNbOfPlace(); ?></p>
                        <a href=""><?= $eventsModel->getAdress(); ?></a>
                    </aside>
                </div>
            </section>
            <?php endforeach; ?>
</div>
