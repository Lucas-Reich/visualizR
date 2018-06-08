//Das ist ein beispiel, um zu zeigen, dass man auch dynmaisch über javascript neue daten vom server abfragen kann
//und somit nicht jedes mal die ganze seite vom server anzufragen

function queryData() {
//alternative möglichkeit über javascript anfragen an den server zu senden ohne JQuery
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && 200 == this.status) {

            console.log(this.responseText);
            return this.responseText;
        }
    };
    xmlhttp.open("POST", "/api/all_election_results", true);
    xmlhttp.send();
}

function ajaxCall() {
//möglichkeit um mit JQuery anfragen an den server zu senden
    $.ajax({
        'dataType': 'JSON',
        'method': 'POST',
        'url': "http://localhost/api/all_election_results",
        'data': {
            //hier kann man die post parameter übergeben, welche dann im code mittels $request->paramPost()->get('PARAMETER_NAME') ausgelesen werden können
        },
        'beforeSend': function() {
            //funktion die vor dem senden der anfrage ausgefüht wird
        },
        'success': function(data) {
            //funktion die aufgerufen wird, wenn die anfrage verarbeitet wurde und kein fehler ausgegeben wurde
            //die rückgabe des servers ist in der variable "data" gespeichert
            console.log(data); 
            var i;
            var liste = "";
            var element;
            for (i = 0; i < data.length; i++) {
                var current = 0;
                for (element in data[i]) {
                    current++;
                    //ToDo: entfernen
                    if (current == 9) {
                        break;
                    }
                    liste += '<li>' + element + ': ' + data[i][element] + '</li>';
                }
                $('#' + i).attr('data-content','<div class="popover-content"><ul class="popover-list">' + liste + '</ul></div>');
                liste = "";
            }  
            return data;
        },
        'error': function() {
            //funktion die aufgerufen wurde, wenn ein fehler bei der verabeitung auf dem server aufgetreten ist
            //könnte man zum beispiel mit dem folgenden snipped generisch abgefangen werden:
            alert('Sorry a error occured!');
        },
        'complete': function() {
            //funktion die augerufen wird, wenn response oder error handling abgeschlossen wurde
        }
    })
}