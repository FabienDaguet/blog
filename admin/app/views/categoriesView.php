<?php include("app/views/layout/header.inc.php") ?>
    <?php include("app/views/layout/sidebar.inc.php") ?>
        <main>
            <div class="container-fluid">
                <a href="index.php"><h1 class="mt-4">Dashboard</h1></a>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Catégories
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="p-2 mb-3 col">
                                <form class="d-flex flex-wrap" method="post" action="addCategorie.php>">
                                    <label class="mr-2" for="category">Nouvelle catégorie</label>
                                    <input class="mr-2 rounded border-light" type="text" id="category" name="cat_descr">
                                    <input class="bg-primary text-white rounded border-light" type="submit" value="Ajouter">
                                </form>
                            </div>
                            <div class="col">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Catégories</th>
                                            <th>Nombre d'articles</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($categories as $category) { ?>
                                            <tr>
                                                <td><?= $category["cat_descr"] ?></td>
                                                <td><?= count(postByClass($category["cat_id"])) ?></td>
                                                <td><a href="category_delete.php?id=<?= $category["cat_id"] ?>&token=<?= $_SESSION["userBO"]["token"] ?>" class="suppr"><i class="fas fa-trash-alt"></i></a></td>
                                                
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Catégorie</th>
                                            <th>Nombre d'articles</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("app/views/layout/footer.inc.php") ?>

        