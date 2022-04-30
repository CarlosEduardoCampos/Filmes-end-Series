module.exports.listUserCategoria = function(categoria, application, req, res)
{
    switch (categoria) {
        case 1:
            res.render("categoria", {titulo:"MyFilmesAndSeries - Séries"});
        break;

        case 2:
            res.render("categoria", {titulo:"MyFilmesAndSeries - Filmes"});
        break;

        case 3:
            res.render("categoria", {titulo:"MyFilmesAndSeries - Animes"});
        break;

        default:
            res.render("index", {titulo:"MyFilmesAndSeries - Home", validacao:{}});
        break;
    }
}

module.exports.listUserCategoriaTipo = function(categoria, tipo, application, req, res)
{
    switch (tipo) {
        case 1:
            res.render("tipo", {titulo:"MyFilmesAndSeries - Ação", subTitulo:"Ação"});
        break;

        case 2:
            res.render("tipo", {titulo:"MyFilmesAndSeries - Terror", subTitulo:"Terror"});
        break;

        case 3:
            res.render("tipo", {titulo:"MyFilmesAndSeries - Drama", subTitulo:"Drama"});
        break;

        case 4:
            res.render("tipo", {titulo:"MyFilmesAndSeries - Romace", subTitulo:"Romace"});
        break;

        default:
            res.render("index", {titulo:"MyFilmesAndSeries - Home", validacao:{}});
        break;
    }
}