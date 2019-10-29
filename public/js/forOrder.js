
var check = 0;
var temp = document.getElementById("myTR").getElementsByTagName("tr").length - 1;
console.log(temp);
var count = 0;
document.getElementById("total").innerHTML = temp;
function search() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("input");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTR");
    tr = table.getElementsByTagName("tr");
    count = 0;
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[check];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
                count++;
            }
        }
    }
    document.getElementById("total").innerHTML = temp - count;
}

function choose(e) {
    if (e == 'OrderNumber') {
        check = 0;
    } else if (e == 'OrderDate') {
        check = 1;
    } else if (e == 'RequiredDate') {
        check = 2;
    } else if (e == 'ShippedDate') {
        check = 3;
    } else if (e == 'Status') {
        check = 4;
    } else if (e == 'Comments') {
        check = 5;
    } else if (e == 'FirstName') {
        check = 6;
    } else if (e == 'LastName') {
        check = 7;
    }
    console.log(check);
    document.getElementById('show_').innerHTML = e;
}
