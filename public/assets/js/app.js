class Main {
    constructor() {
        this.contentInput = document.querySelector("#context_input");
        this.spaceCnt = 0;
        this.nonSpaceCnt = 0;
        this.eventSetting();
    }

    eventSetting() {
        this.contentInput.addEventListener("input", this.wordCnt);
    }

    wordCnt() {
        let txt = document.querySelector("#context_input").value;
        let noSpaceTxt = txt.replace(/\s/g, '');
        document.querySelector("#space_txt_cnt > .len").innerHTML = txt.length;
        document.querySelector("#noSpace_txt_cnt > .len").innerHTML = noSpaceTxt.length;

        let txtCnt = 0;
        for (let i = 0; i < txt.length; i += 1) {
            let character = txt.charAt(i);
        
            if (escape(character).length > 4) txtCnt += 2;
            else txtCnt += 1;
        }
        

        let noSpaceTxtCnt = 0;
        for (let i = 0; i < noSpaceTxt.length; i += 1) {
            let character = noSpaceTxt.charAt(i);
        
            if (escape(character).length > 4) noSpaceTxtCnt += 2;
            else noSpaceTxtCnt += 1;
        }

        document.querySelector("#space_txt_cnt > .byte").innerHTML = txtCnt;
        document.querySelector("#noSpace_txt_cnt > .byte").innerHTML = noSpaceTxtCnt;
    }
}

window.addEventListener("load", function() {
    let main = new Main();
});