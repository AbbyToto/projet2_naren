<main>
    <section>
        <h4>Add Product</h4>
        <form method="post">
            <?php if (isset($data['global'])) : ?>
            <div class="alert alert-danger"><?= $data['global'] ?></div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" name="url_img">
                <?php if (isset($data['url_img'])) : ?>
                <div class="alert alert-danger"><?= $data['url_img'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <?php if (isset($data['name'])) : ?>
                <div class="alert alert-danger"><?= $data['name'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
                <?php if (isset($data['description'])) : ?>
                <div class="alert alert-danger"><?= $data['description'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="qtty" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="qtty" name="qtty">
                <?php if (isset($data['qtty'])) : ?>
                <div class="alert alert-danger"><?= $data['qtty'] ?></div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
                <?php if (isset($data['price'])) : ?>
                <div class="alert alert-danger"><?= $data['price'] ?></div>
                <?php endif; ?>
            </div>

            <input type="submit" value="Register" name="enregistre" class="btn btn-success">
        </form>
    </section>
</main>