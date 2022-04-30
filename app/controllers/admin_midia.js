module.exports.listAdminMidia = function(application, req, res)
{
    res.render("admin/list_midia", {titulo:"MyFilmesAndSeries - Midias"});
}

module.exports.createAdminMidia = function(application, req, res)
{
    res.render("admin/form_midia", {titulo:"MyFilmesAndSeries - Nova Midia", rota_post:"/adm/nova_midia/"});
}

module.exports.editAdminMidia = function(application, req, res)
{
    res.render("admin/form_midia", {titulo:"MyFilmesAndSeries - Editar Midia", rota_post:"/adm/editar_midia/"});
}