class Rate {

    constructor (url){
        this.url = url;
    }


    /***
     * * this method is for sending data into controller
     *   this gets form content firstly then it send
     *   via ajax to the controller for proccess
     *   this method uses the URL path that comes from the class constructor at initiation point
     *   @param null
     * ***/
    SendToController (doRate,ids) {
        // send to controller via ajax, return message as response
        const xhr = new XMLHttpRequest();
        const location = `${this.url}dorate=${doRate}&ids=${ids}`;
        console.log(location);
        xhr.open("post",location,true);
        xhr.onreadystatechange = function () {
            console.log(xhr.responseText +" NNN ");
            if (xhr.readyState == 4 && xhr.status  == 200) {
                if (xhr.responseText) {

                    alert('That was a success!');
                }
            }
        }
        xhr.send();
    }


    doClick (){
        document.querySelector(".cover-rates").addEventListener('click',eve => {
            console.log(" ffff")
            if ( eve.target.matches('.doRate, .doRate *')){
                console.log(" now!");
                let targets = eve.target.value;
                if(targets != "") {
                    let ids = eve.target.dataset.ids;
                    this.SendToController(targets, ids);
                }
             }
        });



    }


}

const rate = new Rate("./Control.php?key=1234567opiuyt&method=insert&");
rate.doClick();

