export default class Burger {
    private nav: HTMLElement = document.querySelector('.nav-items');
    private burger: HTMLElement = document.querySelector('.burger');
    
    constructor() {
        if (!this.burger) {
            return;
        }
        
        this.burger.addEventListener('click', () => {
            this.nav.classList.toggle('visible');
        });
    }
}