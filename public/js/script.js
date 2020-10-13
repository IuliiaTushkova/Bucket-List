//onclick delete all

function alertBeforeSuppression(){
    document.getElementById('delete');

    function askBeforeDelete(){
        alert('Tu veux supprimer toutes les idées ? ')
    }
    btnDelete.addEventListener('click', askBeforeDelete);
}