<header
    class="ampstart-headerbar border-bottom fixed d-flex justify-content-between align-items-center gap-x-2 top-0 left-0 right-0 px-3 px-md-4">

    <div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0"
        class="ampstart-navbar-trigger pr2">
        ☰
    </div>
    <amp-img class="me-auto" src="<?= base_url("assets/img/blog/mediabalangan.png") ?>" width="150" height="40"
        layout="fixed" alt="The Blog"></amp-img>

    <div class="me-auto d-none d-md-block w-50">
        <form class="sample-form" method="GET" action="<?= base_url('search') ?>" target="_top">
            <div class="input-group">
                <input type="text" name="q" class="form-control rounded-start-pill ps-4"
                    placeholder="Search article: type title or labels ..." aria-label="Search"
                    aria-describedby="button-addon2">
                <button
                    class="btn btn-outline-secondary rounded-start-0 rounded-end-pill d-flex justify-content-between align-items-center gap-2"
                    type="submit" id="button-addon2"><i class="fa fa-search mr-2"></i> <span class="d-none d-md-block">
                        Search</span></button>
            </div>
        </form>
    </div>
    <div>
        <button class="btn btn-success rounded-circle text-white" role="button" type="button"><i
                class="fa fa-user"></i></button>
    </div>
</header>