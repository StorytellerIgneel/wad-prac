<!DOCTYPE html>
<html>
    <title>Lab 04</title>
    <body>
        <script>
            // 1. declare an array named numbers and initialize it with the following values:
            const numbers = [75.43, 18.76, 99.41, 18.79, 74.53, 86.81, 23.51, 66.17];

            /*2. Using the array numbers, calc and output sum and avg of nums*/
            const sum = numbers.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
            const avg = sum / numbers.length;

            //3. multiply all numbers by 0.863 in array
            numbers.forEach(num => num *= 0.863);

            //4. Declare object cust and initialize values
            const customer = {
                id: "C001",
                name: "Im gay",
                email: "123456",
                phone: "+60123456",
                address: "1, jln, a"
            }

            for (const property in customer) {  
                console.log(`${property}: ${customer[property]}`);
            }


            //5. Output the properties of the object
            for (const property in customer){
                console.log(`${property} : ${customer[property]}`);
            }
            //6. Declare an array named customers and initialise with 5 different objects with same properties in Q4
            const customers = [
                {
                    id : "P0001",
                    name : "Anita Pea",
                    email : "anitapea@gmel.my",
                    phone : "+0124205367",
                    address : "312 Jalan Burung Besar, 69420 Kuala Pumlur"
                },
                {
                    id : "P0010",
                    name : "Pea Pea Big",
                    email : "peapeabig@gmel.my",
                    phone : "+0122637845",
                    address : "311 Jalan Burung Kecil, 26373 Lakua Lupmur"
                },
                {
                    id : "P0011",
                    name : "Smol Pea Pea",
                    email : "smolpeapea@gmel.my",
                    phone : "+0126437358",
                    address : "313 Jalan Burung Senget, 75386 Alaku Pulrum"
                },
                {
                    id : "P0100",
                    name : "Pee Pea Average",
                    email : "peepeaaverage@gmel.my",
                    phone : "+012674879",
                    address : "310 Jalan Burung Tiang, 24354 Kuaal Rumpul"
                },
                {
                    id : "P0101",
                    name : "Teoh Gay Hong",
                    email : "teohgayhong@gmel.my",
                    phone : "+0125364754",
                    address : "National Trash Reserve"
                }
            ]
            //7. Output the contents of array customers
            for (let i =0; i < customers.length; i++){
                console.log(`Customer ${i+1} :
                id : ${customers[i].id}
                name : ${customers[i].name}
                email : ${customers[i].email}
                phone : ${customers[i].phone}
                address : ${customers[i].address}`)
            } 
        </script>
    </body>
</html>