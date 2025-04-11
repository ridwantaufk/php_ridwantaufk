let currentNama = "";

function scriptSaran(id, tipe) {
  const input = document.getElementById(id);
  const listId = id + "_list";
  const list = document.createElement("datalist");
  list.id = listId;
  document.body.appendChild(list);
  input.setAttribute("list", listId);

  input.addEventListener("input", function () {
    const val = this.value;
    if (val.length < 1) return;

    if (tipe === "nama") currentNama = val;

    fetch(
      `partials/saran.php?tipe=${tipe}&q=${encodeURIComponent(
        val
      )}&nama=${encodeURIComponent(currentNama)}`
    )
      .then((res) => res.json())
      .then((data) => {
        // console.log("data saran : ", data);
        list.innerHTML = "";
        data.forEach((item) => {
          const option = document.createElement("option");
          option.value = item;
          list.appendChild(option);
        });
      });
  });
}

saran("nama", "nama");
saran("alamat", "alamat");
saran("hobi", "hobi");

document.getElementById("nama").addEventListener("input", function () {
  if (this.value.trim() === "") {
    currentNama = "";
    document.getElementById("alamat").value = "";
    document.getElementById("hobi").value = "";
  }
});
