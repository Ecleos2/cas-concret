<?php
include_once ('./views/header.php');

$university= [
    "students"=>[
        ["firstname"=>"Paul", "lastname"=>"totor","age"=>20,"moyenne"=>[15,16,11],"cursus"=>"batiment" ],
        ["firstname"=>"Pierre", "lastname"=>"mage","age"=>21,"moyenne"=>[15,14,13],"cursus"=>"batiment" ],
        ["firstname"=>"Nico", "lastname"=>"totore","age"=>21,"moyenne"=>[15,16,13],"cursus"=>"batiment" ],
        ["firstname"=>"seb", "lastname"=>"toto","age"=>19,"moyenne"=>[15,13,10],"cursus"=>"developement" ],
        ["firstname"=>"jules", "lastname"=>"strauss","age"=>22,"moyenne"=>[11,16,10],"cursus"=>"technologie" ],
        ["firstname"=>"guy", "lastname"=>"jean","age"=>24,"moyenne"=>[15,16,18],"cursus"=>"technologie" ],
        ["firstname"=>"Paul", "lastname"=>"Omer","age"=>20,"moyenne"=>[15,16,12],"cursus"=>"batiment" ],
        ["firstname"=>"Paul", "lastname"=>"Toast","age"=>22,"moyenne"=>[15,13,12],"cursus"=>"developement" ],
        ["firstname"=>"Paul", "lastname"=>"Testo","age"=>20,"moyenne"=>[13,16,11],"cursus"=>"batiment" ],
        ["firstname"=>"Paul", "lastname"=>"totar","age"=>24,"moyenne"=>[14,16,12],"cursus"=>"developement" ],
        ["firstname"=>"Paul", "lastname"=>"testu","age"=>20,"moyenne"=>[13,15,11],"cursus"=>"batiment" ],
        ["firstname"=>"Paul", "lastname"=>"tator","age"=>19,"moyenne"=>[15,16,13],"cursus"=>"developement" ],
        ["firstname"=>"Paul", "lastname"=>"butor","age"=>20,"moyenne"=>[15,16,22],"cursus"=>"developement" ],
        ["firstname"=>"Paul", "lastname"=>"emma","age"=>23,"moyenne"=>[15,16,22],"cursus"=>"batiment" ],
        ["firstname"=>"Paul", "lastname"=>"smith","age"=>22,"moyenne"=>[15,16,22],"cursus"=>"technologie" ],
        ["firstname"=>"Paul", "lastname"=>"estor","age"=>20,"moyenne"=>[15,16,22],"cursus"=>"technologie" ],
    ]
];
?>
<h1>Suivi des élèves par cursus</h1>
<h2>cursus batiment</h2>
<table>
    <thead>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Age</th>
        <th>Moyenne</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach ($university["students"] as $k => $d ){
            //var_dump($university);
            if($d['cursus']==="batiment"){

                    echo "  <tr>
                          <td>" . $d["firstname"] . "</td>
                          <td>" . $d["lastname"] . "</td>
                          <td>" . $d["age"] . "</td>";
                          foreach ($d['moyenne'] as $n) {
                          echo
                          "<td>".$n."</td>";
                            }
                     echo " </tr>";
            }

        }
    ?>
    </tbody>

</table>

<h2>les étudiants du cursus dev</h2>
    <table>
        <thead>
        <tr>
            <th>Prénom</th>
            <th>nom</th>
            <th>Age</th>
            <th>Moyenne</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($university['students']as $k=>$d):
                if($d['cursus']=== "developement"):
        ?>
        <tr>
            <td><?=$d['firstname'] ?></td>
            <td><?= $d['lastname']?></td>
            <td><?= $d['age']?></td>
            <?php
            foreach ($d['moyenne'] as $n):
            ?>
                <td><?= $n ?></td>
            <?php endforeach;?>
        </tr>
            <?php endif;endforeach;?>
        </tbody>
    </table>

<h2>les étudiants du cursus technologie</h2>
    <table>
        <thead>
        <tr>
            <th>Prénom</th>
            <th>nom</th>
            <th>Age</th>
            <th>Moyenne</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($university['students']as $k=>$d):
                if($d['cursus']=== "technologie"):
        ?>
        <tr>
            <td><?=$d['firstname'] ?></td>
            <td><?= $d['lastname']?></td>
            <td><?= $d['age']?></td>
            <?php
            foreach ($d['moyenne'] as $n):
            ?>
                <td><?= $n ?></td>
            <?php endforeach;?>
        </tr>
            <?php endif;endforeach;?>
        </tbody>
    </table>

<?php
include_once ('./views/footer.php');