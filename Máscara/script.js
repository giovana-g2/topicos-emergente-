document.addEventListener("DOMContentLoaded", () => {
    const cpf = document.getElementById('cpf');
    const telefone = document.getElementById('telefone');
    const dataNascimento = document.getElementById('dataNascimento');
    const cep = document.getElementById('cep');

    cpf.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '').replace(/(\d{3})(\d)/, '$1.$2').replace(/(\d{3})(\d)/, '$1.$2').replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    });

    telefone.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '').replace(/^(\d{2})(\d)/, '($1) $2').replace(/(\d)(\d{4})$/, '$1-$2');
    });

    dataNascimento.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '').replace(/(\d{2})(\d)/, '$1/$2').replace(/(\d{2})(\d)/, '$1/$2');
    });

    cep.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '').replace(/(\d{5})(\d)/, '$1-$2');
    });
});
