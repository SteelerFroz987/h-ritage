<div id="affiche"></div>

<script src="./jquery.js"></script>

<script>
    $(document).ready(function(){
        reponse = prompt('Réussie');
        getphrase(reponse);
    });

    function getphrase(reponse){
        $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: {
                'reponse': reponse
            },
            datatype: 'json',
            success: function(data)  {
                $('#affiche').append(data);
            },
            error: function(){
                alert('echec');
            }                        
        })
    }
</script>