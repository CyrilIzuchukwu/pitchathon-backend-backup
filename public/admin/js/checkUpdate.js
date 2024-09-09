//Counting checked checkboxes
const countDisplay = document.getElementById("count");

const checkboxes = () => {
  var inputElems = document.getElementsByTagName("input"),
    count = 0;

  for (var i = 0; i < inputElems.length; i++) {
    if (inputElems[i].type == "checkbox" && inputElems[i].checked == true) {
      count++;
      let a = inputElems[i].parentElement;
      let b = a.parentElement;
      b.style.backgroundColor = "rgb(221, 45, 56, 0.2)";
    } else {
      let a = inputElems[i].parentElement;
      let b = a.parentElement;
      b.style.backgroundColor = "rgb(255, 255, 255)";
    }
  }
  countDisplay.innerHTML = count;
};
