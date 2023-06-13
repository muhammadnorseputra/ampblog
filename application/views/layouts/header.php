<header class="ampstart-headerbar fixed flex justify-between items-center top-0 left-0 right-0 px-3 px-md-4">

    <div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0"
        class="ampstart-navbar-trigger pr2">
        ☰
    </div>
    <amp-img class="me-auto" src="<?= base_url("assets/img/blog/mediabalangan.png") ?>" width="150" height="40"
        layout="fixed" alt="The Blog"></amp-img>

    <div class="me-md-auto ms-auto">
        <form class="sample-form" method="POST" action="<?= base_url('search') ?>" target="_top">
            <div class="input-group">
                <input type="text" name="query" class="form-control rounded-start-pill ps-4" placeholder="Type title article ..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary rounded-start-0 rounded-end-pill" type="submit" id="button-addon2"><i class="fa fa-search mr-2"></i> Search</button>
            </div>
        </form>
    </div>
    <div class="d-none d-md-block">
        <button class="btn btn-success rounded-cicle text-white" role="button" type="button"><i class="fa fa-user"></i></button>
    </div>
</header>