<h1>LISTE</h1>

<table>
    <tr>
        <th>Type</th>
        <th>Nombre de chambre</th>
        <th>Loyer</th>
        <th>Quartier</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <?php foreach($donnes as $habitat) { ?> 
    <tr>
        <td><?php echo $habitat['idType'] ;?></td>
        <td><?php echo $habitat['nbChambre'] ;?></td>
        <td><?php echo $habitat['loyer'] ;?></td>
        <td><?php echo $habitat['quartier'] ;?></td>
        <td><?php echo $habitat['desc'] ;?></td>
        <td>Supp</td>
    </tr>
    <?php } ?>

</table>
