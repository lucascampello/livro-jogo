function formPost(idForm,valor) {
    const form = document.getElementById(idForm.toString());
    const data = new FormData(form);
    data.append('acao', valor);

    fetch(form.action, {
        method: 'POST',
        body: data
    });
}