class Menu{
    constructor(){
        this.menuBtn = document.querySelector(".menu-icon span")
        this.searchBtn = document.querySelector(".search-icon")
        this.cancelBtn = document.querySelector(".cancel-icon")
        this.items = document.querySelector(".nav-items")
        this.form = document.querySelector("form")
        this.events()
    }

    events() {
        this.menuBtn.addEventListener("click", () => this.openMenu());
        this.cancelBtn.addEventListener("click", () => this.closeMenu());
        document.addEventListener("keyup", this.keyPressed.bind(this));        
    }

    openMenu() {
        this.items.classList.add("active");
        this.menuBtn.classList.add("hide");
        this.searchBtn.classList.add("hide");
        this.cancelBtn.classList.add("show");
    }

    closeMenu() {
        this.items.classList.remove("active");
        this.menuBtn.classList.remove("hide");
        this.searchBtn.classList.remove("hide");
        this.cancelBtn.classList.remove("show");
        this.form.classList.remove("active");
        this.cancelBtn.style.color = "#ff3d00";
    }
    keyPressed(e){
        if(e.keyCode == 27){
                this.closeMenu();
        }
    }

}

export default Menu