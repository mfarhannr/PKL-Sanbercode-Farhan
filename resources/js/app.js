import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    fetchData();
});

function fetchData() {
    fetch("/api/karyawan")
        .then((response) => response.json())
        .then((data) => {
            displayData(data.karyawan);
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        });
}

function displayData(karyawanList) {
    const ul = document.getElementById("karyawanList");
    ul.innerHTML = "";

    karyawanList.forEach((karyawan) => {
        const li = document.createElement("li");
        li.textContent = `${karyawan.nama} - ${karyawan.jenis_kelamin}`;
        ul.appendChild(li);
    });
}