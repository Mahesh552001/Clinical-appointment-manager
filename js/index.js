const mah = document.querySelector(".ram")
const name = document.querySelector("#name")
 console.log('came in')

 var names = [];
//  mah.onsubmit
function power(){
    var x = names.push(name.value)
    window.alert("Dear "+name.value+" ,Your appoinment with token number " + (names.push()).bold()+" has been booked successfully, Thank You!!")
    name.value = '';

}

