const mah = document.querySelector(".ram")
const name = document.querySelector("#name")
const email = document.querySelector("#email")
const date = document.querySelector("#date")
const phone = document.querySelector("#phone")
const message = document.querySelector("#message")
 console.log('came in')

 var names = [];
//  mah.onsubmit
function power(){
    var x = names.push(name.value)
    window.alert("Dear "+name.value+" ,Your appoinment with token number " + names.push()+" has been booked successfully, Refer your mail for timings, Thank You!!")
    name.value = '';
    email.value = '';
    date.value = '';
    message.value = '';
    phone.value = '';

}

