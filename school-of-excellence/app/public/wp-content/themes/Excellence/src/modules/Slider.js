class Slider {

    constructor() {
        this.slideCounter = 1;
        
        setInterval( ()=>{
            this.radioId = 'auto-btn' + this.slideCounter;
            this.radioBtn = document.getElementsByClassName('".'+ this.radioId +'"');
            this.radioBtn.checked = true;
            this.slideCounter = this.slideCounter + 1;     
            if (this.slideCounter > 3) {
                this.slideCounter = 1;
            }
        }, 3000);
    }
}

export default Slider

