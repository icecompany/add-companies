$(document).ready(function () {
    $('#regID').selectpicker().ajaxSelectPicker({
        ajax: {
            url: 'https://mkv.xakepok.com/index.php?option=com_projects&task=api.getCities&api_key=4n98tpw49vtpw496npyww9p6by',
            type: 'GET',
            dataType: 'json',
            data: {
                q:'{{{q}}}'
            }
        },
        locale: {
            emptyTitle: 'Город'
        },
        preprocessData:function(data) {
            var i, l = data.length, array = [];
            if (l) {
                for (i = 0; i < l; i++) {
                    array.push($.extend(true, data[i], {
                        text: data[i].name,
                        value: data[i].id,
                        data: {
                            subtext: data[i].region
                        }
                    }))
                }
            }
            return array;
        }
    });
    $('#regID_fact').selectpicker().ajaxSelectPicker({
        ajax: {
            url: 'https://mkv.xakepok.com/index.php?option=com_projects&task=api.getCities&api_key=4n98tpw49vtpw496npyww9p6by',
            type: 'GET',
            dataType: 'json',
            data: {
                q:'{{{q}}}'
            }
        },
        locale: {
            emptyTitle: 'Город'
        },
        preprocessData:function(data) {
            var i, l = data.length, array = [];
            if (l) {
                for (i = 0; i < l; i++) {
                    array.push($.extend(true, data[i], {
                        text: data[i].name,
                        value: data[i].id,
                        data: {
                            subtext: data[i].region
                        }
                    }))
                }
            }
            return array;
        }
    });
});