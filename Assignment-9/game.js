
function factorial(){

    answer=1;
    for(i=1;i<=number;i++){
        answer=answer*i

        document.getElementById("results").innerHTML += '<p class="factorials">' + answer + "</p>"

    }
}

function getNumber(){

    number = prompt("Please enter a number:");

    header = "Below are the factorials of all the numbers between 1 and " + number

    document.getElementById("results").innerHTML = '<p>' + header + '</p>'

    factorial();

}

