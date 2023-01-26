<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xll-12">
            <h6 class="page-start mt-2">
                Aparência
            </h6>
            <button onclick="window.location.href='/canal_start/admin/archive/psd.rar'" type="button" class="btn btn-secondary w-50"><i class="bi bi-cloud-download-fill"></i>&nbsp;Baixar PSD's</button>
            <section class="appearanceEdit mt-4">
                <form class="appearanceEdit-form" action="javascript: appearance_edit();" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="destaque" class="form-label">Destaque</label>
                        <input type="file" name="destaque" class="form-control shadow-none border-dark" id="destaque">
                    </div>
                    <div class="mb-3">
                        <label for="originais" class="form-label">Originais</label>
                        <input type="file" name="originais" class="form-control shadow-none border-dark" id="originais"">
                    </div>
                    <div class="mb-3">
                        <label for="divulgacao" class="form-label">Onde nos encontrar</label>
                        <input type="file" name="divulgacao" class="form-control shadow-none border-dark" id="divulgacao"">
                    </div>
                    <div class="mb-3">
                        <label for="sobre" class="form-label">Sobre o site</label>
                        <input type="file" name="sobre" class="form-control shadow-none border-dark" id="sobre"">
                    </div>
                    <button type="submit" class="btn text-uppercase">Editar Aparência</button>
                </form>
            </section>
        </div>
    </div>
</div>
