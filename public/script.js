const select = document.getElementById('form-select');


function prueba() {
    const divNatural = document.getElementById('divNatural');
    const divJuridica = document.getElementById('divJuridica');
    let selectValue = select.options[select.selectedIndex].value;

    switch (selectValue) {
        case '1':
            divNatural.removeAttribute('hidden');
            divJuridica.setAttribute('hidden', 'true');
            break;
        case '2':
            divNatural.setAttribute('hidden', 'true');
            divJuridica.removeAttribute('hidden');
            break;
        default:
            divJuridica.setAttribute('hidden', 'true');
            divNatural.setAttribute('hidden', 'true');
            break;
    }
}

function buscarTipo() {
    const divNumId = document.getElementById('divNumId');
    const divNit = document.getElementById('divNit');

    let selectValue = select.options[select.selectedIndex].value;

    switch (selectValue) {
        case '1':
            divNumId.removeAttribute('hidden');
            divNit.setAttribute('hidden', 'true');
            break;
        case '2':
            divNumId.setAttribute('hidden', 'true');
            divNit.removeAttribute('hidden');
            break;
        default:
            divNit.setAttribute('hidden', 'true');
            divNumId.setAttribute('hidden', 'true');
            break;
    }
}
