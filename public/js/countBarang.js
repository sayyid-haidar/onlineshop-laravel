const barang = document.querySelector("#countBarang");
let jumlah = document.querySelector("#qty");

barang.addEventListener("click", e => {
    if (jumlah.value > 0) {
        if (e.target.id == "plusBarang") jumlah.value++;
        if (e.target.id == "minBarang") jumlah.value--;
    } else {
        jumlah.value = 1;
    }
});
