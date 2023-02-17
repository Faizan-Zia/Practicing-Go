import { element } from "prop-types";

class Counter {
    constructor() {
        this.counters = document.querySelectorAll('.value');
        this.speed = 100;

        this.counters.forEach(element => {
            let updateCounter = () => {
                let target = element.getAttribute('data-target');
                let value = parseInt(element.innerHTML, 10);
                let increment = target / this.speed;
                if (value < target) {
                    element.innerHTML = Math.ceil(value + increment);
                    setTimeout(updateCounter, 1);
                } else {
                    element.innerHTML = target;
                };
            }
            updateCounter();
        })
    }
}

export default Counter