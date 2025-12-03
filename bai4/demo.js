var nhom = [
  [1, "trần nguyên"],
  [2, "trần hà linh"],
  [3, "trình hà lân"],
];

let body = document.getElementById("table-body");

for (let i = 0; i < nhom.length; i++) {
    let row = document.createElement("tr"); // tạo dòng

  let cellId = document.createElement("td"); // ô ID
  cellId.textContent = nhom[i][0];

  let cellName = document.createElement("td"); // ô Họ tên
  cellName.textContent = nhom[i][1];

  row.appendChild(cellId);
  row.appendChild(cellName);

  body.appendChild(row);
}

function bamnut(){
  document.getElementById("mybutton").onmouseover = function(){
  alert("su kien da duoc kich hoat");
  };
}

function formm(){
  document.getElementById("myform").addEventListener("submit", function(e){
    let name = document.getElementById("name").value;
    if (name === ""){
      alert("vui long nhap ten!");
      e.preventDefault();// ngăn chặn gửi form
    }else{
      alert(name);
    }
  });
}