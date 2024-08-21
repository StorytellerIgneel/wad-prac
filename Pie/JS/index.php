<!DOCTYPE html>
<html>
    <head>
        <title>HTML DOM examples</title>
    </head>
    <body>
        <div id  = "wrapper">
        <script>
            window.onload = function() {
                var agents = [
                    {name: "Google Chrome", version: "68.0.3440.106"},
                    {name: "Mozilla Firefox", version: "61.0.1"},
                    {name: "Internet Explorer", version: "11.0.9600.19041"},
                    {name: "Safari", version: "11.1.2"}
                ];

                const agentList =document.createElement("ul");
                agents.forEach(element => {
                    const listItem =document.createElement("li");
                    listItem.textContent = `${element.name} ${element.version}`;
                    agentList.appendChild(listItem);
                });

                document.getElementById("wrapper").appendChild(agentList);

                var gundam = [
                    {model: "GATX105 Strike", pilot: "Kira Yamato"},
                    {model: "GN001 Exia", pilot: "Setsuna F Seiei"},
                    {model: "Aerial", pilot: "Suletta Mercury"}
                ]

                const gundamList = document.createElement("ol");
                gundam.forEach(gundam => {
                    const listItem = document.createElement("ul");
                    listItem.textContent = `Model: ${gundam.model}`;
                    const listChild = document.createElement("li");
                    listChild.textContent = `Pilot: ${gundam.pilot}`;
                    const newline =document.createElement("br");
                    listItem.appendChild(listChild);
                    listItem.appendChild(newline);
                    gundamList.appendChild(listItem);
                })

                document.getElementById("wrapper").appendChild(gundamList);

                var newGundams = [
                    {model: "Wing", pilot: "Hiro Yui"},
                    {model: "Barbatos", pilot: "Mikazuki"},
                    {model: "Dynames", pilot: "Lockon Stratos"}
                ]

                const gundamList2 = document.getElementsByTagName("ol")[0];
                newGundams.forEach(gundam => {
                    const listItem = document.createElement("ul");
                    listItem.textContent = `Model: ${gundam.model}`;
                    const listChild = document.createElement("li");
                    listChild.textContent = `Pilot: ${gundam.pilot}`;
                    const newline =document.createElement("br");
                    listItem.appendChild(listChild);
                    listItem.appendChild(newline);
                    gundamList.appendChild(listItem);
                })

                newGundams.reverse().forEach(gundam => {
                    const listItem = document.createElement("li");
                    listItem.textContent = `Model: ${gundam.model}`;
                    gundamList.insertBefore(listItem, gundamList.firstChild);
                })

                //5
                var newGundams = [
                    "Aerial",
                    "Calibarn",
                    "Pharact",
                    "Darilbalde"
                ]

                while(gundamList.firstChild)
                    gundamList.removeChild(gundamList.firstChild);

                newGundams.forEach(model => {
                    const listItem = document.createElement("li");
                    listItem.textContent = model;
                    gundamList.appendChild(listItem);
                })
            }
        </script>
    </body>
</html>