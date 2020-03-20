

pics = new Array("images/p_red_car.jpg", "images/2019_genesis_g80_angularfront.jpg", "images/07car1.jpg")
count = 0;
pcount = pics.length

function npic(){
    count++
    if(count<pcount){
        document.pic.src = pics[count]
    }
    else{
        count = 0
        document.pic.src = pics[count]
    }

}

function ppic(){
    count--
    if(count > -1){
        document.pic.src = pics[count]
    }
    else{
        count = pcount-1
        document.pic.src = pics[count]
    }
}

