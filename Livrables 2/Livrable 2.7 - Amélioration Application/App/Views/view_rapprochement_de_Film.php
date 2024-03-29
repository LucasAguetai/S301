<?php 
    require "view_begin.php"; 
?>

<title>ApnaTV.com | Rapprochement de Film</title>

<div class="container d-flex flex-column align-items-center justify-content-center v-100 vh-100 text-white text-center">
    <h1 class="mb-5">Selectionner deux films</h1>
    <!-- select two movies -->
    <form action="index.php?controller=Rapprochement_de_Film&action=use_algo" method="post" class="row">
        <div class="col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Selectionner un film</label>
            <select class="form-select" aria-label="Default select example" name="movie1">
                <option selected>Open this select menu</option>
                <?php foreach ($movies as $movie) : ?>
                    <option value="<?= $movie["tconst"] ?>"><?= $movie["primarytitle"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-12 col-md-6 mt-3 mt-md-0">
            <label for="exampleFormControlInput1" class="form-label">Selectionner un film</label>
            <select class="form-select" aria-label="Default select example" name="movie2">
                <option selected>Open this select menu</option>
                <?php foreach ($movies as $movie) : ?>
                    <option value="<?= $movie["tconst"] ?>"><?= $movie["primarytitle"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>  

        <div class="col-12 mt-5">
            <button type="submit" class="btn btn-outline-light btn-lg">Chercher</button>
        </div>
    </form>
    <h1 class="mt-5 display-2">⬇︎</h1>
    <p>Pour les acteurs</p>
</div>

<div class="container d-flex flex-column align-items-center justify-content-center v-100 vh-100 text-white text-center">
    <h1 class="mb-5">Selectionner deux acteurs/actrices</h1>
    <!-- select two actors -->
    <form action="index.php?controller=Rapprochement_de_Film&action=use_algo" method="post" class="row">
        <div class="col-12 col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Selectionner un acteur/actrice</label>
            <select class="form-select" aria-label="Default select example" name="actor1">
                <option selected>Open this select menu</option>
                <?php foreach ($actors as $actor) : ?>
                    <option value="<?= $actor["nconst"] ?>"><?= $actor["primaryname"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-12 col-md-6 mt-3 mt-md-0">
            <label for="exampleFormControlInput1" class="form-label">Selectionner un acteur/actrice</label>
            <select class="form-select" aria-label="Default select example" name="actor2">
                <option selected>Open this select menu</option>
                <?php foreach ($actors as $actor) : ?>
                    <option value="<?= $actor["nconst"] ?>"><?= $actor["primaryname"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>  

        <div class="col-12 mt-5">
            <button type="submit" class="btn btn-outline-light btn-lg">Chercher</button>
        </div>
    </form>
</div>

<?php require "view_end.php"; ?>
