
    <section>
        <h1>Ajouter un article</h1>

        <form action="index.php" method="POST" class="formulaire">
            <fieldset>
                <legend>Ajouter un livre</legend>
                <label for="titre">Entrer le titre de l'article</label> <br>
                <input type="text" name="titre" id="titre"> <br>
                <label for="url">Entrer l'URL de l'article</label> <br>
                <input type="url" name="url" id="url"> <br>
                <label for="date">Entrer la date de l'article</label> <br>
                <input type="date" name="date" id="date"> <br>
                <label for="resume">Entrer un résumé</label> <br>
                <textarea name="resume" id="resume" cols="30" rows="10"></textarea> <br>
                <input type="submit" name="ajoutArt" id="ajoutArt" value="Ajouter l'article" >
            </fieldset>
            
        </form>
    </section>        