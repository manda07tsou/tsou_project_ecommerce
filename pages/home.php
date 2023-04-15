<div class="header-home container">
    <div>
        <h1 class="text-secondary">Bienvenue sur E-Shop</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Modi optio recusandae minus deserunt, velit omnis odio.</p>
        <a href="?p=produits" class="btn-primary mt-5">Acheter maintenant</a>
    </div>
    <img src="./../images/fondHeader.webp" alt="home-img" class="home-img">
</div>

<div class="">
    <div class="product-section">
        <h4 class="page-title">Nos produits</h4>
        <div class="category-btn">
            <a href="#" class="btn">categorie</a>
            <a href="#" class="btn">categorie</a>
            <a href="#" class="btn">categorie</a>
            <a href="#" class="btn">categorie</a>
            <a href="#" class="btn">categorie</a>
        </div>

        <div class="products">
        <?php for($i=0; $i<5; $i++){?>
            <a href="?p=produit-details" class="product">
                <?php include('produits/_card.php');?>
            </a>
        <?php } ?>
    </div>
        <a href="?p=produits" class="link-show-all">Afficher plus &#10095;</a>
    </div>

    <div class="services-section">
        <h4 class="page-title">Services</h4>
        <div class="cards">
            <div class="card">
                <div class="card-title">services 1</div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                </div>
            </div>

            <div class="card">
                <div class="card-title">services 1</div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                </div>
            </div>

            <div class="card">
                <div class="card-title">services 1</div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, et tenetur suscipit amet consequatur totam ipsum nisi, sapiente in aut quibusdam!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section">
        <h4 class="page-title">Nous contacter</h4>

        <div class="contact">
            <form action="">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name">
                <label for="mail">Email</label>
                <input type="text" class="form-control" name="mail">
                <label for="message">Messages</label>
                <textarea class="textarea" name="message"></textarea>
                <button class="btn-secondary mt-5">Envoyer</button>
            </form>
            <img src="./../images/local2.jpg" alt="">
        </div>

    </div>
</div>
