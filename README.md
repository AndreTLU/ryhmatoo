# Rühmatoo
Rühmatöö JavaScriptis

...

30.04.2015 uuendus

* Lisaandmed on vaikimisi peidetud
* Teine otsingulahter on eemaldatud
* Pisike BootStrapi disaini muudatus
* Iga aine on tehtud lingiks (ainekood, ainenimi jne... viib selle aine lehele)
* Aine linki saab kopeerida otse clipboardi ühe nupuvajutusega "Kopeeri link" (ligipääs aine lehelt)
* "Lisaandmed" ja "Kopeeri link" nupud nähtaval vaid aine lehel, pealehel mitte

...

22.04.2015 uuendus

Võimalik on näha teatud aine infot lisades urli lõppu #ainekood.
Tabelis viimasesse lahtrisse tuleb nupp mis copyb valitud aine
lingi(nagu GIThubis on).
NB! Lisaandmed tuleb kohe alguses ära peita, et leht oleks kiirem.
Lisaandmed peaksid olema näha siis kui vajutada aine lahtri peale. Võiks
ka testida kumb on kiirem kas JSONist saada andmed või failist.
Teine otsingu lahter eemaldada.

...

ained.php - Kuvab JSON-i kujul andmed ainete kohta. Andmed tulevad algselt ainekood_pohiandmed.json failist

index.html - leht kus saab olema tabel ja otsingu funktsioon andmete otsimiseks ja kuvamiseks

ainekood_pohiandmed.json - mingi 8000 rida teksti ainete kohta

Romil soovitas kasutada ka stiili jaoks

https://github.com/drvic10k/bootstrap-sortable

https://fezvrasta.github.io/bootstrap-material-design/

http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html?optionsRadios=option2

Mingeid bootstrapi kujundusi neist
