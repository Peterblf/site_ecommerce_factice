let images = document.querySelectorAll('img');
console.log(images);
for(let x=0; x<images.length;x++){

    images[x].addEventListener('click', function(){

        let nouvelleImage = document.createElement('img');

        let source = this.getAttribute("src");

        nouvelleImage.setAttribute('src', source);

    let close = document.createElement('img');

    close.setAttribute('src', 'images/close.png');

    close.setAttribute('id', 'close');

        let div = document.createElement('div');

        div.setAttribute('id', 'lightbox');

        div.appendChild(nouvelleImage);

    div.appendChild(close);

        document.body.appendChild(div);

    close.addEventListener('click', function(){

        document.body.removeChild(div);
    });

    });
}