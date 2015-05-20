/**
 * Created by Armel on 19/05/2015.
 */

    function supprimer(idmembre){

        $.get(
            '/NeighborFood/modele/admin/m_supprimerUser.php',
            {idmembre: idmembre},
            function (data) {
                if(data){
                    alert("L'utilisateur n'a pas été supprimé");
                    alert(data);
                }else{
                    alert("L'utilisateur a été supprimé");
                    document.getElementById(idmembre).style.display = 'none';
                }
            }
        )
    }





