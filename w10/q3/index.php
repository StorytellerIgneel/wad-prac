<html>
    <head>
        <title>GUNDAMS</title>
        <style>
            table, th, td{
                border: 1px solid black;
                padding: 5px;
            }
            th{
                background-color: blue;
                font-weight: bold;
                color: white;
                text-align: center;
                cursor: pointer;
            }
            table{
                border-collapse: collapse;
            }
        </style>
        <script>
            const gundams = [
                {
                    model: "GN001",
                    name: "Setsuna F Seiei",
                    pilot: "Setsuna F Seiei"
                },
                {
                    model: "ZGMF/A-262PD-P",
                    name: "Mighty Strike Freedom",
                    pilot: "Kira Yamato & Lacus Clyne"
                },
                {
                    model: "XVX-016",
                    name: "Gundam Aerial",
                    pilot: "Suletta Mercury"
                }
                //... add more gundams here...
            ]
        </script>
    </head>
    <body>
        <script>
            const table = document.createElement("table");
            const headers = ["Model", "Name", "Pilot"];

            //create tabble row
            const headerRow = document.createElement("tr");
            for (let i = 0; i < headers.length; i++) {
                const headerCell =document.createElement("th");
                headerCell.textContent =headers[i];
                headerRow.appendChild(headerCell);
            }
            table.appendChild(headerRow);
            
            for (let i = 0; i < gundams.length; i++) {
                const book = gundams[i]
                const dataRow =document.createElement("tr");
                table.appendChild(document.createElement("tr")).append(
                    Object.assign(document.createElement("td"), { textContent: gundams[i].model }),
                    Object.assign(document.createElement("td"), { textContent: gundams[i].name }),
                    Object.assign(document.createElement("td"), { textContent: gundams[i].pilot })
                );
            }
            document.body.appendChild(table);
        </script>
    </body>
</html>
