var contacts = [
    {
    name: "Chia Kim Hooi",
    phone: "+60124044404",
    email: "chiakh@duck.com",
    facebook: "xyz.chiakh"
    },
    {
    name: "Chan Xiao Hui",
    phone: "+60125785678",
    email: "chanxh@pingguo.com",
    facebook: "pqr.chanxh"
    },
    {
    name: "Tan Chin Tiong",
    phone: "+60193163616",
    email: "tanct@burungtiong.com",
    facebook: "abc.tanct"
    },
    {
    name: "Foo Yoke Wai",
    phone: "+60125575552",
    email: "fooyw@chicken.com",
    facebook: "ijk.fooyw"
    },
    {
    name: "Ho Xin Yi",
    phone: "+60195889776",
    email: "hoxy@myna.com",
    facebook: "mno.hoxy"
    }
    ]

var headerRow = document.createElement('tr');
headerRow.innerHTML = "<th>No.</th><th>Name</th><th>Phone</th><th>Email</th><th>Facebook</th>";
document.getElementById("contact-table")

for (var i = 0; i < contacts.length; i++) {
    var contact = contacts[i];
    var dataRow = document.createElement("tr");
    dataRow.innerHTML = 
    `<td>${i+1}</td><td>${contact.name}</td><td>${contact.phone}</td><td><a href = "mailto: "${contact.email}</a></td><td>${contact.facebook}</td><td><a href = "https://www.facebook.com/"${contact.facebook} target = "_blank" ${contact.facebook} </a></td>`
    document.getElementById("contact-table").appendChild(dataRow);
}