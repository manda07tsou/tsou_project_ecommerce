export class themeSwitcher extends HTMLElement{
    constructor(){
        super();

    }

    connectedCallback(){
        this.classList.add('theme-switcher');
        this.innerHTML = `<span></span>`;
        this.addEventListener('click', this.toggleTheme.bind(this));
    }

    toggleTheme(e){
        let body = document.body.classList;

        if(body.contains('is-dark')){
            body.remove('is-dark')
            body.add('is-light')
        }else{
            body.remove('is-light')
            body.add('is-dark')
        }
    }


}