let uncheckone = document.querySelector("#uncheckone");
let unchecktwo = document.querySelector("#unchecktwo");
let uncheckthree = document.querySelector("#uncheckthree");
let uncheckfour = document.querySelector("#uncheckfour");
let uncheckfive = document.querySelector("#uncheckfive");
let checkone = document.querySelector("#checkone");
let checktwo = document.querySelector("#checktwo");
let checkthree = document.querySelector("#checkthree");
let checkfour = document.querySelector("#checkfour");
let checkfive = document.querySelector("#checkfive");

function disablecheckone() {
  if (uncheckone.checked == true) {
    checkone.disabled = true;
  } else if (uncheckone.checked == false) {
    checkone.disabled = false;
  } else {
    return 0;
  }
}

function disablechecktwo() {
  if (unchecktwo.checked == true) {
    checktwo.disabled = true;
  } else if (unchecktwo.checked == false) {
    checktwo.disabled = false;
  } else {
    return 0;
  }
}

function disablecheckthree() {
  if (uncheckthree.checked == true) {
    checkthree.disabled = true;
  } else if (uncheckthree.checked == false) {
    checkthree.disabled = false;
  } else {
    return 0;
  }
}

function disablecheckfour() {
  if (uncheckfour.checked == true) {
    checkfour.disabled = true;
  } else if (uncheckfour.checked == false) {
    checkfour.disabled = false;
  } else {
    return 0;
  }
}

function disablecheckfive() {
  if (uncheckfive.checked == true) {
    checkfive.disabled = true;
  } else if (uncheckfive.checked == false) {
    checkfive.disabled = false;
  } else {
    return 0;
  }
}

$("form").on("submit", function (event) {
  $.ajax({
    type: "post",
    url: "save.php",
    data: $(this).serialize(),
    cache: false,
    success: function (data) {
    },
    error: function (xhr, status, error) {
      // alert(error);
    }
  });
});