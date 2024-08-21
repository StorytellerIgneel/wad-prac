<!DOCTYPE html>
<html>
    <head>
        <title>Q4</title>
    </head>
    <body>
        <?php 
        $contacts = [
            [
            'name' => 'Chia Kim Hooi',
            'phone' => '+60124044404',
            'email' => 'chiakh@duck.com',
            'facebook' => 'xyz.chiakh',
            ],
            [
            'name' => 'Chan Xiao Hui',
            'phone' => '+60125785678',
            'email' => 'chanxh@pingguo.com',
            'facebook' => 'pqr.chanxh',
            ],
            [
            'name' => 'Tan Chin Tiong',
            'phone' => '+60193163616',
            'email' => 'tanct@burungtiong.com',
            'facebook' => 'abc.tanct',
            ],
            [
            'name' => 'Foo Yoke Wai',
            'phone' => '+60125575552',
            'email' => 'fooyw@chicken.com',
            'facebook' => 'ijk.fooyw',
            ],
            [
            'name' => 'Ho Xin Yi',
            'phone' => '+60195889776',
            'email' => 'hoxy@myna.com',
            'facebook' => 'mno.hoxy',
            ]
            ];
            
            $tableHeader = "<tr><th>Name</th><th>Phone</th><th>Email</th><th>facebook</th><th>twitter</th></tr>";

            $tableRows = '';

            foreach( $contacts as $contact){
                $tableRows .= '<tr>';
                foreach($contact as $key => $value){
                    //hyperlink for email
                    if ($key == 'email'){
                        $tableRows.= '<td><a href="mailto:'.$value.'">'.$value.'</a></td>';
                    }
                    //for fb
                    elseif ($key == 'facebook'){
                        $tableRows.= '<td><a href="https://www.facebook.com/'.$value.'">'.$value.'</a></td>';
                    }
                    else{
                        $tableRows.= '<td>'.$value.'</td>';
                    }
                }
                $tableRows .= "</tr>";
            }

            $table = "<table>" . $tableHeader . $tableRows . "</table>";
            echo $table;
        ?>
    </body>
</html>