<header
    class="ampstart-headerbar border-bottom fixed d-flex justify-content-between align-items-center gap-x-2 top-0 left-0 right-0 px-4">

    <div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0"
        class="ampstart-navbar-trigger pr2">
        ☰
    </div>
    <a href="<?= base_url() ?>" class="me-auto mt-2">
        <amp-img class="pThumb" src="<?= base_url("assets/img/blog/mediabalangan.png") ?>" width="180" height="50"
            layout="intrinsic" alt="The Blog"></amp-img>
    </a>
    <div class="me-auto d-none d-md-block w-25">
        <form class="sample-form" method="GET" action="<?= base_url('search') ?>" target="_top">
            <div class="input-group">
                <input type="text" name="q" class="form-control rounded-start-pill ps-4 border-secondary-subtle"
                    placeholder="Search article: type title or labels ..." aria-label="Search"
                    aria-describedby="buttonSearch">
                <button name="search" aria-label="search"
                    class="btn btn-outline-secondary border-secondary-subtle rounded-start-0 rounded-end-pill d-flex justify-content-between align-items-center gap-2"
                    type="submit" id="buttonSearch"><i class="fa fa-search px-2"></i></button>
            </div>
        </form>
    </div>
    <div>
        <a target="_blank" href="https://www.blogger.com/profile/07844400727783384626" class="btn btn-success rounded-pill text-white" aria-label="Person"><i
                class="fa fa-user"></i> me</a>
    </div>
</header>