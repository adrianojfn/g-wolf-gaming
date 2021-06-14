// Recebe os elementos HTML em variáveis através de seu ID
let lForum = document.getElementById('loginForum');
let cForum = document.getElementById('cadastroForum');

// Função que remove a classe "d-none" do elemento #loginForum e adiciona ao elemento #cadastroForum caso já esteja visível
function loginForum() {
    lForum.classList.remove("d-none");
    cForum.classList.add("d-none");
}

// Função que remove a classe "d-none" do elemento #cadastroForum e adiciona ao elemento #loginForum caso já esteja visível
function cadastroForum() {
    cForum.classList.remove("d-none");
    lForum.classList.add("d-none");
}