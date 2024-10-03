const form = document.querySelector("#form");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  var name1 = document.getElementById("name1").value;
  var name2 = document.getElementById("name2").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  if (name1 == "" || phone == "" || message == "")
    alert("please fill the form properly");
  else {
    var myMessage = `service request: %0A - First Name: ${name1}%0A - Last Name: ${name2}%0A - Phone No: ${phone}%0A - Email: ${email}%0A - Message/Country: ${message}`;

    var token = "6899627212:AAHFtn0y3moXInUmn1Ilu4xCb2cAlX67COw";
    var chat_id = -1002017226805;
    var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${myMessage}&parse_mode=html`;

    let api = new XMLHttpRequest();
    api.open("GET", url, true);
    api.send();

    alert("message submitted seccessfully");
    alert("Our team will get back to you as fast as possible!!");
  }
});
