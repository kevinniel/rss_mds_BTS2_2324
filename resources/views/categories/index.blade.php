<h1>categories</h1>
<hr>
@foreach($categories as $category)
    <p>{{ $category->name }}</p>
    <p>{{ $category->description }}</p>
@endforeach

{{ $toto }}


{{-- 
    1. Créer la route dans web.php
    2. Créer le controller avec la commande 'php artisan make:controller NomDuController'
    3. Créer la méthode correspondante à la route dans le controller
    4. Faire un 'dd' dans la méthode pour voir si la route fonctionne
    5. Créer la migration avec la commande 'php artisan make:migration create_nom_table'
    6. Créer le modèle avec la commande 'php artisan make:model NomDuModel'
    7. Créer le factory avec la commande 'php artisan make:factory NomDuFactory'
    8. Appeler le factory dans le fichier DatabaseSeeder.php
    9. Faire un 'php artisan migrate:fresh --seed' pour créer la table et la remplir avec les données du factory
    10. Implémenter les méthodes des routes en se servant des modèles dans les contrôlleurs pour récupérer les données de la BDD

    Exemple de nommage pour la gestion de "catégories" : 
    - migration : create_categories_table (toujours au pluriel + snake_case)
    - modèle : Category (toujours au singulier + PascalCase)
    - contrôlleur : CategoryController (toujours au singulier + PascalCase)
    - factory : CategoryFactory (toujours au singulier + PascalCase)
    - table : categories (toujours au pluriel + snake_case)
    - liste des routes de base pour un CRUD complet : 
        - Route::get('/categories', [CategoryController::class, 'index'])->name('categorie.index'); // affiche la liste des catégories
        - Route::get('/categories/{id}/show', [CategoryController::class, 'show'])->name('categorie.show'); // affiche une catégorie
        - Route::get('/categories/create', [CategoryController::class, 'create'])->name('categorie.create'); // affiche le formulaire de création
        - Route::post('/categories/store', [CategoryController::class, 'store'])->name('categorie.store'); // enregistre une catégorie
        - Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categorie.edit'); // affiche le formulaire d'édition
        - Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('categorie.update'); // modifie une catégorie
        - Route::delete('/categories/{id}/destroy', [CategoryController::class, 'destroy'])->name('categorie.destroy'); // supprime une catégorie
--}}