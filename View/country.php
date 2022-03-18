<div>
<h1> Landenoverzicht </h1>
<h4>ID Land    Hoofdstad   Continent   Aantalinwoners</h>
</div>

<?php

foreach($countries as $country)
{ ?>
    <div>
        <?= $country['id'] ?>
        <?= $country['name'] ?>
        <?= $country['capitalCity'] ?>
        <?= $country['continent'] ?>
        <?= $country['population'] ?>
    </div>
<?php
} ?>

<br>
<a href="http://mvc-toets.org">Terug naar homepagina!</a>
