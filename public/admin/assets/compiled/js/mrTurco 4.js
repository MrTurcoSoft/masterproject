/**
 * Created by nette on 17.09.2015.
 */

jQuery(document).ready(function ($) {

});

function ByTurcoSoftModal (url, title){
    $('#byturcosoft-modal-content').html('...... İçerik yükleniyor, lütfen bekleyin! ........');
    $('.modal-title').html(title);
    $('#byturcosoft-modal-content').load(url, function(){

    });
    $('#byturcosoft-modal').modal('show');
}

function ByTurcoSoftConfirmDelete(url){
    if(confirm('Are you sure deleting this record ?')){
        window.location.href = url;
    }
    return false;
}

