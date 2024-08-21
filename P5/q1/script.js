//script.js
var parking = [
    {
        vehicleNo: "WYR9941",
        driver: "Tham Mun Fatt",
        block: "E",
        floor: "2",
        bay: 11
    },
    {
        vehicleNo: "PKC7453",
        driver: "Chia Kim Hooi",
        block: "C",
        floor: "3A",
        bay: 15
    },
    {
        vehicleNo: "WC852E",
        driver: "Ho Jo Ee",
        block: "E",
        floor: "G",
        bay: 34
    },
    {
        vehicleNo: "AGP8681",
        driver: "Foo Yoke Wai",
        block: "C",
        floor: "3A",
        bay: 19
    },
    {
        vehicleNo: "WA1368Y",
        driver: "Wong Pei Lin",
        block: "A",
        floor: "1",
        bay: 1
    }];
    
    var tableBody = document.querySelector("#parking-table tbody");
    
    for (var i = 0; i < parking.length; i++){
        var row = document.createElement("tr");
        if (i%2==0 && Math.abs(i - (parking.length - 1))!=0){
            row.classList.add("even-row");
        }
        else if(i%2!=0 && Math.abs(i - (parking.length - 1))!=0){
            row.classList.add("odd-row");
        }
        else if(Math.abs(i - (parking.length - 1))!=0){
            row.classList.add("last-row");
        }
        row.innerHTML = `
            <td>${parking[i].vehicleNo}</td>
            <td>${parking[i].driver}</td>
            <td>${parking[i].block}</td>
            <td>${parking[i].floor}</td>
            <td>${parking[i].bay}</td>
        `;
        tableBody.appendChild(row);
    }