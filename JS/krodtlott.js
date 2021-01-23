function tabFix(target){
    console.log(target)
    const caixa = document.querySelector('.bloco-det-lado');

    if(target == 'login'){
        caixa.classList.remove('cadastro');
        caixa.classList.add(target);
    } else if (target == 'cadastro') {
        caixa.classList.remove('login');
        caixa.classList.add(target);
    }else{
        throw `a variavel target está recebendo '${target}', este valor é inválido!!!`;
    }

}