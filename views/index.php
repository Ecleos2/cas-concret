
$university= [
<?php
include_once ('./views/header.php');

    ["firstname"=>"Paul","lastname"=>"Mirabelle","age"=>20,"moyenne"=>[15,16,11],"cursus"=>"batiment"],
    ["firstname"=>"Leo","lastname"=>"Paki","age"=>22,"moyenne"=>[10,12,11],"cursus"=>"Peinture"],
    ["firstname"=>"Mirabelle","lastname"=>"akira","age"=>19,"moyenne"=>[15,16,11],"cursus"=>"Develloppeur"],
    ["firstname"=>"Lea","lastname"=>"magid","age"=>23,"moyenne"=>[10,14,18],"cursus"=>"Develloppeur"],
    ["firstname"=>"Theo","lastname"=>"Dumont","age"=>22,"moyenne"=>[19,11,15],"cursus"=>"batiment"],
    ["firstname"=>"Max","lastname"=>"piat","age"=>21,"moyenne"=>[11,18,11],"cursus"=>"Peinture"],
    ["firstname"=>"Flavien","lastname"=>"raoul","age"=>22,"moyenne"=>[10,19,11],"cursus"=>"batiment"],
    ["firstname"=>"Patrick","lastname"=>"tata","age"=>21,"moyenne"=>[19,14,13],"cursus"=>"Peinture"],
    ["firstname"=>"Toto","lastname"=>"micha","age"=>20,"moyenne"=>[15,15,11],"cursus"=>"batiment"],
    ["firstname"=>"Aragon","lastname"=>"bari","age"=>23,"moyenne"=>[18,12,11],"cursus"=>"Develloppeur"],
    ["firstname"=>"Steve","lastname"=>"panza","age"=>20,"moyenne"=>[11,10,11],"cursus"=>""],
    ["firstname"=>"Thomas","lastname"=>"panizi","age"=>21,"moyenne"=>[17,10,15],"cursus"=>"batiment"],
    ["firstname"=>"paka","lastname"=>"caisson","age"=>20,"moyenne"=>[12,18,19],"cursus"=>"Develloppeur"],
    ["firstname"=>"Archimede","lastname"=>"fize","age"=>20,"moyenne"=>[15,10,11],"cursus"=>"batiment"],
    ["firstname"=>"Ivan","lastname"=>"moreau","age"=>24,"moyenne"=>[15,16,11],"cursus"=>"batiment"],
    ["firstname"=>"Etienne","lastname"=>"petiteau","age"=>23,"moyenne"=>[18,16,14],"cursus"=>"batiment"],


<table>
  <tr>
    <td>Prénom</td>
    <td>Nom</td>
    <td>Age</td>
    <td>moyenne</td>
  </tr>
  </thead>
  <tbody>
  <?php
  foreach ($university["students"] as $k => $d ):
    ?>
    if($d['cursus']==x="batiment"){

        echo" <tr>
        <td>". $d ["firstname"] . "</td>;
        <td>". $d ["lastname"] . "</td>;
        <td>". $d ["age"] . "</td>";
        foreach ($d['moyenne'] as $n) {
            echo
            "<td>".$n"</td>";
        }
        </tr>";
    
    }
  }
  ?>
  </tbody>

  </table>

include_once ('./views/footer.php');