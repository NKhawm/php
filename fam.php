<?php
echo "My family";
$arr = [
    ['First Name'=> 'Go','Last Name'=>'Sukte','Birth Place'=>'Mindat','Age'=> '47','Favorite Food'=> 'Fried rice'],
    ['First Name'=> 'Niang','Last Name'=>'Sukte','Birth Place'=>'Tedim','Age'=> '36','Favorite Food'=> 'မုန့်ဟင်းခါး'],
    ['First Name'=> 'Thawn','Last Name'=>'Sukte','Birth Place'=>'London','Age'=> '10','Favorite Food'=> 'Mash Poatato'],
    ['First Name'=> 'Lian','Last Name'=>'Sukte','Birth Place'=>'London','Age'=> '6','Favorite Food'=> 'Chicken Nugget'],
    ['First Name'=> 'Karis','Last Name'=>'Sukte','Birth Place'=>'London','Age'=> '3','Favorite Food'=> 'Fried rice'],
];
$table = "<style>

table,th,td{
    border:2px solid black;
    border-collaspe:collaspe;
    text-align:center;
    font-weigh:bold;

}
table{
    width:50%;
}
th{
    height:50px;
    background-color:grey;
    color:white;
}
tr-nth-child(even){
    background-color:brown;
}
tr:hover{
    background-color:aqua;
}
td{
    padding:20px;
}

</style>";
$table .= "<table>
           <thead>
           <tr>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Birth Place</th>
           <th>Age</th>
           <th>Favourite Food</th>
           </tr>
           </thead>
           <tbody>
";
foreach($arr as $f){
    $table .= "<tr>
               <td>{$f['First Name']}</td>
               <td>{$f['Last Name']}</td>
               <td>{$f['Birth Place']}</td>
               <td>{$f['Age']}</td>
               <td>{$f['Favorite Food']}</td>
               </tr> ";
            }
    $table .= "</tbody>
               </table>";
   echo "$table";




?>