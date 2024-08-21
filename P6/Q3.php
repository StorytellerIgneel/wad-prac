<!DOCTYPE html>
<html>
    <head>
        <title>Q3</title>
        <link href="/dist/styles.css" rel="stylesheet">
    </head>
    <body class = "bg-gray-100 p-6">
    <?php
    $gundams = [
        [
            'modelName' => 'GAT-X105 Strike Gundam',
            'codeName' => 'Strike',
            'pilot' => 'Kira Yamato',
            'affiliation' => 'Archangel',
            'series' => 'SEED'
        ],
        [
            'modelName' => 'ZGMF-X20A Strike Freedom Gundam',
            'codeName' => 'Strike Freedom',
            'pilot' => 'Kira Yamato',
            'affiliation' => 'Freedom',
            'series' => 'SEED'
        ],
        [
            'modelName' => 'RX-78-2 Gundam',
            'codeName' => 'Gundam',
            'pilot' => 'Amuro Ray',
            'affiliation' => 'Earth Federation',
            'series' => 'UC'
        ],
        [
            'modelName' => 'GN-0000+GNR-010 00 Raiser',
            'codeName' => '00 Raiser',
            'pilot' => 'Setsuna F. Seiei',
            'affiliation' => 'Celestial Being',
            'series' => 'OO'
        ],
        [
            'modelName' => 'MSA-0011 S Gundam',
            'codeName' => 'S Gundam',
            'pilot' => 'Rena Kisaragi',
            'affiliation' => 'Plutone',
            'series' => 'SEED'
        ],
        [
            'modelName' => 'ZGMF-X42S Destiny Gundam',
            'codeName' => 'Destiny',
            'pilot' => 'Shinn Asuka',
            'affiliation' => 'ZAFT',
            'series' => 'SEED Destiny'
        ],
        [
            'modelName' => 'RX-0 Unicorn Gundam',
            'codeName' => 'Unicorn',
            'pilot' => 'Banagher Links',
            'affiliation' => 'Neo Zeon',
            'series' => 'UC'
        ],
        [
            'modelName' => 'MS-06S Char\'s Zaku II',
            'codeName' => 'Char\'s Zaku',
            'pilot' => 'Char Aznable',
            'affiliation' => 'Zeon',
            'series' => 'UC'
        ],
        [
            'modelName' => 'ASW-G-08 Gundam Barbatos',
            'codeName' => 'Barbatos',
            'pilot' => 'Mikazuki Augus',
            'affiliation' => 'Tekkadan',
            'series' => 'Iron Blooded Orphans'
        ],
        [
            'modelName' => 'ASW-G-11 Gundam Gusion',
            'codeName' => 'Gusion',
            'pilot' => 'Nadi',
            'affiliation' => 'Tekkadan',
            'series' => 'Iron Blooded Orphans'
        ]
    ];

    
        $tableCaption = "<caption class='text-lg text-gray-700 my-4'><i>Gundamssssss</i></caption>";

        $tableHeader = '<tr class = "bg-red-500 text-white font-bold">
                        <th class = "p-2 text-center">Model</th>
                        <th class = "p-2 text-center">CodeName</th>
                        <th class = "p-2 text-center">Pilot</th>
                        <th class = "p-2 text-center">Affiliation</th>
                        <th class = "p-2 text-center">Series</th>
                        </tr>';

        $tableRows = '';
        $rowIndex = 0;

        foreach($gundams as $gundam){
            $rowClass = $rowIndex % 2 == 0 ? 'bg-gray-200' : 'bg-white';
            $rowClass .= $rowIndex == count($gundams) - 1 ? ' border-b-4 border-red-500' : '';
            $tableRows .= "<tr class='$rowClass'>";
            foreach($gundam as $key => $value){
                $tableRows.= "<td class = 'p-2 text-center'>$value</td>";
            }
            $tableRows .= "</tr>";
        }
    
        $table = '<table class ="border-collapse m-0 not-italic min-w-full bg-white">' . $tableCaption . $tableHeader . $tableRows . "</table>";

        echo $table;
    ?>
    </body>
</html>
