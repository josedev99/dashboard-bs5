console.log("event...")

try {
    const form_csv = document.getElementById("form-import-csv");
    if (form_csv) {
        form_csv.addEventListener("submit", async(e) => {
            e.preventDefault();
            const form_data = new FormData(form_csv);
            let result = await axios.post("controller/importCSVController.php", form_data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            });
            show_rows_table(result.data);
            console.log(result);
        })
    }
} catch (err) {
    console.log(err)
}

function show_rows_table(data) {
    let rows_table = document.getElementById("datatable-rows");
    rows_table.innerHTML = "";
    data.forEach(element => {
        //let rows_content = document.createRange().createContextualFragment( /*html*/ );
        rows_table.innerHTML += `
        <tr>
            <td>${element.id}</td>
            <td>${element.nombre}</td>
            <td>${element.correo}</td>
            <td>${element.celular}</td>
        </tr>`;
    });
}