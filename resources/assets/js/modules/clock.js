/**
 * Simple clock class
 */

class Clock {

    constructor(minuteHand, hourHand) {
        //this.hands = document.querySelectorAll('.hand');
        //this.secondHand = document.querySelector('.second-hand');
        this.minuteHand = document.querySelector(minuteHand);
        this.hourHand = document.querySelector(hourHand);
        this.debug = false;
    }

    setDebug(bool){
        this.debug = bool; 
    }

    start(){
        setInterval(this.setDate(), 1000);
    }

    setDate() {
        const now = new Date();
        const second = now.getSeconds();
        const secondsDegress = ((second / 60) * 360) + 90;

        for (let i = 0; i < hands.length; ++i) {
            if (second == 0) {
                hands[i].style.transition = "0s";
                (this.debug) ? console.log(hands[i].style) :'';
            } else {
                if (hands[i].style.transition == "0s") {
                    hands[i].style.transition = "all 0.5s";
                }
            }
        }


        const minute = now.getMinutes();
        const minuteDegress = ((minute / 60) * 360) + 90;

        const hour = now.getHours();
        const hourDegress = ((hour / 24) * 360) + 90;

        //secondHand.style.transform = `rotate(${secondsDegress}deg)`;
        minuteHand.style.transform = `rotate(${minuteDegress}deg)`;
        hourHand.style.transform = `rotate(${hourDegress}deg)`;
    }
}

export default Clock;