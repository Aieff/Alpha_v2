function triggerClick() {
    document.querySelector('#profileImage').click();

}

function displayImage(e) {
    if(e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}

function alertImage(){
    window.alert("Para melhor resolução de seu avatar a imagem deve conter 130 Pixels de Altura e Largura!")
}

 

