function abrirModal() {
    fetch(`edit.php`).then(function(html){
      return html.text();
    }).then(function(html){
      console.log(html)
      document.querySelector("#edit-modal-content").innerHTML = html;
    })
  }

  function voltar(){
    window.location = 'index.php';
}