
function showProfile(profile)
{
$('#profile .modal-body').html(profile);
        $('#profile').modal();
}

function getProfile()
{
$.ajax({
url: '/profile/show',
        type: 'GET',
        success: function (res) {
        if (!res) alert('Ошибка!');
                showProfile(res);
        },
        error: function () {
        alert('Error!');
        }
});
}


$('#profile .modal-body').on('click', '.del-item', function () {
var id = $(this).data('id');
        $.ajax({
        url: '/profile/del-item',
                data: {id: id},
                type: 'GET',
                success: function (res) {
                if (!res) alert('Ошибка!');
                        showProfile(res);
                },
                error: function () {
                alert('Error!');
                }
        });
});

        function clearProfile()
        {
        $.ajax({
        url: '/profile/clear',
                type: 'GET',
                success: function (res) {
                if (!res) alert('Ошибка!');
                        showProfile(res);
                },
                error: function () {
                alert('Error!');
                }
        });
        }

$(' .add-to-profile').on('click', function (e) {
    e.preventDefault;
var id = $(this).data('id');
        $.ajax({
        url: '/profile/add',
                data: {id: id},
                type: 'GET',
                success: function (res) {
                if (!res) alert('Ошибка!');
                        showProfile(res);
                },
                error: function () {
                alert('Error!');
                }
        });
});

//$('.add-to-profile').on('click', function (e) {
//e.preventDefault();
//        var id = $(this).data('id'),
//        $.ajax({
//        url: '/profile/add',
//                data: {id: id},
//                type: 'GET',
//                success: function (res) {
//                showProfile(res);
//                },
//                error: function () {
//                if (!res) alert('Error!');
//                }
//        });
//});