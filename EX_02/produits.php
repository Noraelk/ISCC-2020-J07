<?php
$produits =array(
    'T-shirt rouge'=>'15.50',
    'T-shirt vert' =>'15.50',
    'T-shirt argent' =>'16.50',
    'Short bleu' =>'19,99',
    'Short vert'=>'19,99',
    'Veste argent' =>'35');

    function afficher_produits($produits){
        echo '<table width=\"100%\" border=\"1\"
        cellspacing=\"1\" cellpadding=\"5\">
            <tr>
            <td>Produits</td>
            <td>Prix</td>
            </tr>
            </tables>';

    foreach ($produits as $total=>$value){
        echo '<table width=\"100%\" border=\"1\"
        cellspacing=\"1\" cellpadding=\"5\">
        <tr>
        <td>'.$total.'</td>
        <td>'.$value.'</td>
        </tr>
        </table>';

}
}
        afficher_produits($produits);
?>