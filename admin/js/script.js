// login da area administrativa

const loginUser = async () => {
  
      let dados = new FormData($('#loginUser')[0]);
  
      const result = fetch('../backend/validaLogin.php', {
        method: 'POST',
        body: dados
      })
        .then((response => response.json()))
        .then((result) => {
          if(result.retorno == 'erro'){
            Swal.fire({
              icon: 'error',
              title: 'Atenção',
              text: result.mensagem,
            })
          }else{
            window.location.replace("http://localhost/TabSantoAmaro/admin/artigos-adm.html")
          }
        })
  }

  const cadArtigo = async () => {
  
    let dados = new FormData($('#cadArtigo')[0]);

    const result = fetch('../backend/cadastroArtigo.php', {
      method: 'POST',
      body: dados
    })
      .then((response => response.json()))
      .then((result) => {
        if(result.retorno == 'erro'){
          Swal.fire({
            icon: 'error',
            title: 'Atenção',
            text: result.mensagem,
          })
        }else{
          window.location.replace("http://localhost/TabSantoAmaro/admin/artigos-adm.html")
        }
      })
}

  function negrito() {
    const textarea = document.getElementById("editor");
    const start = textarea.selectionStart;
    const end = textarea.selectionEnd;
    const texto = textarea.value;

    const selecionado = texto.substring(start, end);
    const formatado = "<b>" + selecionado + "</b>";

    // Substitui texto selecionado pelo formatado
    textarea.value = texto.substring(0, start) + formatado + texto.substring(end);
}